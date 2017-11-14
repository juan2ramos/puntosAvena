<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Point extends Model
{
    protected $fillable = [
        'name', 'address'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->as('stock')->withPivot('date', 'quantity','sold','price');
    }

    public function stockDay()
    {
        return $this->belongsToMany(Product::class)->as('stock')->withPivot('date', 'quantity','sold','price')
            ->wherePivot('date', Carbon::now()->toDateString());
    }

    public function stockForDay()
    {
        return $this->belongsToMany(Product::class)->as('stock')->withPivot('date', 'quantity','sold','price')
            ->wherePivot('date', (\request()->date) ?\request()->date:Carbon::now()->toDateString());
    }

    public function stockYesterday()
    {
        return $this->belongsToMany(Product::class)->as('stock')->withPivot('date', 'quantity','sold','price')
            ->wherePivot('date', Carbon::yesterday()->toDateString());
    }


    public function productsAvailable()
    {
        return $this->belongsToMany(Product::class, 'point_product_available')->as('avail')->withPivot('price');
    }


}
