<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
    public function store(Request $request){
    	$data = $request->validate([
	        'order_id' => 'required',
	        'order_category' => 'required',
	        'order_description' => 'required',
	        'order_extra_description' => 'required',
	        'order_location_area' => 'required',
	        'order_location_street' => 'required',
	        'order_location_house' => 'required',
	        'order_phonenumber' => 'required',
	        'order_time' => 'required',
	    ]);    

	    $order = new Orders();
        $order->order_id = request('order_id');
        $order->order_category = request('order_category');
        $order->order_description = request('order_description');
        $order->order_extra_description = request('order_extra_description');
        $order->order_location_area = request('order_location_area');
        $order->order_location_street = request('order_location_street');
        $order->order_location_house = request('order_location_house');
        $order->order_phonenumber = request('order_phonenumber');
        $order->order_time = request('order_time');
        
        $order->save();

        return redirect('/')->with('message','Department has been saved sucessfully');
    }
}
