<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('back.users');
    }
    public function newUser(){
        return view('back.newUser');
    }
}
