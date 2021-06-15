<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Rating;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $masters = Master::all();
        $ratings = Rating::all();

        return view('home', [
            'masters' => $masters,
            'ratings' => $ratings
        ]);
    }
      
}
