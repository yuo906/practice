<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    protected $table = 'order_lists';

    protected $fillable = ['order_id', 'user_id', 'name', 'address', 'date', 'tel_number', 'ps', 'total_price', 'pay'];

    public function OrderProduct()
    {
    //  hasMany 1對多 (關聯,對方的欄位,自己的欄位)  對方Modle
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
}
