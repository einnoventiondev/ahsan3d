<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Proposal;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $image_arr = [];

    	$status_arr = $request->input('status');
    	if ($status_arr[0] == 'on') {
    		$status = 1;
    	}
    	else{
    		$status = 0;
    	}
    	$setting = Setting::latest()->get()[0];
    	$setting = $setting->verification;

    	if($setting == 1)
    	{
    		$verify = 0;
    	}
    	else
    	{
    		$verify = 1;
    	}
       
        if ($request->file('images')) {
        foreach($request->file('images') as $imagefile) {
            $imagefile->getClientOriginalName();
            $path = $imagefile->store('/products', ['disk' =>   'public']);
            $image_arr[] = $path;
            
            }
            $image_arr = json_encode($image_arr);
          
        }
        else
        {
            $image_arr = null;
        }
    	 $offer = Product::create([
    	 		'designer_id' => Auth::user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'color' => $request->color,
                'size' => $request->size,
                'print_technology' => $request->print_technology,
                'user_software' => $request->software,
                'status' => $status,
                'verify' => $verify,
                'images' => $image_arr,
            ]);


    	 if ($offer) {
    	  return redirect()->back()->with('success','product added successfully');
    	 }
    	 else
    	 {
    	 	return redirect()->back();
    	 }
    }
    public function addProposal(Request $request)
    {
       $proposal = Proposal::create([

                'user_id' => $request->user_id,
                'order_id' => $request->order_id,
                'designer_id' => Auth::user()->id,
                'price' => $request->price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);




         if ($proposal) {
         
        return redirect()->route('home')->with('pop','yes');
    }
         else
         {
            
        return redirect()->route('home')->with('pop','yes');
         }
    }
}
