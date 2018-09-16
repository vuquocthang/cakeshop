<?php

namespace App\Http\Controllers\Site;

use App\Catalog;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends BaseController
{


    public function index(){

        return view('site.home');
    }

}