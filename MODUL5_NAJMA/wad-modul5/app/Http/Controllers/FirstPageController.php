<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Http\Controllers\HomePageController;

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

    public function Register(Request $regist) {
        $insert = $regist->validate([
            'email' => 'email:dns|unique:users|max:255',
            'nama' => 'max:255',
            'no_hp' => 'max:255',
            'password' => 'min:5|max:255',
            'repassword' => 'min:5|max:255|same:password'
        ]);

        $insert['password'] = Hash::make($insert['password']);

        Users::create($insert);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login.');
    }

    public function Login (Request $login) {
        $login->validate([
            'email' => 'email:dns|max:255',
            'password' => 'min:5|max:255'
        ]);

        $login->session()->regenerate();

        return redirect()->intended('/homepage')->with('success', 'Login Berhasil!');
        
    }

}
