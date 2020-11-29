<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   public $table='contacts';
    public $primaryKey='id';

    public $fillable = [
        'phone',   'email', 'location', 'open_hour',
    ];
}
