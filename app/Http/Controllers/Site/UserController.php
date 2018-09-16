<?php

namespace App\Http\Controllers\Site;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);

    }

    public function showLoginForm(){

    }

    public function login(){

    }

    public function showRegisterForm(Request $request){
        $userId = $request->session()->get('userId', null);

        if ($userId != null){
            return redirect('profile');
        }

        return view('site.register');
    }

    public function register(Request $request){

        $this->validate($request,
            [
                'userEmail' => 'unique:user',
                'userPassword' => 'min:6',

            ], [

                'userEmail.unique' => 'Email đã tồn tại !',
                'userPassword.min' => 'Mật khẩu quá ngắn !'

            ]);

        $input = $request->all();

        $input['userStatus'] = 1;

        User::create($input);

        $userId = DB::table('user')->orderBy('id', 'desc')->limit(1)->get()[0]->id;

        $request->session()->put('userId', $userId);

        return redirect('profile');
    }

    public function profile(Request $request){
        $userId = $request->session()->get('userId', null);
    }

}