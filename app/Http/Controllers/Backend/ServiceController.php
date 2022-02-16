<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
     public function ServiceView(){
        $services = Service::latest()->get();
        return view('backend.service.service_view',compact('services'));
    }
    public function ServiceAdd(){
        $services = Service::latest()->get();
        return view('backend.service.add_service',compact('services'));
    }

    public function ServiceStore(Request $request){
        $request->validate([
            
        'service_name'              => 'required',
        'service_desp'              => 'required',
        'service_icon'              => 'required',
        
        ]);
        Service::insert([
        'service_name'              => $request->service_name,
        'service_desp'              => $request->service_desp,
        'service_icon'              => $request->service_icon,
        ]);
         $notification = array(
            'message' => 'Service Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.service')->with($notification);
    }

    public function ServiceEdit($id){

        
        $services = Service::findOrFail($id);
        return view('backend.service.service_edit',compact('services'));

    }

    public function ServiceUpdate(Request $request,$id){

        Service::FindOrFail($id)->update([

        'service_name'              => $request->service_name,
        'service_desp'              => $request->service_desp,
        'service_icon'              => $request->service_icon,
       
        ]);
         $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.service')->with($notification);

    }

    public function ServiceDelete($id){
       Service::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Service Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
