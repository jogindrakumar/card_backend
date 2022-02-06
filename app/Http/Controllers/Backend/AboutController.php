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
            'about_name_en' => 'required',
            'about_name_hin' => 'required',
            'about_image' => 'required',
        ]);

        $image = $request->file('about_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/about/'.$name_gen);
        $save_url = 'upload/about/'.$name_gen;

        About::insert([
            'about_name_en' => $request->about_name_en,
            'about_name_hin' => $request->about_name_hin,
            'about_slug_en' => strtolower(str_replace(' ','-',$request->about_name_en)),
            'about_slug_hin' => strtolower(str_replace(' ','-',$request->about_name_hin)),
            'about_image' => $save_url,
        ]);
         $notification = array(
            'message' => 'about Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->back()->with($notification);
    }

    public function AboutEdit($id){

        // $Abouts = About::find($id);
        $abouts = About::findOrFail($id);
        return view('backend.about.about_edit',compact('abouts'));

    }

    public function AboutUpdate(Request $request){

        $about_id = $request->id;
        $old_image = $request->old_image;

        if($request->file('about_image')){

            unlink($old_image);
                $image = $request->file('about_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/about/'.$name_gen);
                $save_url = 'upload/about/'.$name_gen;

                About::FindOrFail($about_id)->update([
                    'about_name_en' => $request->about_name_en,
                    'about_name_hin' => $request->about_name_hin,
                    'about_slug_en' => strtolower(str_replace(' ','-',$request->about_name_en)),
                    'about_slug_hin' => strtolower(str_replace(' ','-',$request->about_name_hin)),
                    'about_image' => $save_url,
                ]);
                $notification = array(
                    'message' => 'about Updated Successfully',
                    'alert-type' => 'success'
                        );
                return redirect()->route('all.about')->with($notification);


        }else{
                About::FindOrFail($about_id)->update([
                        'about_name_en' => $request->about_name_en,
                        'about_name_hin' => $request->about_name_hin,
                        'about_slug_en' => strtolower(str_replace(' ','-',$request->about_name_en)),
                        'about_slug_hin' => strtolower(str_replace(' ','-',$request->about_name_hin)),
                        
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
