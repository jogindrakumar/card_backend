<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use Image;

class BackgroundController extends Controller
{
    //
     public function BackgroundView(){
        $backgrounds = Background::latest()->get();
        return view('backend.background.background_view',compact('backgrounds'));
    }
    public function BackgroundAdd(){
        $backgrounds = Background::latest()->get();
        return view('backend.background.add_background',compact('backgrounds'));
    }

    public function BackgroundStore(Request $request){
        $request->validate([  
        'background_img'     => 'required',
        ]);
        $image = $request->file('background_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(3000,1999)->save('upload/background/'.$name_gen);
        $save_url = 'upload/background/'.$name_gen;
        Background::insert([
        'background_img'       => $save_url,
        ]);
         $notification = array(
            'message' => 'Background Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.background')->with($notification);
    }

    public function BackgroundEdit($id){

        
        $backgrounds = Background::findOrFail($id);
        return view('backend.background.background_edit',compact('backgrounds'));

    }

    public function BackgroundUpdate(Request $request,$id){

        $old_image = $request->old_image;
         unlink($old_image);
                $image = $request->file('background_img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(3000,1999)->save('upload/background/'.$name_gen);
                $save_url = 'upload/background/'.$name_gen;
        Background::FindOrFail($id)->update([

        'background_img'       => $save_url,
       
        ]);
         $notification = array(
            'message' => 'Background Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.background')->with($notification);

    }

    public function BackgroundDelete($id){
        $old_img = Background::findOrFail($id);
    	$img = $old_img->background_img;
    	unlink($img);
       Background::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Background Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }



       public function BackgroundInactive($id){
     	Background::findOrFail($id)->update(['status' => 0]);
     	$notification = array(
			'message' => 'Background Inactive',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
     }


  public function BackgroundActive($id){
  	Background::findOrFail($id)->update(['status' => 1]);
     	$notification = array(
			'message' => 'Background Active',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

     }
}
