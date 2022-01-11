<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = Order::get();
        return view('order.order',compact('order'));
    }

    public function look($id){
        $order = Order::find($id);
        return view('order.order-look',compact('order'));
    }

    public function update($id,Request $request){
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect('/order');
    }
}
