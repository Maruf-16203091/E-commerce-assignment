<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table='blogs';
    public $primaryKey='id';

    public $fillable = [
        'title',   'body', 'date', 'image',
    ];
}
