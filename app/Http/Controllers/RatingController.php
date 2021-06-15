<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request){
        $new_rating = new Rating();
        $new_rating->user_id = $request->user_id;
        $new_rating->master_id = $request->master_id;
        $new_rating->date = date("y.m.d");
        $new_rating->comment = $request->comment;
        $new_rating->rating = $request->rating;
        $new_rating->save();

        return redirect()->back()->withSuccess('Услуга успешно добавлена!');
    }
}
