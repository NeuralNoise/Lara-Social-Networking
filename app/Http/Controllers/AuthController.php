<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function getsignup(){
      return view('auth.signup');
    }

    public function postsignup(Request $request){
      $this->validate($request,[
        'email'=>'required|email|unique:users|max:255',
        'username'=>'required|alpha_dash|unique:users|max:20',
        'password'=>'required|min:6',
      ]);

      dd('all ok');
    }
}
