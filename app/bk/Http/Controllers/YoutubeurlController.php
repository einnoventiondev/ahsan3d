<?php

namespace App\Http\Controllers;

use App\Models\Youtubeurl;
use Illuminate\Http\Request;

class YoutubeurlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $youtubeurls = Youtubeurl::all();
        return view('pages.admin.dashboard.youtubeurl.index', compact('youtubeurls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.youtubeurl.create');
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
            'youtubeurl' => 'required',
            'youtubeurlpublic' => 'required',

        ]);
        Youtubeurl::create([
            'youtubeurl' => $request->youtubeurl,
            'youtubeurlpublic' => $request->youtubeurlpublic,
        ]);
        return redirect()->route('youtubeurl.index');
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
        $youtubeurls = Youtubeurl::find($id);
        return view('pages.admin.dashboard.youtubeurl.edit', compact('youtubeurls'));
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
            'youtubeurl' => 'required',
            'youtubeurlpublic' => 'required',

        ]);
        Youtubeurl::find($id)->update([
            'youtubeurl' => $request->youtubeurl,
            'youtubeurlpublic' => $request->youtubeurlpublic,
        ]);
        return redirect()->route('youtubeurl.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Youtubeurl::find($id)->delete();
        return redirect()->route('youtubeurl.index');
    }
}
