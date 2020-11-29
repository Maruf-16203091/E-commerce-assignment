<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class productController extends Controller
{
    public function add()
    {
    	$cat = DB::table('categories')->get();
    	return view('backend.products.add_product',compact('cat'));
    } 

    public function manage()
    {
        $cat = DB::table('categories')->get();
    	$product = DB::table('products')->get();
    	return view('backend.products.manage_product',compact('product', 'cat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'color' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     if ($request->hasFile('image')) {
            // uploading image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageProduct/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
            // data sent to database
        $product = new product();
        $product->name = $request->name;
        $product->under_cat = $request->under_cat;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->brand = $request->brand;
        $product->product_status = $request->product_status;
        $product->image = $request->imgUrl;
        $product->save();
        return redirect()->route('product.manage')
                        ->with('success','Product added Successfully.');
        }
        $product = new Product();
        $product->name = $request->name;
        $product->under_cat = $request->under_cat;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->brand = $request->brand;
        $product->product_status = $request->product_status;
        $blog->save();
        return redirect()->route('product.manage')
                        ->with('success','Product added Successfully.');
        
    } 

    public function destroy($id)
    {
        $product =Product::where('id',$id)->first();
        $product->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
       $product=Product::find($request->id);
        $product->name=$request->name;
        $product->under_cat=$request->under_cat;
        $product->price=$request->price;
        $product->details=$request->details;
        $product->size=$request->size;
        $product->color=$request->color;
        $product->brand=$request->brand;
        $product->product_status=$request->product_status;
        return redirect()->back();
    } 
}
