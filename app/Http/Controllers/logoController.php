<?php

namespace App\Http\Controllers;

use DB;
use App\Logo;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class logoController extends Controller
{
  
    public function index()
    {
        
    	$logo = DB::table('logos')->get();
    	return view('backend.logo.logo',compact('logo'));
    } 

    public function store(Request $request)
    {
        $request->validate([
        	'logo_status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     if ($request->hasFile('image')) {
            // uploading image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageLogo/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
            // data sent to database
        $data=array();
        $data['image']=$imgUrl;
        $data['logo_status']=$request->logo_status;
        DB::table('logos')->insert($data);
        return redirect()->back();
        }
        $data=array();
        $data['logo_status']=$request->logo_status;
        DB::table('logos')->insert($data);
        return redirect()->back(); 
        
    }


    public function destroy($id)
    {
        $logo =Logo::where('id',$id)->first();
        $logo->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        $logo=Logo::find($request->id);
        $logo->logo_status=$request->logo_status;
        $logo->save();
        return redirect()->back();
    }
}
