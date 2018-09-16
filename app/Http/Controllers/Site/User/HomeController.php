<?php

namespace App\Http\Controllers\Site\User;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends \App\Http\Controllers\Site\BaseController
{

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->middleware('auth.user' , ['except' => 'logout']);
    }

    public function profile(Request $request){
        $userId = $request->session()->get('userId', null);

        $user = User::findOrFail($userId);


        return view('site.profile', ['user' => $user]);
    }

}