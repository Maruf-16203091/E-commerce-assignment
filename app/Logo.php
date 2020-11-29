<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    public $table='logos';
    public $primaryKey='id';

    public $fillable = [
        'image',   'logo_status', 
    ];
}
