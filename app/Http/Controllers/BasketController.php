<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
    public function showBasket()
    {
        $basket = Basket::where('id_users', '=', Auth::user()->id_users)->firstOrFail();
        return view('basket/showBasket', ["basket" => $basket]);
    }

    public function appendBasket(int $index)
    {
        $basket = new Basket();
        $basket->id_products = $index;
        $basket->id_users = Auth::user()->id_users;
        $basket->save();
        return redirect()->route('basket');
    }
}
