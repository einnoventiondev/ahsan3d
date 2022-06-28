<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productRequest()
    {
    $product_requests	= Product::all();
    return view('pages.admin.dashboard.product_requests',compact('product_requests'));
    }
    public function requestApprove($id)

    {
    	$product = Product::where("id", $id)->update(["verify" => 1]);
    	return redirect()->back();
    }

    public function orders()
    {

    }

    public function adminSetting(Request $request)
    {
        dd($$request->all());

    }

    public function adminSettingshow()
    {
        $setting = Setting::latest()->get()[0];
        return view('pages.admin.dashboard.settings');
    }

    public function productDelete($id){
       $product=Product::find($id);
       $product->delete();
       return redirect()->back();
    }
}
