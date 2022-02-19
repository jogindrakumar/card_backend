<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    //
     public function SocialMediaView(){
        $socialmedias = SocialMedia::latest()->get();
        return view('backend.socialmedia.socialmedia_view',compact('socialmedias'));
    }
    public function SocialMediaAdd(){
        $socialmedias = SocialMedia::latest()->get();
        return view('backend.socialmedia.add_socialmedia',compact('socialmedias'));
    }

    public function SocialMediaStore(Request $request){
        $request->validate([
            
        'icon'              => 'required',
        'name'              => 'required',
        
        
        ]);
        SocialMedia::insert([
        'icon'                 => $request->icon,
        'name'                 => $request->name,
        'link'                 => $request->link,
        ]);
         $notification = array(
            'message' => 'Social Media Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.socialmedia')->with($notification);
    }

    public function SocialMediaEdit($id){

        
        $socialmedias = SocialMedia::findOrFail($id);
        return view('backend.socialmedia.socialmedia_edit',compact('socialmedias'));

    }

    public function SocialMediaUpdate(Request $request,$id){

        SocialMedia::FindOrFail($id)->update([

        'icon'                 => $request->icon,
        'name'                 => $request->name,
        'link'                 => $request->link,
       
        ]);
         $notification = array(
            'message' => 'Social Media Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.socialmedia')->with($notification);

    }

    public function SocialMediaDelete($id){
       SocialMedia::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Social Media Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
