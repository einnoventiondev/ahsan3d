<?php

namespace App\Http\Controllers;

use App\Models\SideLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SideImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sides = SideLogo::all();
        return view('pages.admin.dashboard.SideLogo.index', compact('sides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.SideLogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $side= new SideLogo();
        $request->validate([
            'side_image' => 'required',
			'heading'=> 'required',
			'subheading'=> 'required',

        ]);
        if($request->hasfile('side_image')){
            $file= $request->file('side_image');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $side->side_image=$filename;
        }
            $side->heading=$request->heading;
            $side->subheading=$request->subheading;
            $side->save();
        return redirect()->route('side.index');
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
        $sides = SideLogo::find($id);
        return view('pages.admin.dashboard.SideLogo.edit', compact('sides'));
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
        $side=  SideLogo::find($id);
        $request->validate([
            'side_image' => 'required',
			'heading'=> 'required',
			'subheading'=> 'required',

        ]);
        if($request->hasfile('side_image')){
            $file= $request->file('side_image');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $side->side_image=$filename;
        }
            $side->heading=$request->heading;
            $side->subheading=$request->subheading;
            $side->save();
        return redirect()->route('side.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SideLogo::find($id)->delete();
        return redirect()->route('side.index');
    }
}
