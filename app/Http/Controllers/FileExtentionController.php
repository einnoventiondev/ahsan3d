<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileExtention;

class FileExtentionController extends Controller
{
    /**
     * Display a listing of the resourceprinting
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extentions = FileExtention::all();
        return view('pages.admin.dashboard.file_extention.index', compact('extentions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.file_extention.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $extention= new FileExtention;

        $extention->file_extention=json_encode($request->file_extention);
        $extention->save();
        return redirect()->route('extention.index');
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
        $extention = FileExtention::find($id);
        
        return view('pages.admin.dashboard.file_extention.edit', compact('extention'));
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
        $extention=FileExtention::find($id);
        $extention->file_extention=json_encode($request->file_extention);
        $extention->save();
        return redirect()->route('extention.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FileExtention::find($id)->delete();
        return redirect()->route('extention.index');
    }
}
