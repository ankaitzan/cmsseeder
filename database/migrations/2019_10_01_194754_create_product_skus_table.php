<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_skus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('sku');
            $table->text('variants')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('discount_price')->nullable();
            $table->string('internal_reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_skus');
    }
}
