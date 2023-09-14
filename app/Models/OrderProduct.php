<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_products';

    protected $fillable = ['order_id', 'img_path', 'product_name', 'price', 'qty', 'desc'];

    public function OrderList()
    {
    //  hasMany 1對多 (關聯,對方的欄位,自己的欄位)  對方Modle
        return $this->belongsTo(OrderList::class,'product_type_id','order_id');
    }

}
