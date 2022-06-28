<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('pages.admin.dashboard.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inactive' => 'required',
            'active' => 'required',
            'log' => 'required',
            'team_member' => 'required',
            'proposal' => 'required',
            'invoice' => 'required',
            'payment' => 'required',
            'requests' => 'required',
        ]);
        if (isset($request->proposal) && !empty($request->proposal)) {
            $proposal = $request->proposal->getClientOriginalName();
            $image = $request->proposal->move(public_path('upload/'), $proposal);
            // $image = Storage::disk('public')->put('upload/', $request->proposal);
            $pathproposal ='upload/'.$proposal;
        } else {
            $pathproposal =null;
            $image = null;
        }
        if (isset($request->invoice) && !empty($request->invoice)) {
            $invoice = $request->invoice->getClientOriginalName();
            $image1 = $request->invoice->move(public_path('upload/'), $invoice);
            // $image1 = Storage::disk('public')->put('upload/', $request->invoice);
            $pathinvoice ='upload/'.$invoice;
        } else {
            $pathinvoice =null;
            $image1 = null;
        }
        // dd($request->all());
      
        
        Client::create([
            'inactive' => $request->inactive,
            'active' => $request->active,
            'log' => $request->log,
            'team_member' => $request->team_member,
            'proposal' =>  $pathproposal,
            'invoice' => $pathinvoice,
            'payment' => $request->payment,
            'request' => $request->requests,
        ]);
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('pages.admin.dashboard.clients.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'inactive' => 'required',
            'active' => 'required',
            'log' => 'required',
            'team_member' => 'required',
            // 'proposal' => 'required',
            // 'invoice' => 'required',
            'payment' => 'required',
            'requests' => 'required',
        ]);

        Client::find($id)->update([
            'inactive' => $request->inactive,
            'active' => $request->active,
            'log' => $request->log,
            'team_member' => $request->team_member,
            'proposal' => $request->proposal,
            // 'invoice' => $request->invoice,
            // 'payment' => $request->payment,
            'request' => $request->requests,
        ]);

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('client.index');
    }
}
