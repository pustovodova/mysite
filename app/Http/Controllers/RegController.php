<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function regAction()
    {
        return view('reg');
    }

	public function reg(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if (!is_null($user)){
            return redirect('/');
        }

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);

        return redirect('/');
    }

}




