<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

       
    public function MessageView(){
        $messages = Contact::latest()->get();
        return view('backend.message.message_view',compact('messages'));
    }
    // public function MessageAdd(){
    //     $messages = Contact::latest()->get();
    //     return view('backend.message.add_message',compact('messages'));
    // }

    public function MessageStore(Request $request){
        $request->validate([
            
        'name'                  => 'required',
        'email'                 => 'required',
        'subject'               => 'required',
        'msg'                   => 'required',
        
        ]);
        Contact::insert([
        'name'                  => $request->name,
        'email'                 => $request->email,
        'subject'               => $request->subject,
        'msg'                   => $request->msg,
        ]);
         $notification = array(
            'message' => 'Your message was sent, thank you!',
            'alert-type' => 'success'
                );
        return redirect()->back()->with($notification);
    }

    public function MessageEdit($id){

        
        $messages = Contact::findOrFail($id);
        return view('backend.message.message_edit',compact('messages'));

    }

    public function MessageUpdate(Request $request,$id){

        Contact::FindOrFail($id)->update([

        'name'                  => $request->name,
        'email'                 => $request->email,
        'subject'               => $request->subject,
        'msg'                   => $request->msg,
       
        ]);
         $notification = array(
            'message' => 'Message Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.message')->with($notification);

    }

    public function MessageDelete($id){
       Contact::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Message Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
