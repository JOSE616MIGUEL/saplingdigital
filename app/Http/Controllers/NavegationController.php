<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegationController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }
    public function indexabout()
    {
        return view('about');
    }
    public function indexservices()
    {
        return view('services');
    }
    public function indexcontact()
    {
        return view('contact');
    }
}
