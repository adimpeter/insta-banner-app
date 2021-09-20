<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homepage');
    }


    public function about(){
        return view('about');
    }

    public function terms(){
        return view('terms');
    }

    public function privacy(){
        return view('privacy');
    }
}
