<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Register(Request $regist) {
        Users::create([
            'email' => $regist->email,

        ]);
    }
}
