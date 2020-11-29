<?php

namespace App\Http\Controllers;

use DB;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;



class categoriesController extends Controller
{
    
   public function add()
   
    {
        $cat = DB::table('categories')->get();
        return view('backend.categories.add_cat',compact('cat'));
    } 

    

    public function store(Request $request)
    {
        $data=array();
        $data['cat_name']=$request->cat_name;
        $data['cat_status']=$request->cat_status;
        DB::table('categories')->insert($data);
        
        return redirect()->back();

        // $this->validate($request,[
        //     'cat_name'=>'required',
        //     'cat_status'=>'required',
        // ]);
        // $categories = Category::create($request->all());
        // return redirect()->back();
    }


    public function destroy($id)

    {
        $category =Category::where('id',$id)->first();
        $category->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
       $category=Category::find($request->id);
        $category->cat_name=$request->cat_name;
        $category->cat_status=$request->cat_status;
        $category->save();
        return redirect()->back();
    }

// Category::find($id)->update($request->all());
//          return redirect()->back();





}
