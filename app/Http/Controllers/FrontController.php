<?php

namespace App\Http\Controllers;

use App\Article;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $article = Article::orderbydesc('id')->get();
        $product = Product::get();
        return view('front.index',compact('article','product'));
    }
    
    public function checkout1(){
        return view('front.checkout1');
    }
}
