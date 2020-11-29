<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    
    public function index()
    {
    	
    	return view('backend.backmain.back_main');
    } 

    public function maruf()
    {
    	
    	return 'backend';
    } 
}
