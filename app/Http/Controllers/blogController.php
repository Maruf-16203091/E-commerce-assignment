<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class blogController extends Controller
{
   public function add()
    {
    	 $blog = DB::table('blogs')->get();
    	 return view('backend.blogs.blogs',compact('blog'));
    } 

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     if ($request->hasFile('image')) {
            // uploading image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageBlog/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
            // data sent to database
        $data=array();
        $data['title']=$request->title;
        $data['body']=$request->body;
        $data['date']=$request->date;
        $data['image']=$request->imgUrl;
        DB::table('blogs')->insert($data);
        return redirect()->back();
        }
        $data=array();
        $data['title']=$request->title;
        $data['body']=$request->body;
        $data['date']=$request->date;
        DB::table('blogs')->insert($data);
        return redirect()->back(); 
        
    } 

    public function destroy($id)
    {
        $blog =Blog::where('id',$id)->first();
        $blog->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
       $blog=Blog::find($request->id);
        $blog->title=$request->title;
        $blog->body=$request->body;
        $blog->date=$request->date;
        $blog->image=$request->imgUrl;
        $blog->save();
        return redirect()->back();
    }
}
