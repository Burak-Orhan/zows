<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view("pages.auth.register");
    }

    public function registerPost(Request $request) {
        dd($request->all());
    }

    public function login(){
        return view("pages.auth.login");
    }

    public function loginPost(Request $request){
        return dd($request->all());
    }
}
