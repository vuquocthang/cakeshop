<?php

namespace App\Http\Controllers\Site\User\Auth;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends \App\Http\Controllers\Site\BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->middleware('guest.user');

    }

    public function showRegisterForm(Request $request){
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

}