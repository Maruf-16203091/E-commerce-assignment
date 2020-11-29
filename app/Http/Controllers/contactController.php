<?php

namespace App\Http\Controllers;

use DB;
use App\Contact;
use App\Http\Requests;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()

    {
        $cont = DB::table('contacts')->get();
        return view('backend.contact.contactus',compact('cont'));
    } 

    public function store(Request $request)
    {
        $data=array();
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['location']=$request->location;
        $data['open_hour']=$request->open_hour;
        DB::table('contacts')->insert($data);     
        return redirect()->back();

    }


    public function destroy($id)
    {
        $contact =Contact::where('id',$id)->first();
        $contact->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        $contact=Contact::find($request->id);
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->location=$request->location;
        $contact->open_hour=$request->open_hour;
        $contact->save();
        return redirect()->back();
    }
}
