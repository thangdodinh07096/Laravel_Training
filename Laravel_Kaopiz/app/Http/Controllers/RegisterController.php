<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
//        var_dump($user);
        $user->save();
        return redirect('/login');
    }

}
