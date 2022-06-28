<?php

namespace App\Http\Controllers;

use App\Models\Mapimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MapimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Mapimage::all();
        return view('pages.admin.dashboard.map.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.map.create');
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
            'map_image' => 'required',

        ]);
        if (isset($request->map_image) && !empty($request->map_image)) {
            $map_image = $request->map_image->getClientOriginalName();
            $image1 = $request->map_image->move(public_path('upload/'), $map_image);
            $path ='upload/'.$map_image;
            // $image1 = Storage::disk('public')->put('upload/', $request->map_image);
        } else {
            $path = null;
            $image1 = null;
        }
 
        Mapimage::create([
            'map_image' => $path,
        ]);
        return redirect()->route('map.index');
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
        $maps = Mapimage::find($id);
        return view('pages.admin.dashboard.map.edit', compact('maps'));
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
        if (isset($request->map_image) && !empty($request->map_image)) {
            $map_image =  $request->map_image->getClientOriginalName();
            $profile = $request->map_image->move(public_path('app/upload/'), $request->map_image);
            $path = 'upload/'.$request->map_image;
            // $profile = Storage::disk('public')->put('upload/', $request->map_image);

            $input['map_image'] = "$path";
        } else {
            $path = null;
            unset($input['map_image']);
        }
        Mapimage::find($id)->update($input);
        return redirect()->route('map.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapimage::find($id)->delete();
        return redirect()->route('map.index');
    }
}
