<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Master;
use App\Models\Rating;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderNextController extends Controller
{

    public function index(){
        $masters = Master::all();
        $ratings = Rating::all();

        return view('home', [
            'masters' => $masters,
            'ratings' => $ratings
        ]);
    }


    public function store(Request $request){
        $type_service_id = $request->type_service_id;
        $graph_id = $request->graph_id;
        $master_id = $request->master_id;
        $services = Service::all()->where('type_service_id', $type_service_id);

        $graph = Graph::find($request->graph_id);
        $graph->status = 'Занято';
        $graph->save();

        return view('pages.orderNextNext', [
            'services' => $services,
            'master_id' => $master_id,
            'graph_id' => $graph_id,
            'type_service_id' => $type_service_id
        ]);
    }
}
