<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\PublicNotification;
use App\Models\User;

class PublicServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publics = PublicService::orderBy('id', 'DESC')->get();
        return view('pages.admin.dashboard.publicservice.index', compact('publics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.publicservice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->myfile) && !empty($request->myfile)) {
            $myfile = $request->myfile->getClientOriginalName();
            $images = $request->myfile->move(public_path('upload/'), $request->myfile);
            $path = 'upload/'.$myfile;
            // $images = Storage::disk('public')->put('upload/', $request->myfile);
        } else {
            $path = null;
        }
        $pub = PublicService::create([
            'status' => 0,
            'user_id' => Auth::id(),
            'full_name' => $request->name,
            'phone_num' => $request->phone,
            'email' => $request->email,
            'specialization' => $request->spec,
            'gender' => $request->gender,
            'print_type' => $request->pr_type,
            'print_color' => $request->pr_clr,
            'print_resolution' => $request->pr_res,
            'print_img' => $path,
        ]);
        
        $users = User::where('role','admin')->first();
        $users->notify(new PublicNotification($users,$pub));
        $user = User::find(Auth::user()->id);
        $details = [
            'title' =>$user->name,
            'id' => $pub->id,
            'subject'=>"#'".$pub->id."'جاري تنفيذ طلب رقم",
            'from' => 'contact@einnovention.co.uk',
            'adminSubject' => "#'".$pub->id."' تم استلام طلب رقم ",
            'adminBody' => "#'".$pub->id."' تم استلام طلبكم رقم ",
            'adminBody2' => 'وسيتم التواصل بكم قريباً',
            'userBody' => "'".$pub->id."'جاري العمل على طلبكم رقم ",
            'thanks' => 'شكراً جزيلاً',
        ];
        \Mail::to($user->email)->send(new \App\Mail\MedicalMail($details));
        return redirect()->route('home')->with('error_code', 6);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = PublicService::find($id);
        $order->update([
            'seen' => 1,
        ]);
        $notification = auth()->user()->notifications()->where('type', 'App\Notifications\PublicNotification')->latest()->first();
        if ($notification) {
            $notification->markAsRead();
        }
        return view('pages.admin.dashboard.publicservice.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publics = PublicService::find($id);
        return view('pages.admin.dashboard.publicservice.edit', compact('publics'));
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
            'full_name' => 'required',
            'phone_num' => 'required',
            'email' => 'required',
            'specialization' => 'required',
            'gender' => 'required',
            'print_type' => 'required',
            'print_color' => 'required',
            'print_resolution' => 'required',
            'print_img' => 'required',
        ]);
        if (isset($request->print_img) && !empty($request->print_img)) {
            $print_img =  $request->print_img->getClientOriginalName();
            $image = $request->print_img->move(public_path('upload/'), $request->print_img);
            $path1 = 'upload/'.$print_img;
            // $image = Storage::disk('public')->put('upload/', $request->print_img);
        } else {
            $path1 = null;
        }
        
        PublicService::find($id)->update([
            'full_name' => $request->full_name,
            'phone_num' => $request->phone_num,
            'email' => $request->email,
            'specialization' => $request->specialization,
            'gender' => $request->gender,
            'print_type' => $request->print_type,
            'print_color' => $request->print_color,
            'print_resolution' => $request->print_resolution,
            'print_img' => $path1,
        ]);
        return redirect()->route('public.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PublicService::find($id)->delete();
        return redirect()->route('public.index');
    }
}
