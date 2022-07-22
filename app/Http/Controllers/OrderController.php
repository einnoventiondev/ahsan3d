<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Support\Facades\Http;


class OrderController extends Controller
{
    public function addOrder(Request $request)
    {

		$order_no = Order::orderBy('id','DESC')->get()->count();
		$order_no = $order_no+1;
        $user=Auth::user()->id;

    	 $order = Order::create([
    	 		'user_id' => $request->user_id,
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

            // dd($order->id);
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' =>'Bearer keyD9Kbfap9FoWk0M',
            ])->post('https://api.airtable.com/v0/'.env('AIRTABLE_BASE_ID').'/'.env('AIRTABLE_CAND_TABLE'), [

                "typecast" => true,
                "fields" => [ "Name" => Auth::user()->name,
                               "User_email"=>$request->user_email,
                               "Designer_id"=>$request->designer_id,
                               "Designer_name"=>$request->designer_name,
                               "Designer_email"=>$request->designer_email,
                               "Quantity"=>$request->qty,
                               "Color" => "yellow",
                               "Status_order" => "waiting",
                               "Size" => $request->size,
                               "Print" => $request->print,
                               "Format" => $request->format,
                               "Description" => $request->notes,
                         ]
            ]);
           
            $json = json_decode($response, true);
                $order_update=Order::latest()->first();
                $order_update->airtable_order_id=$json['id'];
                $order_update->airtable_created_at=$json['createdTime'];
                $order_update->save();
    	 if ($order) {
    	  return redirect()->back()->with('success','Order placed successfully');
    	 }
    	 else
    	 {
    	 	return redirect()->back();
    	 }
        }
}
