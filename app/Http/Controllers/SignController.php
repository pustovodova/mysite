<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
   public function signAction()
    {
		return view('sign');

    }

    public function sign(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }else{
            return 'Неверное имя или пароль';
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');

    }

}
