<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        return view('pages.admin.dashboard.Logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.Logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $logo=new Logo;

        // return $request->logo8;
        $request->validate([
            'logo1' => 'required',
            'logo2' => 'required',

            'logo3' => 'required',

            'logo4' => 'required',

            'logo5' => 'required',

            'logo6' => 'required',


            'logo7' => 'required',


            'logo8' => 'required',

        ]);
        if($request->hasfile('logo8'))
         {

            foreach($request->file('logo8') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('upload/', $name);
                $data[] = $name;
            }
            $image8=json_encode($data);
         }

        if($request->hasfile('logo1')){
            $file= $request->file('logo1');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo1=$filename;
        }
        if($request->hasfile('logo2')){
            $file= $request->file('logo2');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo2=$filename;
        }
        if($request->hasfile('logo3')){
            $file= $request->file('logo3');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo3=$filename;
        }
        if($request->hasfile('logo4')){
            $file= $request->file('logo4');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo4=$filename;
        }
        if($request->hasfile('logo5')){
            $file= $request->file('logo5');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo5=$filename;
        }
        if($request->hasfile('logo6')){
            $file= $request->file('logo6');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo6=$filename;
        }
        if($request->hasfile('logo7')){
            $file= $request->file('logo7');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo7=$filename;
        }
        $logo->logo8=$image8;
         $logo->save();
        return redirect()->route('logo.index');
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
        $logos = Logo::find($id);
        return view('pages.admin.dashboard.Logo.edit', compact('logos'));
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

        $logo= Logo::find($id);

        // return $request->logo8;

        if($request->hasfile('logo8'))
         {

            foreach($request->file('logo8') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('upload/', $name);
                $data[] = $name;
            }
            $image8=json_encode($data);
         }

        if($request->hasfile('logo1')){
            $file= $request->file('logo1');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo1=$filename;
        }
        if($request->hasfile('logo2')){
            $file= $request->file('logo2');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo2=$filename;
        }
        if($request->hasfile('logo3')){
            $file= $request->file('logo3');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo3=$filename;
        }
        if($request->hasfile('logo4')){
            $file= $request->file('logo4');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo4=$filename;
        }
        if($request->hasfile('logo5')){
            $file= $request->file('logo5');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo5=$filename;
        }
        if($request->hasfile('logo6')){
            $file= $request->file('logo6');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo6=$filename;
        }
        if($request->hasfile('logo7')){
            $file= $request->file('logo7');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('upload/', $filename);
            $logo->logo7=$filename;
        }
        $logo->logo8=$image8;
         $logo->save();
        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Logo::find($id)->delete();
        return redirect()->route('logo.index');
    }
    public function logoDelete1($id){
        $logo=Logo::find($id);
        $logo->logo1=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete2($id){
        $logo=Logo::find($id);
        $logo->logo2=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete3($id){
        $logo=Logo::find($id);
        $logo->logo3=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete4($id){
        $logo=Logo::find($id);
        $logo->logo4=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete5($id){
        $logo=Logo::find($id);
        $logo->logo5=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete6($id){
        $logo=Logo::find($id);
        $logo->logo6=Null;
        $logo->update();
        return redirect()->back();
    }
    public function logoDelete7($id){
        $logo=Logo::find($id);
        $logo->logo7=Null;
        $logo->update();
        return redirect()->back();
    }
}
