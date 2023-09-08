<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTypeImg extends Model
{
    protected $table = 'product_type_imgs';

    protected $fillable = ['img_path', 'product_type_id'];

                // 寫對方model名稱比較好記
    public function productType()
    {
    //  hasOne 1對1 (關聯,對方的欄位,自己的欄位)  對方Modle
        return $this->hasOne(ProductType::class,'id','product_type_id');
    }
}
