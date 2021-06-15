<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    // public function index(){
    //     return view('pages.auth');
    // }

    public function index(){
        return view('auth.register');
    }
}
