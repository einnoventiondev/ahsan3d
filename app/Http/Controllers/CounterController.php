<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter = Counter::all();
        return view('pages.admin.dashboard.counter.index', compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.dashboard.counter.create');
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
            'project' => 'required',
            'designer' => 'required',
            'client' => 'required',
        ]);
        Counter::create([
            'project' => $request->project,
            'designer' => $request->designer,
            'client' => $request->client,

        ]);
        return redirect()->route('counter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter = Counter::find($id);
        return view('pages.admin.dashboard.counter.edit', compact('counter'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'project' => 'required',
            'designer' => 'required',
            'client' => 'required',
        ]);

        Counter::find($id)->update([
            'project' => $request->project,
            'designer' => $request->designer,
            'client' => $request->client,
        ]);

        return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Counter::find($id)->delete();
        return redirect()->route('counter.index');
    }
}
