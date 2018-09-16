<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function index(Request $request){

        $id = $request->id;

        $product = Product::findOrFail($id);

        return view('site.product', ['product'=> $product]);
    }

    function addToCart(Request $request){
        $cart = $request->session()->get('cart', null);

        $id = $request->id;

        $quantity = $request->quantity;

        if ($request->quantity == null){
            $quantity = 1;
        }

        if ($cart == null){
            $cart[$id] = $quantity;
            $request->session()->put('cart', $cart);
            return redirect('cart');
        }

        foreach ($cart as $key => $value){
                if ($id == $key){
                    $cart[$key] = $value + $quantity;

                    $request->session()->put('cart', $cart);
                    return redirect('cart');
                }

        }

        $cart[$id] = $quantity;

        $request->session()->put('cart', $cart);
        return redirect('cart');

    }

}