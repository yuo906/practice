<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['content'];

    public function message(){
        return $this->hasMany(Response::class,'message_id','id');
    }
}
