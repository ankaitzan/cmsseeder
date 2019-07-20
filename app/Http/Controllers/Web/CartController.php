<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\ApiController;
use App\Http\Transformers\CartTransformer;
use App\Models\Cart;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->setTransformer(new CartTransformer());
    }

    /*
    |--------------------------------------------------------------------------
    | AJAX
    |--------------------------------------------------------------------------
    */

    public function add(Request $request, $product_id)
    {
        $product = Product::find($product_id);

        // Create cart if not exists
        $cart = Cart::where(['hash' => Cookie::get('cs_cart_hash')])->first();

        if(!$cart) {

            $cart_hash = md5(uniqid(rand(), true));

            $cart = Cart::create(['hash' => $cart_hash]);
            $cart->save();

            Cookie::queue('cs_cart_hash', $cart_hash, 360);
            $cart = Cart::where(['hash' => $cart_hash])->first();

        }

        // Add product to cart
        $cartProduct = CartProduct::create(['cart_id' => $cart->id, 'product_id' => $product->id, 'quantity' => 1]);
        $cartProduct->save();

        return $this->respond(view('components/cart', ["cart" => $cart])->render());
    }

    public function remove(Request $request, $cart_product_id)
    {
        $cart_product = CartProduct::find($cart_product_id);
        $cart_product->delete();

        $cart = Cart::where(['hash' => Cookie::get('cs_cart_hash')])->first();

        return $this->respond(view('components/cart', ["cart" => $cart])->render());
    }

    /*
    |--------------------------------------------------------------------------
    | VIEW
    |--------------------------------------------------------------------------
    */

    public function cart(Request $request)
    {
        $cart = Cart::where(['hash' => Cookie::get('cs_cart_hash')])->first();

        return view('cart', ["cart" => $cart]);
    }

    public function checkout(Request $request)
    {
        $cart = Cart::where(['hash' => Cookie::get('cs_cart_hash')])->first();

        return view('checkout', ["cart" => $cart]);
    }

}