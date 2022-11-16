<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function showUsers()
    {
        $user = User::all();
        return view('user/showUsers', ["users" => $user]);
    }

    public function appendUsers()
    {
        return view('user/appendUsers');
    }

    public function addUsers(Request $request)
    {
        $user = new User();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->mail = $request->get('mail');
        $user->password = bcrypt($request->get('password'));
        $user->phone_number = $request->get('phone_number');
        $user->save();
        return view('/Accueil');
    }

    public function editUsers(int $index)
    {
        $user = User::where('id_users', '=', $index)->firstOrFail();
        //si $user est vide (pas d'addresse à l'index indiqué) une page 404 est automatiquement affiché
        return view('user/editUsers', ["users" => $user]);
    }

    public function postEditUsers(request $request)
    {
        echo $request->id_users;
        echo $request->firstname;
        $user = User::find($request->id_users);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->mail = $request->mail;
        $user->password = $request->password;
        $user->phone_number = $request->phone_number;
        $user->save();
        return view('user/confirmedEdit');
    }
}
