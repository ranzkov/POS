<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showfoodbeverage()
    {
        return view('food_beverage');
    }

    public function showBeautyHealth()
    {
        return view('beauty_health');
    }

    public function showHomeCare()
    {
        return view('home_care');
    }

    public function showBabyKid()
    {
        return view('baby_kid');
    }
}
