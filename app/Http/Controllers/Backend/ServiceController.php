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
            
        'degree_name'       => 'required',
        'from'              => 'required',
        'desp'              => 'required',
        
        ]);
        Service::insert([
        'degree_name'       => $request->degree_name,
        'from'              => $request->from,
        'desp'              => $request->desp,
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

        'degree_name'       => $request->degree_name,
        'from'              => $request->from,
        'desp'              => $request->desp,
       
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
