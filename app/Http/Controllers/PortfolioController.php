<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function showPortfolio($id){
        $portfolios = Portfolio::all()->where('master_id', $id);
        return view('admin.portfolio', [
            'portfolios' => $portfolios,
            'id' => $id
        ]);
    }

    public function addPortfolio($id){
        return view('admin.addPortfolio', [
            'id' => $id
        ]);
    }

    public function store(Request $request){

        if($request->file('image')!=null){
            $fullFileName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            Storage::putFileAs('public\images\masters\portfolios', $request->file('image'), $fileNameNew);
        }

        $new_portfolio = new Portfolio();
        $new_portfolio->image = $fileNameNew;
        $new_portfolio->description = $request->description;
        $new_portfolio->date = $request->date;
        $new_portfolio->master_id = $request->master_id;

        $new_portfolio->save();
        return redirect()->back()->withSuccess('Фото добавлено!');
    }

    public function delete($id){
        Portfolio::find($id)->delete();

        return redirect()->back()->withSuccess('Фото удалено');
    }
}
