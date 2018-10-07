<?php

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

use Illuminate\Http\Request;
use App\Orders;

Route::get('/', function () {
    return view('submit');
});

Route::get('/submit', function (Request $request) {
    return view('submit');
});

Route::post('/submit/new','OrdersController@store');

Route::get('/portal',function (){
    $orders = Orders::all();
    return view('portal',['orders'=>$orders]);
});