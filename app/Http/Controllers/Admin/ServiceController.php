<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function ServiceInfo(){
        $result = Services::get();
        return $result;
    }

    public function Services(){
      $data = Services::all();
      return view('services.ourservices.services', compact('data'));
    }

    public function CreateServices(Request $request){
        $validate = $request->validate([
            'icon' => 'required',
            'service_name' => 'required',
            'service_description' => 'required',
        ]);

        Services::insert([
            'icon' => $request->icon,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
        ]);

        return redirect()->back();
    }

    public function EditServices($id){
        $editdata = Services::findOrFail($id);
        return view('services.ourservices.edit_services', compact('editdata'));
    }

    public function UpdateServices(Request $request, $id){
        Services::findOrFail($id)->update([
            'icon' => $request->icon,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
        ]);

        return redirect()->route('services');
    }

    public function DeleteServices($id){
        Services::findOrFail($id)->delete();
        return redirect()->back();
    }

   
}
