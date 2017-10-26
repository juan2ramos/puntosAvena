<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Product;
    use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }

    public function point()
    {

        $pointProducts = auth()->user()->point->stockDay;
        if ($pointProducts->count()) {
            $day = ['hoy', Carbon::now()->formatLocalized('%A %d de %B %Y')];

            return view('back.reportPoint', compact('pointProducts', 'day'));
        }
        $pointProducts = auth()->user()->point->stockYesterday;
        return view('back.reportPoint',
            [
                'pointProducts' => $pointProducts,
                'products' => Product::all(),
                'day' => ['ayer', Carbon::yesterday()->formatLocalized('%A %d de %B %Y')],
                'today' => Carbon::now()->formatLocalized('%A %d de %B %Y')
            ]);
    }

    public function administrator()
    {
        return view('back.dashboard',
            [
                'points' => Point::has('stockDay')->get(),
                'today' => Carbon::now()->formatLocalized('%A %d de %B %Y'),
                'pointAll' => Point::count()
            ]);
    }

    public function admin()
    {
        return redirect()->route(auth()->user()->roles->first()->name == 'Point' ? 'homePoint' : 'homeAdmin');
    }
}
