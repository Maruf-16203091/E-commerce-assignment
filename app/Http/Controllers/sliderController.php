<?php

namespace App\Http\Controllers;

use DB;
use App\Slider;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class sliderController extends Controller
{
    public function index()
    {
        
    	$slider = DB::table('sliders')->get();
    	return view('backend.slider.slider',compact('slider'));
    } 

    public function store(Request $request)
    {
        $request->validate([
        	'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     if ($request->hasFile('image')) {
            // uploading image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageSlider/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
            // data sent to database
        $data=array();
        $data['image']=$imgUrl;
        $data['status']=$request->status;
        DB::table('sliders')->insert($data);
        return redirect()->back();
        }
        $data=array();
        $data['status']=$request->status;
        DB::table('sliders')->insert($data);
        return redirect()->back(); 
        
    }


public function destroy($id)
    {
        $slider =Slider::where('id',$id)->first();
        $slider->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        $slider=Slider::find($request->id);
        $slider->status=$request->status;
        $slider->save();
        return redirect()->back();
    }
}
