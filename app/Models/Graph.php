<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;

    public function master(){
        return $this->belongsTo(Master::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
