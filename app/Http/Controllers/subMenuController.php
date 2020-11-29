<?php

namespace App\Http\Controllers;

use DB;
use App\Menu;
use App\SubMenu;
use App\Http\Requests;
use Illuminate\Http\Request;

class subMenuController extends Controller
{
  public function index()
    {
    	$sub = DB::table('submenus')->get();
        $menu = DB::table('menus')->
        where('menu_status', 'Active')->get();
    	return view('backend.menu.sub-menu',compact('menu', 'sub'));
    }

    public function store(Request $request)
    {
        $data=array();
        $data['sub_name']=$request->sub_name;
        $data['menu_id']=$request->menu_id;
        $data['sub_link']=$request->sub_link;
        $data['sub_status']=$request->sub_status;
        DB::table('submenus')->insert($data);     
        return redirect()->back();

    }


    public function destroy($id)
    {
        $submenu =SubMenu::where('id',$id)->first();
        $submenu->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        $submenu=SubMenu::find($request->id);
        $submenu->sub_name=$request->sub_name;
        $submenu->menu_id=$request->menu_id;
        $submenu->sub_link=$request->sub_link;
        $submenu->sub_status=$request->sub_status;
        $submenu->save();
        return redirect()->back();
    }
}
