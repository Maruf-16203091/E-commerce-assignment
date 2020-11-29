<?php

namespace App\Http\Controllers;

use DB;
use App\Menu;
use App\SubMenu;
use App\Logo;
use App\Slider;
use App\Http\Requests;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
      	return view('frontend.frontmain.index',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function about()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        return view('frontend.pages.about',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function contact()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.contact',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function product()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.product.single-product',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function collection()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.collection',compact('menu', 'sub', 'logo', 'slider'));
    }
}

