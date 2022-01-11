<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        // dd('Find It !!');
        $lists = DB::table('articles')->get();
        return view('page',compact('lists'));
    }
}
