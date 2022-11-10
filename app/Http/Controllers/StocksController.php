<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class StocksController extends Controller
{
    public function showStocks(int $index)
    {
        $stock = Stocks::where('id_stocks','=',$index)->firstOrFail();
        return view('product/showProducts',["stocks"=>$stock]);
    }
}