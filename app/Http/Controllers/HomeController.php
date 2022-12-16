<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function teams()
    {
        return view('teams');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function storeForm()
    {
        return view('storeForm');
    }
}
