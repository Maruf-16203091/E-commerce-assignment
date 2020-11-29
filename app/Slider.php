<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   public $table='sliders';
   public $primaryKey='id';

    public $fillable = [
        'image', 'status', 
    ];
}
