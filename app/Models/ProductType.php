<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';

    protected $fillable = ['name', 'desc'];

    public function productTypeImg()
    {
    //  hasMany 1對多 (關聯,對方的欄位,自己的欄位)  對方Modle
        return $this->hasMany(ProductTypeImg::class,'product_type_id','id');
    }
}
