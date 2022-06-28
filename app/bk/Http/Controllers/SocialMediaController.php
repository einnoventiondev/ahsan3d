<?php

namespace App\Http\Controllers;

use Jorenvh\Share\Share;
use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $socials = Socialmedia::all();
        return view('pages.admin.dashboard.socialmedia.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.socialmedia.create');
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
        $socials = \Share::page(
            'https://www.abc.com/laravel-custom-foreign-key-name-example',
            'Laravel Custom Foreign Key Name Example',
        )
            ->facebook()
            ->twitter()

            ->whatsapp();
        Socialmedia::create([
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
        ]);
        return redirect()->route('social.index');
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
        $socials = Socialmedia::find($id);
        return view('pages.admin.dashboard.socialmedia.edit', compact('socials'));
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
        Socialmedia::find($id)->update([
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
        ]);
        return redirect()->route('social.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Socialmedia::find($id)->delete();
        return redirect()->route('social.index');
    }
}
