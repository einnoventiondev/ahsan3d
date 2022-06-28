<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tech = Tech::all();
        return view('pages.admin.dashboard.tech.index', compact('tech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.dashboard.tech.create');
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
        Tech::create([
            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'bodytext' => $request->bodytext,
        ]);
        return redirect()->route('tech.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function show(Tech $tech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tech = Tech::find($id);
        return view('pages.admin.dashboard.tech.edit', compact('tech'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'heading' => 'required',
            'subheading' => 'required',
            'bodytext' => 'required',
        ]);

        Tech::find($id)->update([
            'heading' => $request->heading,
            'subheading' => $request->subheading,
            'bodytext' => $request->bodytext,
        ]);

        return redirect()->route('tech.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tech::find($id)->delete();
        return redirect()->route('tech.index');
    }
}
