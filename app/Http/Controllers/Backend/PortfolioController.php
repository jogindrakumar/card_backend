<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;

class PortfolioController extends Controller
{
    //
        
    public function PortfolioView(){
        $portfolios = Portfolio::latest()->get();
        return view('backend.portfolio.portfolio_view',compact('portfolios'));
    }
    public function PortfolioAdd(){
        $portfolios = Portfolio::latest()->get();
        return view('backend.portfolio.add_portfolio',compact('portfolios'));
    }

    public function PortfolioStore(Request $request){
        $request->validate([
            
        'project_name'              => 'required',
        'project_tech'              => 'required',
        'project_img'               => 'required',
        ]);

        $image = $request->file('project_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(800,801)->save('upload/portfolio/'.$name_gen);
        $save_url = 'upload/portfolio/'.$name_gen;

        $model_image = $request->file('model_img');
        $name_gen = hexdec(uniqid()).'.'.$model_image->getClientOriginalExtension();
        Image::make($model_image)->resize(1050,700)->save('upload/portfolio/model/'.$name_gen);
        $save_model_url = 'upload/portfolio/model/'.$name_gen;

        Portfolio::insert([

        'project_name'              => $request->project_name,
        'project_tech'              => $request->project_tech,
        'project_img'              =>  $save_url,
        'model_img'              =>  $save_model_url,
        'project_link'              => $request->project_link,   
        ]);
         $notification = array(
            'message' => 'Portfolio Inserted Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.portfolio')->with($notification);
    }

    public function PortfolioEdit($id){

        
        $portfolios = Portfolio::findOrFail($id);
        return view('backend.portfolio.portfolio_edit',compact('portfolios'));

    }

    public function PortfolioUpdate(Request $request,$id){

         $old_image = $request->old_image;
         $old_model_image = $request->old_model_image;


         if($request->file('project_img') && $request->file('model_img') ){

            unlink($old_image); 
                $image = $request->file('project_img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(800,801)->save('upload/portfolio/'.$name_gen);
                $save_url = 'upload/portfolio/'.$name_gen;

                unlink($old_model_image);
                $model_image = $request->file('model_img');
                $name_gen = hexdec(uniqid()).'.'.$model_image->getClientOriginalExtension();
                Image::make($model_image)->resize(1050,700)->save('upload/portfolio/model/'.$name_gen);
                $save_model_url = 'upload/portfolio/model/'.$name_gen;

        Portfolio::FindOrFail($id)->update([

        'project_img'              =>   $save_url,
        'model_img'              =>  $save_model_url, 
       
        ]);
         $notification = array(
            'message' => 'portfolio Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.portfolio')->with($notification);
         }else{

            
        Portfolio::FindOrFail($id)->update([

        'project_name'              => $request->project_name,
        'project_tech'              => $request->project_tech,
        'project_link'              => $request->project_link,   
       
        ]);
         $notification = array(
            'message' => 'portfolio Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('all.portfolio')->with($notification);

         }



    }

    public function PortfolioDelete($id){
        $old_project_img = Portfolio::findOrFail($id);
    	$img = $old_project_img->project_img;
    	unlink($img);
        $old_model_img = Portfolio::findOrFail($id);
    	$model_img = $old_model_img->model_img;
    	unlink($model_img);
       Portfolio::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Portfolio Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
