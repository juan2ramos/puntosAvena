<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportResquest;
use App\Models\Point;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        return view('back.report',
            [
                'pointsName' => Point::pluck('name', 'id')
            ]
        );
    }

    public function reports(ReportResquest $request)
    {

        //$dates = preg_replace('/\s+/', '', explode('to', $request->input('date')));
        $date = $request->input('date');
        $pointsName = Point::pluck('name', 'id');
        $points =
            Point::find(1)->whereHas('products', function ($query) use ($date) {
                $query->where("point_product.date", $date);
            })->with(['products' => function ($query) use ($date) {
                $query->where("point_product.date", $date);
            }])->get();
        return view('back.report', compact('points', 'pointsName','date'));
    }
}
