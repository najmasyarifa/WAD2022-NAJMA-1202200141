<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function FirstPage()
    {
        return view('firstpage');
    }

    public function LoginPage()
    {
        return view('login');
    }

    public function RegisterPage()
    {
        return view('register');
    }
}
