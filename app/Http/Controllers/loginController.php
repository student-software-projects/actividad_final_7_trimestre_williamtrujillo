<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function form_login(){
        return view('modules.auth.form_login');
    }

    public function auth(Request $request){

    $user = User::where('email','=',$request->input('email'))->first();

    if ($user){

        if ($user->contraseña == $request->input('contraseña')){

            session(['USER'=>$user]);

            return redirect()->route('dashboard.index');


        }else{
            return redirect()->route('login.form_login');
        }

    }else{
        return redirect()->route('login.form_login');
    }
    }
}
