<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Stocks;
use App\Models\Features;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ProductsController extends Controller
{
    public function showProducts(int $index)
    {
        $product = Products::where('id_products', '=', $index)->firstOrFail();
        return view('/product/showProducts', ["products" => $product]);
    }

    public function appendProducts()
    {
        return view('product/appendProducts');
    }

    public function addProducts(Request $request)
    {
        $product = new Products();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();
        return view('product/confirmation');
    }

    public function editProducts(int $index)
    {
        $product = Products::where('id_products', '=', $index)->firstOrFail();
        //si $product est vide (pas d'producte à l'index indiqué) une page 404 est automatiquement affiché
        return view('product/editProducts', ["products" => $product]);
    }

    public function postEditProducts(request $request)
    {
        echo $request->id_products;
        echo $request->name;
        $product = Products::find($request->id_products);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return view('product/confirmedEdit');
    }
}
