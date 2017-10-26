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
                'points' => Point::pluck('name', 'id')
            ]
        );
    }

    public function reports(ReportResquest $request)
    {

        $dates = preg_replace('/\s+/', '', explode('to', $request->input('date')));
        $points =
            Point::find(1)->products()->whereHas
            (
                "point_product.date BETWEEN  '$dates[0]' AND '$dates[1]'"
            )->get();

        var_dump($points);
    }
}
