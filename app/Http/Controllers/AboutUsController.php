<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutUs::all();
        return view('pages.admin.dashboard.aboutus.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.dashboard.aboutus.create');
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
            'heading' => 'required',
            'subheading' => 'required',
            'bodytext' => 'required',
        ]);
        AboutUs::create([
            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'bodytext' => $request->bodytext,
        ]);
        return redirect()->route('about.index');
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
        $abouts = AboutUs::find($id);
        return view('pages.admin.dashboard.aboutus.edit', compact('abouts'));
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
            'heading' => 'required',
            'subheading' => 'required',
            'bodytext' => 'required',
        ]);

        AboutUs::find($id)->update([
            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'bodytext' => $request->bodytext,
        ]);

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutUs::find($id)->delete();
        return redirect()->route('about.index');
    }
}
