<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function points(){
        return $this->belongsToMany(Point::class)
            ->withPivot('date', 'quantity');
    }

    public function getCountAttribute($value){
        return ($value)?'Si':'No';
    }
}
