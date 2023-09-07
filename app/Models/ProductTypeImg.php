<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTypeImg extends Model
{
    protected $table = 'product_type_imgs';

    protected $fillable = ['img_path', 'product_type_id'];
}
