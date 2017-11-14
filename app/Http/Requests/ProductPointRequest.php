<?php

namespace App\Http\Requests;

use App\Models\Point;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductPointRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $products = (auth()->user()->hasRole('Administrator')) ?
            Point::find(session('pointId'))->productsAvailable->pluck('id'):
            auth()->user()->point->productsAvailable->pluck('id');
        $return = [];

        foreach ($products as $product) {

            $return += ['ids.' . $product . '.quantity' => 'required|numeric|min:0'];
            $return += ['ids.' . $product . '.sold' => 'required|numeric|min:0'];
        }
        return $return;
    }
}
