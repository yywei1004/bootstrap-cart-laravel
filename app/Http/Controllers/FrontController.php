<?php

namespace App\Http\Controllers;

use App\Article;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index(){
        $article = Article::orderbydesc('id')->take(3)->get();
        $product = Product::get();
        return view('front.index',compact('article','product'));
    }
    
    public function addtocart(Request $request){
        $product = Product::find($request->product_id);
        ShoppingCart::create([
            'product_id' => $product->id,
            'qty' => 1,
            'price' => $product->price,
            'user_id' => Auth::user()->id,
        ]);
        return "新增成功";
    }

    public function deletetocart(Request $request){
        ShoppingCart::find($request->shoppingcart_id)->delete();
        return "刪除成功";
    }

    public function checkout1(){
        $shoppingcart = ShoppingCart::where('user_id',Auth::user()->id)->get();
        return view('front.checkout1',compact('shoppingcart'));
    }

    public function checkout2(Request $request){
        // ShoppingCart::where('user_id',Auth::user()->id)->delete();
        Session::put('step01',$request->all());
        $sum = 0;
        foreach ($request->total as $item) {
            $sum = $sum + $item;
        }
        $merch = count($request->total);
        return view('front.checkout2',compact('sum','merch'));
    }

    public function checkout3(Request $request){
        Session::put('step02',$request->all());
        return view('front.checkout3');
    }

    public function store(Request $request){
        $shop01 =  Session::get('step01');
        $shop02 =  Session::get('step02');
        $total = 0;
        foreach ($shop01['total'] as $key => $value) {
            $total = $total + $value;
        }

        if ($shop02['shipway'] == 1){
            $total = $total + 200;
            $shipfee = 200;
        }else{
            $total = $total + 60;
            $shipfee = 60;
        }

        $order = Order::create([
            'total_price' => $total,
            'shipping_fee' => $shipfee, 
            'user_id' => Auth::user()->id, 
            'address' => $request->address, 
            'phone' => $request->phone,  
            'ship_way' => $shop02['shipway'], 
            'status' => 1,
        ]);

        foreach ($shop01['total'] as $key => $value) {
            OrderDetail::create([
                'product_id' => $shop01['product_id'][$key],
                'qty' => $shop01['qty'][$key],
                'price' => $shop01['price'][$key],
                'order_id' => $order->id,
            ]);
        }
        //成功成立訂單後 將session清空
        Session::forget('step01');
        Session::forget('step02');
    
        return redirect('/checkout4/'. $order->id);
    }

    public function checkout4($id){
        $order = Order::find($id);
        return view('front.checkout4',compact('order'));
    }
}
