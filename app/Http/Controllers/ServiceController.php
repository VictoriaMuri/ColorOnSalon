<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Type_service;
use Database\Seeders\TypeServicesSeeder;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function indexAdmin(){
        $services = Service::all();
        return view('admin.services', [
            'services' => $services
        ]);
    }

    public function delete($id){
        Service::find($id)->delete();

        return redirect()->back()->withSuccess('Услуга удалена');
    }

    public function indexAddService(){
        $type_services = Type_service::all();
        return view('admin.addService', [
            'type_services' => $type_services
        ]);
    }

    public function update($id){
        $service = Service::find($id);
        $type_services = Type_service::all();
        return view('admin.editService', [
            'service' => $service,
            'type_services' => $type_services
        ]);
    }

    public function edit(Request $request, $id){
        $service = Service::find($id);
        
        $service->name = $request->name;
        $service->price = $request->price;
        $service->type_service_id = $request->type_service_id;
        $service->save();
        return redirect()->back()->withSuccess('Услуга успешно изменена!');
    }

    public function store(Request $request){
        $new_service = new Service();
        $new_service->name = $request->name;
        $new_service->price = $request->price;
        $new_service->type_service_id = $request->type_service_id;
        $new_service->save();
        return redirect()->back()->withSuccess('Услуга успешно добавлена!');
    }
}
