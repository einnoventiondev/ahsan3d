<?php

namespace App\Http\Controllers;

use App\Models\ImageSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = ImageSlider::all();
        return view('pages.admin.dashboard.ImageSlide.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.ImageSlide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'images'      => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = $request->images->getClientOriginalName();
        $request->images->move(public_path('upload/'), $image);
        $pathimage ='upload/'.$image;
        // $imageName        = time().'.'.$request->images->extension();  
        // $request->images->storeAs('upload',$imageName);
        // $image            = $request->images->move(storage_path('app/upload/'), $imageName);
        // $filePath         =  'upload/'.$imageName;
        $sliders          =  ImageSlider::create([
            'speed'       => $request->speed,
            'number'      => $request->number,
            'heading'     => $request->heading,
            'sub_heading' => $request->sub_heading,
            'body_text'   => $request->body_text,
            'images'      => $pathimage,
        ]);
       if($sliders){
            return redirect()->route('image.index');
       }

        
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
        $images = ImageSlider::find($id);
        return view('pages.admin.dashboard.ImageSlide.edit', compact('images'));
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
        //dd($request->all());
        $request->validate([
            'speed' => 'required',
            'number' => 'required',
            'heading' => 'required',
            'sub_heading' => 'required',
            'body_text' => 'required',
            // 'images' => 'required',
            // 'images2' => 'required',
            // 'images3' => 'required',
            // 'images4' => 'required',
        ]);
        // if (isset($request->images) && !empty($request->images)) {
        //     $image = Storage::disk('public')->put('upload/', $request->images);
        // } else {
        //     $images = null;
        // }
        // if (isset($request->images2) && !empty($request->images2)) {
        //     $image1 = Storage::disk('public')->put('upload/', $request->images2);
        // } else {
        //     $images2 = null;
        // }
        // if (isset($request->images3) && !empty($request->images3)) {
        //     $image2 = Storage::disk('public')->put('upload/', $request->images3);
        // } else {
        //     $images3 = null;
        // }
        // if (isset($request->images4) && !empty($request->images4)) {
        //     $image3 = Storage::disk('public')->put('upload/', $request->images4);
        // } else {
        //     $images4 = null;
        // }
        ImageSlider::find($id)->update([
            'speed' => $request->speed,
            'number' => $request->number,
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'body_text' => $request->body_text,
            // 'images'=>$image,
            // 'images2'=>$image1,
            // 'images3'=>$image2,
            // 'images4'=>$image3,
        ]);
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageSlider::find($id)->delete();
        return redirect()->route('image.index');
    }
    public function view($id)
    {
        $image= ImageSlider::find($id);
        return view('pages.admin.dashboard.ImageSlide.view',compact('image'));
    }
}
