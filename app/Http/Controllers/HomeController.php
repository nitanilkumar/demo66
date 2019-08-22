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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('examples/dashboard');
    }

    public function users()
    {
        return view('examples/user');
    }
    public function tables()
    {
        return view('examples/table');
    }
    public function typography()
    {
        return view('examples/typography');
    }
    public function icons()
    {
        return view('examples/icons');
    }
    public function maps()
    {
        return view('examples/maps');
    }
    public function notifications()
    {
        return view('examples/notifications');
    }
    

}
