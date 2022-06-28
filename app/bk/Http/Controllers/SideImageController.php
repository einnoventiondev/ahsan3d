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
        $request->validate([
            'side_image' => 'required',
			'heading'=> 'required',
			'subheading'=> 'required',
			
        ]);
        if (isset($request->side_image) && !empty($request->side_image)) {
            $images = $request->side_image->move(public_path('upload/'), $request->side_image);
            $image1 = 'upload/'.$images;
            // $image1 = Storage::disk('public')->put('upload/', $request->side_image);
        } else {
            $image1 = null;
        }

        SideLogo::create([
            'side_image' => $image1,
			'heading'=>$request->heading,
			'subheading'=>$request->subheading,

        ]);
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
        $input = $request->all();
        if (isset($request->side_image) && !empty($request->side_image)) {
            $fprofile = $request->side_image->getClientOriginalName();

            $request->side_image->move(public_path('upload/'), $fprofile);
            // $profile = Storage::disk('public')->put('upload/', $request->side_image);
            $profile ='upload/'.$fprofile;
            $input['side_image'] = "$profile";
        } else {
            unset($input['side_image']);
        }
        SideLogo::find($id)->update($input);
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
