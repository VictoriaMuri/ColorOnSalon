<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Portfolio;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MasterController extends Controller
{
    public function index(){
        $masters = Master::all();
        $ratings = Rating::all();
        return view('pages.masters', [
            'masters' => $masters,
            'ratings' => $ratings
        ]);
    }

    public function showMaster($id){
        $master = Master::find($id);
        $portfolios = Portfolio::all()->where('master_id', $id);
        $ratings = Rating::all()->where('master_id', $id);
        return view('pages.master', [
            'master' => $master,
            'ratings' => $ratings,
            'portfolios' => $portfolios
        ]);
    }

    public function update($id){
        $master = Master::find($id);
        return view('admin.editMaster', [
            'master' => $master
        ]);
    }

    public function edit(Request $request, $id){

        // $fullFileName = $request->file('photo')->getClientOriginalName();
        // $extension = $request->file('photo')->getClientOriginalExtension();
        // $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        // $fileNameNew = $fileName . '_' . time() . '.' . $extension;
        // Storage::putFileAs('public\images\masters\photos', $request->file('photo'), $fileNameNew);
        
        $master_edit = Master::find($id);
        
        // $oldImage = $master_edit->photo;
        
        $master_edit->name = $request->name;
        $master_edit->surname = $request->surname;
        $master_edit->lastname = $request->lastname;
        $master_edit->age = $request->age;
        $master_edit->birthday = $request->birthday;
        $master_edit->address = $request->address;
        $master_edit->phonenumber = $request->phonenumber;
        $master_edit->experience = 0;
        $master_edit->characteristic = $request->characteristic;
        // $master_edit->photo = $request->fileNameNew;
        $master_edit->save();
        return redirect()->back()->withSuccess('Изменения обновлены!');
    }

    public function indexAdmin(){
        $masters = Master::all();
        return view('admin.masters', [
            'masters' => $masters
        ]);
    }

    public function indexAddMaster(){
        return view('admin.addMaster');
    }

    public function store(Request $request){

        if($request->file('photo')!=null){
            $fullFileName = $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            Storage::putFileAs('public\images\masters\photos', $request->file('photo'), $fileNameNew);
        }
        else{
            $fileNameNew = 'default.jpg';
        }

        $new_master = new Master();
        $new_master->name = $request->name;
        $new_master->surname = $request->surname;
        $new_master->lastname = $request->lastname;
        $new_master->lastname = $request->lastname;
        $new_master->age = $request->age;
        $new_master->birthday = $request->birthday;
        $new_master->address = $request->address;
        $new_master->email = $request->email;
        $new_master->phonenumber = $request->phonenumber;
        $new_master->experience = 0;
        $new_master->characteristic = $request->characteristic;
        $new_master->photo = $fileNameNew;
        $new_master->save();
        return redirect()->back()->withSuccess('Мастер успешно добавлен!');
    }

    public function delete($id){
        Master::find($id)->delete();

        return redirect()->back()->withSuccess('Мастер удален');
    }
}
