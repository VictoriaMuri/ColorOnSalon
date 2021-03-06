<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function type_service(){
        return $this->belongsTo(Type_service::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
