<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    //
      
    public function EduView(){
        $edus = Education::latest()->get();
        return view('backend.edu.edu_view',compact('edus'));
    }
    public function EduAdd(){
        $edus = Education::latest()->get();
        return view('backend.edu.add_edu',compact('edus'));
    }

    public function EduStore(Request $request){
        $request->validate([
            
        'degree_name'       => 'required',
        'from'              => 'required',
    
        
        ]);
        Education::insert([
        'degree_name'       => $request->degree_name,
        'from'              => $request->from,
        'desp'              => $request->desp,
        ]);
         $notification = array(
            'message' => 'edu Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.edu')->with($notification);
    }

    public function EduEdit($id){

        
        $edus = Education::findOrFail($id);
        return view('backend.edu.edu_edit',compact('edus'));

    }

    public function EduUpdate(Request $request,$id){

        Education::FindOrFail($id)->update([

        'degree_name'       => $request->degree_name,
        'from'              => $request->from,
        'desp'              => $request->desp,
       
        ]);
         $notification = array(
            'message' => 'Edu Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.edu')->with($notification);

    }

    public function EduDelete($id){
       Education::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Edu Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
