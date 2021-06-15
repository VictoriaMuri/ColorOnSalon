<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    public function graphs(){
        return $this->hasMany(Graph::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
