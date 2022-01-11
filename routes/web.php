<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/page',function () {
//     // $a = 4;
//     // $b = 6;
//     // dump($a.$b);
//     // dump($a < $b and 2 > 1);
//     $title = '我是標題';
//     $text = '我是內文';
//     $lists = DB::table('articles')->get();
//     // foreach ($lists as $item) {
//     //     dump($item);
//     // };
//     // dd($lists);
//     return view('page', compact('title','text','lists'));
// });

Route::get('/page','NewsController@index');
Route::get('/index','FrontController@index');
Route::get('/checkout1','FrontController@checkout1');

Route::middleware('test')->group(function(){
    Route::get('/blog','BlogController@index');
    Route::get('/blog/create','BlogController@create');
    Route::post('/blog/store','BlogController@store');
    Route::get('/blog/edit/{id}','BlogController@edit');
    Route::post('/blog/update/{id}','BlogController@update');
    Route::get('/blog/delete/{id}','BlogController@delete');

    Route::get('/products','ProductsController@index');
    Route::get('/products/create','ProductsController@create');
    Route::post('/products/store','ProductsController@store');
    Route::get('/products/edit/{id}','ProductsController@edit');
    Route::post('/products/update/{id}','ProductsController@update');
    Route::get('/products/delete/{id}','ProductsController@delete');
    Route::post('/products/imgUpload','ProductsController@imgUpload');
    Route::post('/products/imgDelete','ProductsController@imgDelete');

    Route::prefix('/user')->group(function (){
        Route::get('/','UserController@index');
        Route::get('/look/{id}','UserController@look');
        Route::post('/update/{id}','UserController@update');
    });

    Route::prefix('/order')->group(function (){
        Route::get('/','OrderController@index');
        Route::get('/look/{id}','OrderController@look');
        Route::post('/update/{id}','OrderController@update');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
