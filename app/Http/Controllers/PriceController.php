<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $manicures = Service::all()->where('type_service_id', 1);
        $pedicures = Service::all()->where('type_service_id', 2);

        return view('pages.price', [
            'manicures' => $manicures,
            'pedicures' => $pedicures
        ]);
    }
}
