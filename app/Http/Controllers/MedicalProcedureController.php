<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalProcedure;

class MedicalProcedureController extends Controller
{/**
     * Display a listing of the resourceprinting
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $procedures = MedicalProcedure::all();
        return view('pages.admin.dashboard.medical_procedure.index', compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.medical_procedure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'procedure' => 'required',

        ]);
        MedicalProcedure::create([
            'medical_procedure' => $request->procedure,

        ]);
        return redirect()->route('procedure.index');
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
        $procedure = MedicalProcedure::find($id);
        return view('pages.admin.dashboard.medical_procedure.edit', compact('procedure'));
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
        MedicalProcedure::find($id)->update([
            'medical_procedure' => $request->procedure,

        ]);
        return redirect()->route('procedure.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MedicalProcedure::find($id)->delete();
        return redirect()->route('procedure.index');
    }
}
