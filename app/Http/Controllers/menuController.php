<?php

namespace App\Http\Controllers;

use DB;
use App\Menu;
use App\SubMenu;
use App\Http\Requests;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index()
    {
        $menu = DB::table('menus')->get();
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
    	return view('backend.menu.menu',compact('menu', 'sub'));
    }

    public function store(Request $request)
    {
        $data=array();
        $data['menu_name']=$request->menu_name;
        $data['menu_link']=$request->menu_link;
        $data['menu_status']=$request->menu_status;
        DB::table('menus')->insert($data);     
        return redirect()->back();

    }


    public function destroy($id)
    {
        $menu =Menu::where('id',$id)->first();
        $menu->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        $menu=Menu::find($request->id);
        $menu->menu_name=$request->menu_name;
        $menu->menu_link=$request->menu_link;
        $menu->menu_status=$request->menu_status;
        $menu->save();
        return redirect()->back();
    }
}
