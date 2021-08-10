<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

        public function login (Request $request){
           // return $request->input();
          $user = User::where(['email'=>$request->email])->first();
         if( !$user || !Hash::check($request->password,$user->password)){
             return "Dont match";
         }else{
             $request->session()->put('user',$user);
             return redirect('product');
         }
         
        }


     

}
