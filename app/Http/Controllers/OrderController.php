<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Master;
use App\Models\Type_service;
use Database\Seeders\TypeServicesSeeder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $masters = Master::all();
        return view('pages.order', [
            'masters' => $masters
        ]);
    }

    public function store(Request $request){
        $master_id = $request->master_id;
        $type_services = Type_service::all();
        $graphs = Graph::all()->where('master_id', $master_id)->where('status', 'Свободно');
        return view('pages.orderNext', [
            'type_services' => $type_services,
            'graphs' => $graphs,
            'master_id' => $master_id
        ]);
    }
    
}
