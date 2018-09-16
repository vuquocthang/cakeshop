<?php

namespace App\Http\Controllers\Site\User\Auth;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends \App\Http\Controllers\Site\BaseController
{

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->middleware('guest.user' , ['except' => 'logout']);
    }

    public function showLoginForm(){
        return view('site.loginForm');
    }

    public function login(Request $request){

        $email = $request->userEmail;
        $password = $request->userPassword;

        $user = DB::table('user')->where('userEmail', $email )->first();


        if ($user == null){
            return redirect('loginForm');
        }else{
            if ($user->userPassword != $password){
                return redirect('loginForm');
            }
        }

        $request->session()->put('userId', $user->id);

        return redirect('profile');
    }

    public function logout(Request $request){
        $request->session()->put('userId', null);

        return redirect('loginForm');
    }
}