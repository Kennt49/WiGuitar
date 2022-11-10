<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    public function showFeatures()
    {
        $feature = Features::all();
        return view('feature/showFeatures',["features"=>$feature]);
}
public function appendFeatures()
    {
    return view('feature/appendFeatures');
    }

    public function addFeatures(Request $request)
    {
        $feature = new Features();
        $feature->maker=$request->get('maker');
        $feature->body_material=$request->get('body_material');
        $feature->handle_material=$request->get('handle_material');
        $feature->number_frets=$request->get('number_frets');
        $feature->number_strings=$request->get('number_strings');
        $feature->settings=$request->get('settings');
        $feature->switch_micro=$request->get('switch_micro');
        $feature->save();
        return view('feature/confirmation');
    }

    public function editFeatures(int $index)
    {
        $feature = Features::where('id_features','=',$index)->firstOrFail();
        //si $feature est vide (pas d'producte à l'index indiqué) une page 404 est automatiquement affiché
    return view('feature/editFeatures',["features"=>$feature]);
    }

    public function postEditFeatures(request $request)
    {
        echo $request->id_features;
        echo $request->maker;
        $feature = Features::find($request->id_features);
        $feature->maker = $request->maker;
        $feature->body_material = $request->body_material;
        $feature->handle_material = $request->handle_material;
        $feature->number_frets = $request->number_frets;
        $feature->number_strings = $request->number_strings;
        $feature->settings = $request->settings;
        $feature->switch_micro = $request->switch_micro;
        $feature->save();
        return view('feature/confirmedEdit');
    }
}
