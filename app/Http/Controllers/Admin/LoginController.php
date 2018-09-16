<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';

    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => 'logout']);
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm(){
        return view('admin.loginForm');
    }



    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function redirectTo(){
        return $this->redirectTo;
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/admin/loginForm');
    }
}