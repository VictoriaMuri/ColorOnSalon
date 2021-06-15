<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Order;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderNextNextController extends Controller
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
        $new_order = new Order();
        $new_order->graph_id = $request->graph_id;
        $new_order->master_id = $request->master_id;
        $new_order->service_id = $request->service_id;
        $new_order->user_id = Auth::user()->id;
        $new_order->status_id = 1;
        $new_order->save();

        return redirect()->back()->withSuccess('Вы успешно записаны!');
    

        // return view('pages.success');
    }
}
