<?php

namespace App\Http\Controllers;
use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{/**
     * Display a listing of the resourceprinting
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $softwares = Software::all();
        return view('pages.admin.dashboard.softwareuse.index', compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.softwareuse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $request->validate([
            'name' => 'required',

        ]);

        $software= new Software;
        $software->name=$request->name;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/software/', $filename);
            $software->images=$filename;
        }
// dd($software);
       $software->save();
        return redirect()->route('software_type.index');
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
        $software = Software::find($id);
        return view('pages.admin.dashboard.softwareuse.edit', compact('software'));
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
       $software= Software::find($id);
       $software->name=$request->name;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/software/', $filename);
            $software->images=$filename;
        }
       $software->save();
        return redirect()->route('software_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Software::find($id)->delete();
        return redirect()->route('software_type.index');
    }
}
