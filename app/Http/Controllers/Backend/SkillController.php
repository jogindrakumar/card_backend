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
            
        'skill_name'            => 'required',
        'skill_per'           => 'required',
        
        ]);


        Skill::insert([

        'skill_name'    => $request->skill_name,
        'skill_per'     => $request->skill_per,
       
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

        
        Skill::findOrFail($id)->update([

        'skill_name'    => $request->skill_name,
        'skill_per'     => $request->skill_per,
       
        ]);
         $notification = array(
            'message' => 'Skill Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.skill')->with($notification);

    }

    public function SkillDelete($id){
       
       Skill::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Skill Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
