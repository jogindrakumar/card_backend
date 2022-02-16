<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Target;

use Illuminate\Http\Request;

class TargetController extends Controller
{

          
    public function TargetView(){
        $targets = Target::latest()->get();
        return view('backend.target.target_view',compact('targets'));
    }
    public function TargetAdd(){
        $targets = Target::latest()->get();
        return view('backend.target.add_target',compact('targets'));
    }

    public function TargetStore(Request $request){
        $request->validate([
            
        'icon'               => 'required',
        'count'              => 'required',
        'title'              => 'required',
        
        ]);
        Target::insert([
        'icon'                 => $request->icon,
        'count'              => $request->count,
        'title'              => $request->title,
        ]);
         $notification = array(
            'message' => 'Target Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.target')->with($notification);
    }

    public function TargetEdit($id){

        
        $targets = Target::findOrFail($id);
        return view('backend.target.target_edit',compact('targets'));

    }

    public function TargetUpdate(Request $request,$id){

        Target::FindOrFail($id)->update([

        'icon'                 => $request->icon,
        'count'              => $request->count,
        'title'              => $request->title,
       
        ]);
         $notification = array(
            'message' => 'Target Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.target')->with($notification);

    }

    public function TargetDelete($id){
       Target::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Target Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
