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
        return view('examples/index');
    }
    public function index1()
    {
        return view('examples/index2');
    }
    public function index2()
    {
        return view('examples/index3');
    }
    public function index3()
    {
        return view('examples/index4');
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
