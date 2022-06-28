<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Proposal;
use App\Models\Perposal;
use App\Models\Order;
use App\Models\User;
use App\Models\PdfItem;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $image_arr = [];

        if (isset($request->status)) {
            $status = 1;
        }
        else
        {
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

       
        if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move('products/', $name);
               $data[] = $name;
           }
           $image_arr=json_encode($data);
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
		//dd($request->all());
      //    $proposal = Proposal::create([

    //             'user_id' => $request->user_id,
    //             'designer_id' => Auth::user()->id,
    //             'price' => $request->price,
    //             'start_date' => $request->start_date,
    //             'end_date' => $request->end_date,
    //         ]);




    //      if ($proposal) {

    //     return redirect()->route('home')->with('pop','yes');
    // }
    //      else
    //      {

    //     return redirect()->route('home')->with('pop','yes');
    //      }


		// $request->user_id = 86;
		// $request->order_id = 11;

        $med = Order::find($request->order_id);
        // $user = User::find($med->user_id);

        $perposals = Perposal::create([
            'phone'=>Auth::user()->phone,
            'status'=>2,
            'assigned'=>0,
            'city'=>'test',
            'state'=>'test',
            'country'=>'test',
            'zip_code'=>'test',
            'price_model'=>$request->price,
            'order_id' => $request->order_id,
            'user_id' => $request->user_id,
            'comments' => 86,
            'image'=> 'test',
            'address' =>'test',
            'validtill' => $request->end_date,
            'date' => $request->start_date,
        ]);

        $user_data=Perposal::where('order_id',$request->order_id)->first();
       $qty=Order::where('id',$request->order_id)->first();

       $user=User::where('id',$qty->designer_id)->first();
       $username=User::where('id',$qty->user_id)->first();


             $pdf_item = new PdfItem;
                 $pdf_item->model = 'App/Models/Perposal';
                 $pdf_item->pdf_id = $perposals->id;
                 $pdf_item->title =  Auth::User()->name;
                 $pdf_item->description = $med->description;
                 $pdf_item->quantity = $qty->qty;
                 $pdf_item->rate = $user_data->price_model;
                 $pdf_item->tax = 99;
             $pdf_item->save();

        //   $details = [
        //     'subject' =>"'".$med->id ."' تم اصدار فاتورة رقم",
        //     'id' =>$med->id,
        //     'name' =>$user->name ,
        //     'body1' => "'".$med->id ."' بناء على موافقتكم على عرض السعر للطلب رقم ",
        //     'body2'=> "'".$med->request ."'فقد تم اصدار الفاتورة بمبلغ",
        //     'body3'=>'للدفع برجاء الضغط على الرابط التالي:',
        //     'linkText' => 'Link is being here to go to website to pay the invoice',
        //     'thanks' => 'شكراً جزيلاً',
        //     'orderNumber' =>$med->id ,
        // ];
       	 $invoice = Perposal::where('id',$perposals->id)->first();
         $user = User::find($invoice->designer_id);
         $username=User::where('id',$qty->user_id)->first();
          if($request->has('download')){
             $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user','username'));
 }
        // \Mail::send('emails.invoice', $details, function($message)use($details,$user, $pdf) {
        //     $message->to($user->email)
        //             ->subject($details["subject"])
        //             ->attachData($pdf->output(), "Propsal.pdf");
        // });
        // \Mail::to($user->email)->send(new \App\Mail\ProposelMail($details));
        return redirect()->route('/');

	}

}
