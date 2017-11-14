<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPointRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('back.products', ['products' => Product::all()]);
    }

    public function newProduct()
    {
        return view('back.newProduct');
    }

    public function insertProduct(ProductRequest $request)
    {

        Product::create($request->validated());
        return redirect('admin/productos');
    }

    public function editProduct($id)
    {
        Session()->flash('productId', $id);
        return view('back.editProduct', ['product' => Product::findOrFail($id)]);
    }

    public function updateProduct(ProductRequest $request)
    {
        $data = $request->validated();
        $data['count'] = $request->input('count');
        $product = Product::findOrFail(session('productId'));
        $product->fill($data)->save();
        return back()->with(['success' => '¡Cliente Actualizado!']);
    }

    public function deleteProduct(Request $request)
    {
        Product::destroy($request->input('idProduct'));
        return redirect('/admin/productos');
    }

    /**
     * @param ProductPointRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productPoint(ProductPointRequest $request)
    {
        $ids = $request->input('ids');
        $products = (auth()->user()->hasRole('Administrator')) ?
            Point::with('')->find(session('pointId'))->productsAvailable:
            auth()->user()->point->productsAvailable;

        foreach ($ids as $key => $id) {
            $ids[$key] +=  ['date' => Carbon::today()->toDateString()] ;
            $ids[$key] +=  ['price' => $products->find($key )->avail->price] ;
        }
        auth()->user()->point->products()->attach($ids);
        return back();
    }
}
