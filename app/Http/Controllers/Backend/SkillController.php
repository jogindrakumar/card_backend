<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    //
      
    public function SkillView(){
        $skills = Skill::latest()->get();
        return view('backend.skill.skill_view',compact('skills'));
    }
    public function SkillAdd(){
        $skills = Skill::latest()->get();
        return view('backend.skill.add_skill',compact('skills'));
    }

    public function SkillStore(Request $request){
        $request->validate([
            
        'name'            => 'required',
        'email'           => 'required',
        
        ]);


        Skill::insert([

        'name'              => $request->name,
        'email'             => $request->email,
       
        ]);
         $notification = array(
            'message' => 'Skill Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.skill')->with($notification);
    }

    public function SkillEdit($id){

        // $Skills = Skill::find($id);
        $skills = Skill::findOrFail($id);
        return view('backend.skill.skill_edit',compact('skills'));

    }

    public function SkillUpdate(Request $request,$id){

        
        $old_image = $request->old_img;

        if($request->file('img')){

            unlink($old_image);
                $image = $request->file('img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('upload/skill/'.$name_gen);
                $save_url = 'upload/skill/'.$name_gen;

                Skill::FindOrFail($id)->update([
                    'img'               => $save_url,
                ]);
                $notification = array(
                    'message' => 'skill Updated Successfully',
                    'alert-type' => 'success'
                        );
                return redirect()->route('all.skill')->with($notification);


        }else{
                Skill::FindOrFail($id)->update([
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
                        'message' => 'Skill Updated Successfully',
                        'alert-type' => 'success'
                            );
                    return redirect()->route('all.skill')->with($notification);

        }

    }

    public function SkillDelete($id){
        $skill = Skill::FindOrFail($id);
        $img = $skill->skill_image;
        unlink($img);

       Skill::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Skill Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
