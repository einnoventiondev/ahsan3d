<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Medical;
use App\Models\Payment;
use App\Models\PdfItem;
use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\InvoiceNotification;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('user')->with('payment')->whereHas('pdf',function($q) {
            $q->where('model','App/Models/Invoice');
        })->with('pdf')->get();
        

        return view('pages.admin.dashboard.invoice.index', compact('invoices'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Medical::all();
        return view('pages.admin.dashboard.invoice.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('upload/'), $image);
        $pathimage ='upload/'.$image;
        $med = Medical::find($request->order_id);
        $user = User::find($med->user_id);
        $invoices = Invoice::create([
            'order_id' => $request->order_id,
            'user_id' => $user->id,
            'image'=> $pathimage,
            'address' =>$request->address,
            'validtill' => $request->validtill,
            'date' => $request->date,
        ]);
        foreach ($request->title as $key => $title) {
            $pdf_item = new PdfItem;
                $pdf_item->model = 'App/Models/Invoice';
                $pdf_item->pdf_id = $invoices->id;
                $pdf_item->title = $title;
                $pdf_item->description = $request->description[$key];
                $pdf_item->quantity = $request->qty[$key];
                $pdf_item->rate = $request->rate[$key];
                $pdf_item->tax = $request->tax[$key];
            $pdf_item->save();
        }
        $details = [
            'subject' =>"'".$invoices->id ."' تم اصدار فاتورة رقم",
            'name' =>$user->name ,
            'id' =>$invoices->id,
            'body1' => "'".$invoices->id ."' بناء على موافقتكم على عرض السعر للطلب رقم ",
            'body2'=> "'".$invoices->request ."'فقد تم اصدار الفاتورة بمبلغ",
            'body3'=>'للدفع برجاء الضغط على الرابط التالي:',
            'linkText' => 'Link is being here to go to website to pay the invoice',
            'thanks' => 'شكراً جزيلاً',
            'orderNumber' =>$invoices->id ,
        ];
        
        $invoice = Invoice::where('id',$invoices->id)->get()->first();
        $user = User::find($invoice->user_id);
        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user'));

        \Mail::send('emails.invoice', $details, function($message)use($details,$user, $pdf) {
            $message->to($user->email)
                    ->subject($details["subject"])
                    ->attachData($pdf->output(), "invoice.pdf");
        }); 
        //  Mail::to($user->email)->send(new \App\Mail\InvoiceMail($details));
        return redirect()->route('invoicess.index');
    }
    public function sendViaMail($id)
    {
        $med = Medical::find($id);
        $user = User::find($med->user_id);
        $details = [
            'subject' =>"'".$id ."' تم اصدار فاتورة رقم",
            'name' =>$user->name ,
            'id' =>$id,
            'body1' => "'".$id ."' بناء على موافقتكم على عرض السعر للطلب رقم ",
            'body2'=> "'".$id ."'فقد تم اصدار الفاتورة بمبلغ",
            'body3'=>'للدفع برجاء الضغط على الرابط التالي:',
            'linkText' => 'Link is being here to go to website to pay the invoice',
            'thanks' => 'شكراً جزيلاً',
            'orderNumber' =>$id ,
        ];
        
        $invoice = Invoice::where('order_id',$id)->get()->first();
        $user = User::find($invoice->user_id);
        // if($request->has('download')){
        $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user'));

        Mail::send('emails.invoice', $details, function($message)use($details,$user, $pdf) {
            $message->to($user->email)
                    ->subject($details["subject"])
                    ->attachData($pdf->output(), "invoice.pdf");
        });
    }
    
    /** 
     * Display the specified resource.
     *  
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
      
        $invoice = Invoice::where('id',$id)->with('user')->first();
        
        $user = User::find($invoice->user_id);
  
        return view('pages.admin.invoiceView', compact('invoice', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('pages.admin.dashboard.invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Invoice::find($id)->update([
            'tax' => $request->tax,
            'price_model' => $request->price_model,
            'price_design' => $request->price_design,
            'qty_model' => $request->qty_model,
            'qty_design' => $request->qty_design,
            'validtill' => $request->validtill,
            'date' => $request->date,
        ]);
        return redirect()->route('invoicess.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoice::find($id)->delete();
        return redirect()->route('invoicess.index');
    }


    
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfInvoice($id)
    {
        $invoice = Invoice::find($id);
        $user = User::find($invoice->user_id);
        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user'));
            return $pdf->download('invoice.pdf');
        // }
        // return $pdf->stream();
    }
    public function pdfPayment($id)
    {
        // $invoice = Invoice::find($id);
        $invoice = Invoice::with('user')->with('payment')->whereHas('pdf',function($q) {
            $q->where('model','App/Models/Invoice');
        })->with('pdf')->where('id',$id)->first();
        $user = User::find($invoice->user_id);
        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.dashboard.invoice.payment',compact('invoice', 'user'));
            return $pdf->download('payment.pdf');
        // }
        // return $pdf->stream();
    }
    public function convertToInvoice(Request $request)
    {
     
        $invoice = Invoice::create([
            'user_id' =>$request->user, 
            'order_id' =>$request->project,  
            'perposal_id'=>$request->invo_no, 
            'payment' =>$request->payment, 
            'currency' =>$request->currency, 
            'sale_agent'=>$request->sale_agent, 
            'admin_note'=>$request->admin_note,  
            'client_note'=>$request->client_note, 
            'terms'=>$request->terms,

        ]);
             
        foreach ($request->title as $key => $title) {
            $pdf_item = new PdfItem;
                $pdf_item->model = 'App/Models/Invoice';
                $pdf_item->pdf_id = $invoice->id;
                $pdf_item->title = $title;
                $pdf_item->description = $request->description[$key];
                $pdf_item->quantity = $request->qty[$key];
                $pdf_item->rate = $request->rate[$key];
                $pdf_item->tax = $request->tax[$key];
            $pdf_item->save();
        }
        return redirect()->back();
    }
    public function paymentAdded(Request $request)
    {
        $payment = Payment::create([
            'payment_created_by'=>Auth::user()->id,
            'invoice_id'=>$request->invoice_id,
            'paid'=>$request->paid,
            'transection_id'=>$request->transection_id,
            'payment_mode'=>$request->payment_mode,
            'note'=>$request->note,
            'payment_date'=>$request->payment_date,
            'total_amount'=>$request->total_amount
        ]);
        $invoice = Invoice::with('user')->with('payment')->whereHas('pdf',function($q) {
            $q->where('model','App/Models/Invoice');
        })->with('pdf')->where('id',$request->invoice_id)->first();
   
        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.dashboard.invoice.payment',compact('invoice'));
            return $pdf->download('payment.pdf');
        return redirect()->back();
    }
}
