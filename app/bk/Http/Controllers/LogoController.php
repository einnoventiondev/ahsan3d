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
        // dd($request->all());
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
        if (isset($request->logo1) && !empty($request->logo1)) {
            $logo1 = $request->logo1->getClientOriginalName();
            $image1 = $request->logo1->move(public_path('upload/'), $logo1);
            $path1 ='upload/'.$logo1;
            // $image1 = Storage::disk('public')->put('upload/', $request->logo1);
        } else {
            $path1 = null;
            $image1 = null;
        }
        if (isset($request->logo2) && !empty($request->logo2)) {
            $logo2 = $request->logo2->getClientOriginalName();
            $image2 = $request->logo2->move(public_path('upload/'), $logo2);
            $path2 ='upload/'.$logo2;
            // $image2 = Storage::disk('public')->put('upload/', $request->logo2);
        } else {
            $path2 = null;
            $image2 = null;
        }
        if (isset($request->logo3) && !empty($request->logo3)) {
            $logo3 = $request->logo3->getClientOriginalName();
            $image3 = $request->logo3->move(public_path('upload/'), $logo3);
            $path3 ='upload/'.$logo3;
            // $image3 = Storage::disk('public')->put('upload/', $request->logo3);
        } else {
            $path3 = null;
            $image3 = null;
        }
        if (isset($request->logo4) && !empty($request->logo4)) {
            $logo4 = $request->logo4->getClientOriginalName();
            $image4 = $request->logo4->move(public_path('upload/'), $logo4);
            $path4 ='upload/'.$logo4;
            // $image4 = Storage::disk('public')->put('upload/', $request->logo4);
        } else {
            $path4 = null;
            $image4 = null;
        }
        if (isset($request->logo5) && !empty($request->logo5)) {
            $logo5 = $request->logo5->getClientOriginalName();
            $image5 = $request->logo5->move(public_path('upload/'), $logo5);
            $path5 ='upload/'.$logo5;
            // $image5 = Storage::disk('public')->put('upload/', $request->logo5);
        } else {
            $path5 = null;
            $image5 = null;
        }
        if (isset($request->logo6) && !empty($request->logo6)) {
            $logo6 = $request->logo6->getClientOriginalName();
            $image6 = $request->logo6->move(public_path('upload/'), $logo6);
            $path6 ='upload/'.$logo6;
            // $image6 = Storage::disk('public')->put('upload/', $request->logo6);
        } else {
            $path6 = null;
            $image6 = null;
        }

        if (isset($request->logo7) && !empty($request->logo7)) {
            $logo7 = $request->logo7->getClientOriginalName();
            $image7 = $request->logo7->move(public_path('upload/'), $logo7);
            $path7 ='upload/'.$logo7;
            // $image7 = Storage::disk('public')->put('upload/', $request->logo7);
        } else {
            $path7=null;
            $image7 = null;
        }


        if (isset($request->logo8) && !empty($request->logo8)) {
            $logo8 = $request->logo8->getClientOriginalName();  
            $image8 = $request->logo8->move(public_path('upload/'), $logo8);
            $path8 ='upload/'.$logo8;
            // $image8 = Storage::disk('public')->put('upload/', $request->logo8);
        } else {
            $path8 = null;
            $image8 = null;
        }


        Logo::create([
            'logo1' => $path1,
            'logo2' => $path2,
            'logo3' => $path3,
            'logo4' => $path4,
            'logo5' => $path5,
            'logo6' => $path6,
            'logo7' => $path7,
            'logo8' => $path8,

        ]);
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
        // $request->validate([
        //     'logo1' => 'required',
        //     'logo2' => 'required',

        //     'logo3' => 'required',

        //     'logo4' => 'required',

        //     'logo5' => 'required',

        // ]);
        //dd($request->all());
        // if (isset($request->logo1) && !empty($request->logo1)) {
        //     $image1 = Storage::disk('public')->put('upload/', $request->logo1);
        // } else {
        //     $logo1 = null;
        // }
        // if (isset($request->logo2) && !empty($request->logo2)) {
        //     $image2 = Storage::disk('public')->put('upload/', $request->logo2);
        // } else {
        //     $logo2 = null;
        // }
        // if (isset($request->logo3) && !empty($request->logo3)) {
        //     $image3 = Storage::disk('public')->put('upload/', $request->logo3);
        // } else {
        //     $logo3 = null;
        // }
        // if (isset($request->logo4) && !empty($request->logo4)) {
        //     $image4 = Storage::disk('public')->put('upload/', $request->logo4);
        // } else {
        //     $logo4 = null;
        // }
        // if (isset($request->logo5) && !empty($request->logo5)) {
        //     $image5 = Storage::disk('public')->put('upload/', $request->logo5);
        // } else {
        //     $logo5 = null;
        // }

        // Logo::find($id)->update([
        //     'logo1' => $image1,
        //     'logo2' => $image2,
        //     'logo3' => $image3,
        //     'logo4' => $image4,
        //     'logo5' => $image5,
        // ]);
        // return redirect()->route('logo.index');

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
}
