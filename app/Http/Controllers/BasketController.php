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
        $id_basket =  Auth::user()->basket->id;
        var_dump($id_basket);
        die;
        $hold = Holds::where('id_products', $idProduct)->where('id_basket', 2)->first();
        var_dump($hold);
        return View('basket/confirmation');
        die;
        if ($hold == null) {
            // si null ajoute la guitare dans le panier
            $basket = new Basket();
            $basket->id_products = $idProduct;
            $basket->id_users = Auth::user()->id_users;
            $basket->save();
        } else {
            // sinon ajoute 1 à la quantité de guitare (quantity += 1;)
            $basket->Qte += 1;
            // mettre à jour en base de donnée
            $basket->save();
        }
        return redirect()->route('basket');
    }
}
