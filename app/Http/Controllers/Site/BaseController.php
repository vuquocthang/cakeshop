<?php

namespace App\Http\Controllers\Site;


use App\Catalog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class BaseController extends Controller
{

    public function __construct(Request $request)
    {
        $AllCatalog = Catalog::all()->where('catalogStatus', 1);
        $AllProduct = DB::table('product')->where('productStatus', 1)->get();

        //$cart = $this->getCart(Request::capture());

        //$cart = Request::create()->session()->get('cart', null);

        $cart = Session::get('cart');

        View::share('AllCatalog', $AllCatalog);
        View::share('AllProduct', $AllProduct);
        View::share('cart', $cart);
    }



}