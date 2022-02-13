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
            
        'work_name'            => 'required',
        'work_per'           => 'required',
        
        ]);


        Work::insert([

        'work_name'    => $request->work_name,
        'work_per'     => $request->work_per,
       
        ]);
         $notification = array(
            'message' => 'work Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.work')->with($notification);
    }

    public function WorkEdit($id){

        // $Works = Work::find($id);
        $works = Work::findOrFail($id);
        return view('backend.work.work_edit',compact('works'));

    }

    public function WorkUpdate(Request $request,$id){

        
        $old_image = $request->old_img;

        if($request->file('img')){

            unlink($old_image);
                $image = $request->file('img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/work/'.$name_gen);
                $save_url = 'upload/work/'.$name_gen;

                Work::FindOrFail($id)->update([
                    'img'               => $save_url,
                ]);
                $notification = array(
                    'message' => 'Work Updated Successfully',
                    'alert-type' => 'success'
                        );
                return redirect()->route('all.work')->with($notification);


        }else{
                Work::FindOrFail($id)->update([
                            'name'              => $request->name,
                            'email'             => $request->email,
                            'address'           => $request->address,
                            'position_first'    => $request->position_first,
                            'position_second'   => $request->position_second,
                            'mobile'            => $request->mobile,
                            'desp'              => $request->desp,
                            'job'               => $request->job,
                            'cv'                => $request->cv,
                        
                    ]);
                    $notification = array(
                        'message' => 'Work Updated Successfully',
                        'alert-type' => 'success'
                            );
                    return redirect()->route('all.work')->with($notification);

        }

    }

    public function WorkDelete($id){
        $work = Work::FindOrFail($id);
        $img = $work->work_image;
        unlink($img);

       Work::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Work Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
