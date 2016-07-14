<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        User::create([
        'email'=>$request->email,
        'username'=>$request->username,
        'password'=>bcrypt($request->password),
      ]);

    return redirect('/')->with('info','Account Created');
    }

  public function getsignin(){
    return view('auth.signin');
  }

  public function postsignin(Request $request){

    $this->validate($request,[
      'email'=>'required|email',
      'password'=>'required|min:6',
    ]);

  }




}
