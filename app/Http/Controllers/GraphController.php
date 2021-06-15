<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Master;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function indexAdmin($id){
        $master = Master::find($id);
        $graphs = Graph::all()->where('master_id', $id);
        return view('admin.graphs', [
            'graphs' => $graphs,
            'master' => $master
        ]);
    }

    public function delete($id){
        Graph::find($id)->delete();

        return redirect()->back()->withSuccess('Мастер удален');
    }

    public function indexAddGraph($id){
        $master = Master::find($id);
        $masters = Master::all();
        return view('admin.addGraph', [
            'masters' => $masters,
            'master' => $master
        ]);
    }

    public function store(Request $request){
        $new_graph = new Graph();
        $new_graph->date = $request->date;
        $new_graph->time = $request->time;
        $new_graph->master_id = $request->master_id;
        $new_graph->status = 'Свободно';
        $new_graph->save();
        return redirect()->back()->withSuccess('График успешно добавлен!');
    }
}
