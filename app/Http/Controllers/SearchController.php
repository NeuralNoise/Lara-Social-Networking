<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use  App\Models\User;

class SearchController extends Controller
{
     public function getResults(Request $request){

       $searchterm=$request->searchquery;

       if(!$searchterm){
         return redirect('/');
       }

       $users=User::where(DB::raw("CONCAT(first_name, '', last_name)"),'LIKE',"%{$searchterm}%")
       ->orWhere('username','LIKE',"%{$searchterm}%")
       ->get();

       return view('search.results')->with('users',$users);
       
     }
}
