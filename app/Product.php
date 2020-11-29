<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table='products';
    public $primaryKey='id';

    public $fillable = [
        'name', 'under_cat', 'price', 'details', 'size',   'color', 'brand', 'product_status', 'image',
    ];
}
