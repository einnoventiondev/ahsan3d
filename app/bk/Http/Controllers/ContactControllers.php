<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts = ContactUs::all();
        return view('pages.admin.dashboard.contactUs.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.contactUs.create');
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
            'location_name'=>'required',
            'location_map'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'heading' => 'required',
            'subheading' => 'required',
            'body_text' => 'required',
        ]);
        ContactUs::create([
            'location_name'=>$request->location_name,
            'location_map'=>$request->location_map,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,

            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'body_text' => $request->body_text,
        ]);
        //dd($request->all());
        return redirect()->route('contact.index');

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

        $contacts = ContactUs::find($id);
        return view('pages.admin.dashboard.contactUs.edit', compact('contacts'));
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
            'location_name'=>'required',
            'location_map'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
            'heading' => 'required',
            'subheading' => 'required',
            'body_text' => 'required',
        ]);

        ContactUs::find($id)->update([
            'location_name'=>$request->location_name,
            'location_map'=>$request->location_map,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'body_text' => $request->body_text,
        ]);

        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactUs::find($id)->delete();
        return redirect()->route('contact.index');
    }
}
