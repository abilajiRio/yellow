<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about', ['name' => 'Abilaji']);
    }
}
