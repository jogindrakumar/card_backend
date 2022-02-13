<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    //
      
    public function WorkView(){
        $works = Work::latest()->get();
        return view('backend.work.work_view',compact('works'));
    }
    public function WorkAdd(){
        $works = Work::latest()->get();
        return view('backend.work.add_work',compact('works'));
    }

    public function WorkStore(Request $request){
        $request->validate([
            
        'post_name'       => 'required',
        'company_name'    => 'required',
        'desp'            => 'required',
        
        ]);
        Work::insert([

        'post_name'      => $request->post_name,
        'company_name'   => $request->company_name,
        'desp'           => $request->desp,
       
        ]);
         $notification = array(
            'message' => 'work Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.work')->with($notification);
    }

    public function WorkEdit($id){

        
        $works = Work::findOrFail($id);
        return view('backend.work.work_edit',compact('works'));

    }

    public function WorkUpdate(Request $request,$id){

        Work::FindOrFail($id)->update([

        'post_name'      => $request->post_name,
        'company_name'   => $request->company_name,
        'desp'           => $request->desp,
       
        ]);
         $notification = array(
            'message' => 'work Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.work')->with($notification);

    }

    public function WorkDelete($id){
       Work::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Work Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
