<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all();
        return view('pages.admin.dashboard.title.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.dashboard.title.create');
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
            'title' => 'required',
            'discription' => 'required',

        ]);
        Title::create([
            'title' => $request->title,
            'discription' => $request->discription,
        ]);
        return redirect()->route('title.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
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
        $title = Title::find($id);
        return view('pages.admin.dashboard.title.edit', compact('title'));
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
            'title' => 'required',
            'discription' => 'required',
        ]);

        Title::find($id)->update([
            'title' => $request->title,
            'discription' => $request->discription,
        ]);

        return redirect()->route('title.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Title::find($id)->delete();
        return redirect()->route('title.index');
    }
}
