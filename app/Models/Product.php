<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function getCountAttribute($value){
        return ($value)?'Si':'No';
    }
}