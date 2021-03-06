<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Project\Services\AwsService;
use Project\Services\FileService;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Page extends Model
{
    const STATUS_DRAFT = 1;
    const STATUS_PUBLISHED = 2;

    protected $table = "pages";

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    public $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'slug',
        'template',
        'status_id',
        'locale',
    ];


    public function seo()
    {
        return $this->hasMany(Seo::class, 'entity_id', 'id')->where(["entity_type" => self::class])->first();
    }

    public function getStatusAttribute()
    {
        $statuses = [
            self::STATUS_DRAFT => "Draft",
            self::STATUS_PUBLISHED => "Published"
        ];

        return $statuses[$this->status_id];
    }

    public function manageSeo($request)
    {
        $seos = $request->get('seo');

        foreach ($seos as $seo) {
            if ($seo['id'] == "new") {
                $entitySeo = new Seo(array_merge($seo, ["entity_id" => $this->id, "entity_type" => self::class]));
                $entitySeo->save();
            } else {
                $entitySeo = Seo::find($seo['id']);
                $entitySeo->update($seo);
            }
        }
    }

    public static function search($request)
    {
        $query = (new Page())->newQuery();
        $query->select('pages.*');

        if($request->has('search')) {
            $search = $request->get('search');

            $query->where(function ($query) use ($search) {
                $query->where('pages.title', 'LIKE', '%'.$search.'%');
                $query->orWhere('pages.slug', 'LIKE', '%'.$search.'%');
                $query->orWhere('pages.content', 'LIKE', '%'.$search.'%');
            });
        }

        if($request->has('sort')) {
            $query->orderBy('pages.'.$request->get('sort'), $request->get('order'));
        } else {
            $query->orderBy('pages.created_at', 'desc');
        }

        $query->distinct();

        return $query->paginate();
    }

}
