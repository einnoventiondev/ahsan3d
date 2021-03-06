<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medical;
use App\Models\PdfItem;
use App\Models\Perposal;
use App\Mail\ProposelMail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ProposelNotification;

class PerposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Perposal::with('user')->whereHas('pdf',function($q) {
            $q->where('model','App/Models/Perposal');
        })->with('pdf')->get();
        $users = User::all();
        $medicals = Medical::all();
        return view('pages.admin.dashboard.perposal.index', compact('invoices','users','medicals'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Medical::all();
        return view('pages.admin.dashboard.perposal.create', compact('orders'));
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
        $perposals = Perposal::create([
            'phone'=>$request->phone,
            'status'=>$request->status,
            'assigned'=>$request->assigned,
            'city'=>$request->city,
            'state'=>$request->state,
            'country'=>$request->country,
            'zip_code'=>$request->zip_code,
            'order_id' => $request->order_id,
            'user_id' => $user->id,
            'comments' =>$request->comments,
            'image'=> $pathimage,
            'address' =>$request->address,
            'validtill' => $request->validtill,
            'date' => $request->date,
            'subject' => $request->subject,
        ]);

        foreach ($request->title as $key => $title) {
            $pdf_item = new PdfItem;
                $pdf_item->model = 'App/Models/Perposal';
                $pdf_item->pdf_id = $perposals->id;
                $pdf_item->title = $title;
                $pdf_item->description = $request->description[$key];
                $pdf_item->quantity = $request->qty[$key];
                $pdf_item->rate = $request->rate[$key];
                $pdf_item->tax = $request->tax[$key];
            $pdf_item->save();
        }

          $details = [
            'subject' =>"'".$med->id ."' ???? ?????????? ???????????? ??????",
            'id' =>$med->id,
            'name' =>$user->name ,
            'body1' => "'".$med->id ."' ???????? ?????? ???????????????? ?????? ?????? ?????????? ?????????? ?????? ",
            'body2'=> "'".$med->request ."'?????? ???? ?????????? ???????????????? ??????????",
            'body3'=>'?????????? ?????????? ?????????? ?????? ???????????? ????????????:',
            'linkText' => 'Link is being here to go to website to pay the invoice',
            'thanks' => '?????????? ????????????',
            'orderNumber' =>$med->id ,
        ];
        $invoice = Perposal::where('id',$perposals->id)->get()->first();
        $username = User::find($invoice->user_id);
        $user = User::find($invoice->user_id);

        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user'));

        \Mail::send('emails.invoice', $details, function($message)use($details,$user, $pdf) {
            $message->to($user->email)
                    ->subject($details["subject"])
                    ->attachData($pdf->output(), "Propsal.pdf");
        });
        // \Mail::to($user->email)->send(new \App\Mail\ProposelMail($details));
        return redirect()->route('perposal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Perposal::find($id);
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
        $invoice = Perposal::find($id);
        return view('pages.admin.dashboard.perposal.edit', compact('invoice'));
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
        Perposal::find($id)->update([
            'tax' => $request->tax,
            'price_model' => $request->price_model,
            'price_design' => $request->price_design,
            'qty_model' => $request->qty_model,
            'qty_design' => $request->qty_design,
            'validtill' => $request->validtill,
            'date' => $request->date,
        ]);
        return redirect()->route('perposal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perposal::find($id)->delete();
        return redirect()->route('perposal.index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfProposal($id)
    {
        $invoice = Perposal::find($id);
        $username = User::find($invoice->user_id);
        $user = User::find($invoice->designer_id);


        // if($request->has('download')){
            $pdf = PDF::loadView('pages.admin.invoice',compact('invoice', 'user','username'));
            return $pdf->download('proposel.pdf');
        // }
        // return  $pdf->download('pages.admin.invoice');
    }
    public function perposalAccept(Request $request,$id)
    {

        Perposal::find($id)->update([
            'assigned' => $request->approve,
        ]);
        if($request->approve==1){
            return 1;
        }else{
            return 0;
        }
    }
    public function perposalAction(Request $request,$id)
    {

        $invoice = Perposal::where('order_id',$id)->first();
        $user = User::find($invoice->user_id);
        return view('pages.user.perposalAction', compact('invoice', 'user'));
    }
}
