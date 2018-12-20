<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
       public function login()
    {
        return view('admin.login.login');
    }
    public function dologin(Request $request)
    {

        $data = $request->except('_token');
//        dd($data);
     return josn_encode($data);


    }
}
