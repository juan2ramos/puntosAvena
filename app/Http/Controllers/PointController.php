<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPointRequest;
use App\Models\Point;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PointController extends Controller
{

    public function pointProductDetail($id)
    {

        Session()->flash('pointId', $id);

        return view('back.pointProductDetail',
            ['point' => Point::with('stockDay')->find($id)]
        );
    }

    public function productPointUpdate(ProductPointRequest $request)
    {
        $ids = $request->input('ids');

        //  $ids = ['1' => 230, '2' => 231, '3' => 232, '4' => 233, '5' => 234, '6' => 235, '7' => 136];

        $products = Point::find(session('pointId'))->products()
            ->where('date', Carbon::now()->toDateString())->get();

        foreach ($products as $product) {
            $product->stock
                ->where('date', Carbon::now()->toDateString())
                ->where('point_id', session('pointId'))
                ->where('product_id', $product->id)
                ->update(['quantity' => $ids[$product->id]]);
        }

        return back();
    }

}
