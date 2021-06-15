<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Master;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function index() {
        $orders = Order::all()->where('user_id', Auth::user()->id);
        return view('pages.entries', [
            'orders' => $orders
        ]);
    }

    public function indexMaster() {
        $master = Master::all()->where('email', Auth::user()->email);
        foreach($master as $mas){
            $orders = Order::all()->where('master_id', $mas->id);
            return view('pages.entries', [
                'orders' => $orders
            ]);
        }
    }

    public function edit($id){
        $orders = Order::all()->where('user_id', Auth::user()->id);
        $order = Order::find($id);
        $order->status_id = 2;
        $order->save();

        $graph = Graph::find($order->graph_id);
        $graph->status = 'Свободно';
        $graph->save();

        return view('pages.entries', [
            'orders' => $orders
        ]);
    }

    public function editMaster($id){
        $order = Order::find($id);
        $order->status_id = 3;
        $order->save();

        $master = Master::all()->where('email', Auth::user()->email);
        foreach($master as $mas){
            $orders = Order::all()->where('master_id', $mas->id);
            return view('pages.entries', [
                'orders' => $orders
            ]);
        }
    }
}
