<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function showOrders  ()
    {
        $order = Orders::all();
        return view('order/showOrders',["orders"=>$order]);
}

public function appendOrders()
{
    return view('order/appendOrders');
}

public function addOrders(Request $request)
    {
        $order = new Orders();
        $order->labels=$request->get('labels');
        $order->orders_date=$request->get('orders_date');
        $order->orders_received_date=$request->get('orders_received_date');
        $order->sum_total=$request->get('sum_total');
        $order->status=$request->get('status');
        $order->pdf=$request->get('pdf');
        $order->id_deliverys=$request->get('id_deliverys');
        $order->id_users=$request->get('id_users');
        $order->save();
        return view('order/confirmation');
    }

    public function editOrders(int $index)
    {
        $order = Orders::where('id_orders','=',$index)->firstOrFail();
        //si $order est vide (pas d'addresse à l'index indiqué) une page 404 est automatiquement affiché
     return view('order/editOrders',["orders"=>$order]);
    }

    public function postEditOrders(request $request)
    {
        echo $request->id_orders;
        echo $request->labels;
        $order = Orders::find($request->id_orders);
        $order->labels = $request->labels;
        $order->orders_date=$request->orders_date;
        $order->orders_received_date=$request->orders_received_date;
        $order->sum_total=$request->sum_total;
        $order->status=$request->status;
        $order->pdf=$request->pdf;
        $order->id_deliverys=$request->id_deliverys;
        $order->id_users=$request->id_users;
        $order->save();
        return view('order/confirmedEdit');
    }
}
