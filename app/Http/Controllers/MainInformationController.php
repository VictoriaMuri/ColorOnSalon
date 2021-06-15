<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainInformationController extends Controller
{
    public function index() {

        return view('pages.mainInfo');
    }
}
