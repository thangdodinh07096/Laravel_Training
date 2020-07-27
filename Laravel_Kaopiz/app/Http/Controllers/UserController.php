<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        $user = User::whereEmail($request['email'])->get();
        if (isset($request['password']) && $request['password'] === $user[0]['password']){
            return redirect()->route('blog.index');
        } else return view('login');

    }

}
