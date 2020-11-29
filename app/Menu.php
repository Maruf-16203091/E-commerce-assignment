<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Menu extends Model
{
    public $table='menus';
    public $primaryKey='id';

    public $fillable = [
        'menu_name', 'menu_link', 'menu_status',
    ];

    //  public function submenus() {
    //     return $this->hasMany('App\SubMenu');
    // }
    public function sub()
    {
    	return $this->hasMany('App\SubMenu');
    }
}
