<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function home() {
        return view('Home');
    }

    public function food() {
        return view('FoodBeverage', ['food' => 'Food & Beverages']);     
    }

    public function beauty() {
        return view('BeautyHealth', ['beauty' => 'Beauty & Health']);     
    }
    
    public function baby() {
        return view('BabyKids', ['baby' => 'Baby & Kid']);     
    }
    
    public function homecare() {
        return view('HomeCare', ['home' => 'Home & Care']);     
    }

    public function profile($id, $name){
        return view('Profile', ['id' => $id, 'name' => $name]);
    }

    public function transaksi($transaksi = null) {
        return view('Transaksi', ['transaksi' => $transaksi]);
    }    
}
