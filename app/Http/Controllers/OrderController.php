<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {

		$order_no = Order::orderBy('id','DESC')->get()->count();
		$order_no = $order_no+1;
    	 $order = Order::create([
    	 		'user_id' => Auth::user()->id,
    	 		'designer_id' => $request->designer_id,
                'qty' => $request->qty,
                'color' => 'yellow',
                'size' => $request->size,
                'print' => $request->print,
                'format' => $request->format,
                'notes' => $request->notes,
                'order_no' => $order_no,
                'status' => 1,
            ]);


    	 if ($order) {
    	  return redirect()->back()->with('success','Order placed successfully');
    	 }
    	 else
    	 {
    	 	return redirect()->back();
    	 }
        }
}
