<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', ['title'=>'Sanum - Home']);
    }

    public function about()
    {
        return view('about', ['title'=>'Sanum - About']);
    }

    public function services()
    {
        return view('service', ['title'=>'Sanum - Service']);
    }

    public function contact()
    {
        return view('contact', ['title'=>'Sanum - Contact']);
    }

}
