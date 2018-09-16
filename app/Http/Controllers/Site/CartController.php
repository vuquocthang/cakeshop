<?php


namespace App\Http\Controllers\Site;


use Illuminate\Http\Request;

class CartController extends BaseController
{
    public function index(Request $request){
        $cart = $request->session()->get('cart', null);

        return view('site.cart', ['cart' => $cart]);
    }

    public function del(Request $request){
        $id = $request->id;

        $cart = $request->session()->get('cart', null);

        if ($cart == null){
            return redirect('cart');
        }

        foreach ($cart as $k => $v){
            if ($k == $id){
                unset($cart[$k]);

            }
        }

        $request->session()->put('cart', $cart);

        return redirect('cart');
    }


    public function  update(Request $request){
        $cart = $request->session()->get('cart', null);

        if ($cart == null){
            return redirect('cart');
        }

        $quantity = $request->quantity;

        $id = $request->id;

        foreach ($id as $k => $v){
            if (is_numeric($quantity[$k])){
                $cart[$v] = $quantity[$k];
            }
        }

        $request->session()->put('cart', $cart);

        return redirect('cart');

    }

}