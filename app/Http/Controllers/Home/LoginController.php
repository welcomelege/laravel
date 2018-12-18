<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   public function index()
   {

   	return view('login/login');
   }

    public function login(Request $request)
   {
       dd($request->all()) ;
   	// $data = input::psot('username');

   //print_r($data);
       return view('login/login');
   	
   }

   public  function  lege()
   {

 
       echo '111'; die;
       return view('login/lege');
   }

}
