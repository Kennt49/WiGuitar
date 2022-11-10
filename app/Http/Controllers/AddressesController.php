<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use Illuminate\Http\Request;


class AddressesController extends Controller
{
    public function showAddresses()
    {
        $address = Addresses::all();
        return view('address/showAddresses',["addresses"=>$address]);
}

public function appendAddresses()
{
    return view('address/appendAddresses');
}

public function addAddresses(Request $request)
    {
        $address = new Addresses();
        $address->street=$request->get('street');
        $address->complement=$request->get('complement');
        $address->zip_code=$request->get('zip_code');
        $address->city=$request->get('city');
        $address->id_users=$request->get('id_users');
        $address->save();
        return view('address/confirmation');
    }

    public function editAddresses(int $index)
    {
        $address = Addresses::where('id_addresses','=',$index)->firstOrFail();
        //si $address est vide (pas d'addresse à l'index indiqué) une page 404 est automatiquement affiché
     return view('address/editAddresses',["addresses"=>$address]);
    }

    public function postEditAddresses(request $request)
    {
        echo $request->id_addresses;
        echo $request->street;
        $address = Addresses::find($request->id_addresses);
        $address->street = $request->street;
        $address->complement = $request->complement;
        $address->zip_code = $request->zip_code;
        $address->city = $request->city;
        $address->save();
        return view('address/confirmedEdit');
    }

    public function deleteAddresses(int $index) 
    {
        //on retrouve l'adresse à supprimer
        $address = Addresses::find($index);
        return view('address/deleteAddresses',["addresses"=>$address]);
    }
    
    public function postDeleteAddresses(request $request)
    {
        $address = Addresses::find($request->id_addresses);
        if ($address !== null) {
        $address->delete();
        $message = "effacement effectué";} 
        else {$message = "suppression imposssible";}
        return view("address/comfirmeddelete")->with(["message"=>$message]);
    }
}

