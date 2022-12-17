<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{
    public function HomePage()
    {
        return view('homepage');
    }

    public function AddCarPage()
    {
        return view('addcar');
    }

    public function MyCar()
    {
        return view('mycar');
    }

    public function ProfilePage()
    {
        return view('profile');
    }
}
