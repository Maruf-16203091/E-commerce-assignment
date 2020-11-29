<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubMenu extends Model
{
    public $table='submenus';
    public $primaryKey='id';

    public $fillable = [
        'sub_name', 'menu_id',  'sub_link', 'sub_status',
    ];

  // public function menu() {
  //       return $this->belongsTo(Menu::class);
  //   }
}
