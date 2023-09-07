<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'responses';

    protected $fillable = ['response', 'message_id'];

    public function response(){
        return $this->hasOne(Response::class,'id','message_id');
    }
}
