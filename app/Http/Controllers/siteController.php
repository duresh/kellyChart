<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function about1()
    {
        return view('about');
    }
    
    public function resume1()
    {
        return view('resume');
    }
    public function services1()
    {
        return view('services');
    }
    public function portfolio1()
    {
        return view('portfolio');
    }
    public function contact1()
    {
        return view('contact');
    }
}
