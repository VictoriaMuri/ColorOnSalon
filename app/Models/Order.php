<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function graph(){
        return $this->belongsTo(Graph::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function master(){
        return $this->belongsTo(Master::class);
    }
}
