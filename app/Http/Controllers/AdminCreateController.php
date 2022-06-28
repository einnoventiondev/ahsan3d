<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role' , 'admin')->get();
        return view('pages.admin.dashboard.admin_create.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dashboard.admin_create.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user=new User;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash:: make($request->password);
        if($request->hasfile('profile')){
            $file= $request->file('profile');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/profile/', $filename);
            $user->profile=$filename;
        }
        $user->save();
        $user->roles()->attach(2);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('pages.admin.dashboard.admin_create.view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('pages.admin.dashboard.admin_create.edit',compact('user'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash:: make($request->password);
        if($request->hasfile('profile')){
            $destination='uploads/profile/'.$user->file;
            if(File::exists($destination)){
               File::delete($destination);}
            $file= $request->file('profile');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/profile/', $filename);
            $user->profile=$filename;
        }
        $user->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return back();
    }
    // public function profile_edit($id){
    //     $user=User::find($id);
    //     return view('admin.admin_create.change_profile.edit_profile',compact('user'));
    // }
    // public function profile_update(Request $request,$id){

    //     $user= User::find($id);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash:: make($request->password);
    //     if($request->hasfile('profile')){
    //         $destination='uploads/profile/'.$user->file;
    //         if(File::exists($destination)){
    //            File::delete($destination);}
    //         $file= $request->file('profile');
    //         $extenstion= $file->getClientOriginalExtension();
    //         $filename=time().'.'.$extenstion;
    //         $file->move('uploads/profile/', $filename);
    //         $user->profile_image=$filename;
    //     }
    //     $user->save();
    //     return redirect()->route('admin.dashboard');
    // }
}
