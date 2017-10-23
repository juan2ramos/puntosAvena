<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }

    public function point()
    {
        return view('back.reportPoint',['products' => Product::all()]);
    }

    public function administrator()
    {
        return 'administrator';
    }

    public function admin()
    {
        return route(auth()->user()->roles->first()->name == 'Point' ? 'homePoint' : 'homeAdmin');
    }
}
