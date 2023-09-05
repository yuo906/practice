<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product_practices';

    protected $fillable = ['name', 'img_path', 'price', 'status','desc'];
}
