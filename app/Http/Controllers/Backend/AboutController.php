<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\About;

class AboutController extends Controller
{
    //
    
    public function AboutView(){
        $abouts = About::latest()->get();
        return view('backend.about.about_view',compact('abouts'));
    }
    public function AboutAdd(){
        $abouts = About::latest()->get();
        return view('backend.about.add_about',compact('abouts'));
    }

    public function AboutStore(Request $request){
        $request->validate([
            
        'name'            => 'required',
        'email'           => 'required',
        'address'         => 'required',
        'position_first'  => 'required',
        'position_second' => 'required',
        'mobile'          => 'required',
        'desp'            => 'required',
        'job'             => 'required',
        'cv'              => 'required',
        'img'             => 'required',
        ]);

        $image = $request->file('img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(360,360)->save('upload/about/'.$name_gen);
        $save_url = 'upload/about/'.$name_gen;

        About::insert([

        'name'              => $request->name,
        'email'             => $request->email,
        'address'           => $request->address,
        'position_first'    => $request->position_first,
        'position_second'   => $request->position_second,
        'mobile'            => $request->mobile,
        'desp'              => $request->desp,
        'job'               => $request->job,
        'cv'                => $request->cv,
        'img'               => $save_url,
        ]);
         $notification = array(
            'message' => 'about Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.about')->with($notification);
    }

    public function AboutEdit($id){

        // $Abouts = About::find($id);
        $abouts = About::findOrFail($id);
        return view('backend.about.about_edit',compact('abouts'));

    }

    public function AboutUpdate(Request $request,$id){

        
        $old_image = $request->old_img;

        if($request->file('img')){

            unlink($old_image);
                $image = $request->file('img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;

                About::FindOrFail($id)->update([
                    'img'               => $save_url,
                ]);
                $notification = array(
                    'message' => 'about Updated Successfully',
                    'alert-type' => 'success'
                        );
                return redirect()->route('all.about')->with($notification);


        }else{
                About::FindOrFail($id)->update([
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
                        'message' => 'About Updated Successfully',
                        'alert-type' => 'success'
                            );
                    return redirect()->route('all.about')->with($notification);

        }

    }

    public function AboutDelete($id){
        $about = About::FindOrFail($id);
        $img = $about->about_image;
        unlink($img);

       About::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'About Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
