<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Holds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
    public function showBasket()
    {
        $basket = Basket::where('id_users', '=', Auth::user()->id_users)->firstOrFail();

        return view('basket/showBasket', ["basket" => $basket]);
    }

    public function appendBasket(int $idProduct)
    {
        // chercher si la guitare avec l'index idProduct est déjà dans le panier
        $hold = Holds::where('id_products', '=', $idProduct)->where('id_basket', '=', Auth::user()->id_basket)->first();
        if ($hold == null) {
            // si null ajoute la guitare dans le panier
            $basket = new Basket();
            $basket->id_users = Auth::user()->id_users;
            $hold = new Holds();
            $hold->id_products = $idProduct;
            $hold->id_basket = Auth::user()->basket->id;
            $hold->quantity = 1;
            $basket->save();
            $hold->save();
        } else {
            // sinon ajoute 1 à la quantité de guitare (quantity += 1;)
            $hold->Qte += 1;
            // mettre à jour en base de donnée
            $hold->save();
        }
        return redirect()->route('basket');
    }
}
