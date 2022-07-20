<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\Medical;
use App\Models\Order;
use App\Models\TempUpdateProfile;
use App\Models\User;
use App\Models\PublicService;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role','user')->get();
        return view('pages.admin.dashboard.users.index', compact('users'));
    }
    public function userpayment(Request $request){
       $user=User::where('id',Auth::user()->id)->first();
       $user->wallet += $request->payment;
       $user->update();
       return redirect()->route('/');
    }
    public function userUpdate($id)
    {
       $data = User::find($id);
       return view('pages.admin.dashboard.users.user_update',compact('data'));
    }
    public function sendemail(){
        return view('pages.user.sendemail');
    }
    public function forgotview($token){
       $token=User::where('token',$token)->first();
   return view('pages.user.resetpassword',compact('token'));
    }
    public function changepassword(Request $request){
        $user=User::where('email',$request->email)->first();
        if($request->password==$request->confirm_password){
            $user->password=Hash::make($request->password);
            $user->save();
            if($user){
                Alert::success('Congrats', 'Password Generate Succeussfully');
                return redirect()->route('/');
            }else{
                Alert::error('Opps!', 'Password Not generate');
                return back();
            }
        }
        else{
            Alert::error('Opps!', 'Password & Confirm Password Does not Match,So enter again password');
         return back();
        }
    }
    public function usersendemail(Request $request){
        $user=User::where('email',$request->email)->first();
        $user->token=$request->_token;
        $details=$request->_token;
        $user->save();
        if($user){

            Alert::success('Congrats', 'You have requested to change your password,
            Soon, you will receive an email to reset your password on your registered email address');
        }
        else{
            Alert::error('Opps!', 'Sorry! email Not send');
        }
        Mail::to($request->email)->send(new \App\Mail\ForgotPassword($details));

        return back();

    }
    public function userUpdate1(Request $request)
    {
            $user = User::where('id',$request->hidden)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
       return redirect()->route('user.list');
    }

    public function userDelete($id)
    {
       $data = User::find($id);
       $data->delete();
       return redirect()->route('user.list');
    }

   public function userView($id)
    {
        $designer_request=Order::where('user_id',$id)->count();
        $medical_request=Medical::where('user_id',$id)->count();
        $public_request=PublicService::where('user_id',$id)->count();
       $data = User::find($id);
       return view('pages.admin.dashboard.users.user_view',compact('data','designer_request','medical_request','public_request'));
    }


    public function designer()
    {
        $users = User::where('role','designer')->get();
        return view('pages.admin.dashboard.users.index', compact('users'));
    }
    public function approval(Request $request,$id)
    {

        User::find($id)->update([
            'approve' => $request->approve,
        ]);
        if($request->approve==1){
            return 1;
        }else{
            return 0;
        }
    }
    public function identity(Request $request)
    {

        $folderPath = public_path('upload/');

	    $image_parts = explode(";base64,", $request->signed);

	    $image_type_aux = explode("image/", $image_parts[0]);

	    $image_type = $image_type_aux[1];

	    $image_base64 = base64_decode($image_parts[1]);

	    $file = $folderPath . uniqid() . '.'.$image_type;

        $identity = Identity::create([
            'invoice_id'=>$request->invoice_id,
            'user_id'=>$request->user_id,
            'signature'=>$file,
            'ip'=>$request->ip()
        ]);

	    file_put_contents($file, $image_base64);

        return redirect()->back();

    }
        public function profileUpdate1(Request $request)
    {

    $tempProfile = TempUpdateProfile::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'user_id'=>$request->id,
        'printing_technology'=>$request->printing_technology,
        'software_type'=>$request->software_type,
    ]);
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'subject'=>'update profile',
        'user_id'=>$request->id,
        'printing_technology'=>$request->printing_technology,
        'software_type'=>$request->software_type,
    ];
    $admins = User::where('role','admin')->get();
        foreach ($admins as $key => $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\UpdateUser($details));
        }
        return redirect()->back();
    }

     public function profileUpdate(Request $request)
    {
        if ($request->file('image')) {
            $imagefile = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('/orders', ['disk' =>   'public']);

        }
        else
        {
            $path = null;
        }
        if(Auth::user()->role == 'designer')
        {
    $designer_update = User::where('id',Auth::user()->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'field' => $request->field,
        'profile' => $path,
        'password' => Hash::make($request->password),
    ]);
    $details = [
        'user_id'=> Auth::user()->id,
        'printing_technology'=>$request->printing_technology,
        'software_type'=>$request->software_type,
    ];
    return redirect()->back();
}
else{
      $user_update = User::where('id',Auth::user()->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'field' => $request->field,
        'profile' => $path,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->back();
}

    }
public function hello(Request $request)
{
    return "hello";
}
    public function profileApprove($id)
    {

            // dd($id);
            $user = TempUpdateProfile::where('user_id',$id)->get();
            $user_exist = UserDetail::where('user_id',$id)->exists();
            if($user_exist){
              UserDetail::where('user_id',$id)->update([
                    'user_id'=>$id,
                    'printing_technology'=>'$user->printing_technology',
                    'software_type'=>'$user->software_type'
                ]);

            }else{
                UserDetail::create([
                    'user_id'=>$id,
                    'printing_technology'=>'$user->printing_technology',
                    'software_type'=>'$user->software_type'
                ]);
            }


        return 'approved';
    }
    public function profileList()
    {
        $users = TempUpdateProfile::with('userDetail')->get();
        return view('pages.admin.dashboard.ProfileUpdate.index', compact('users'));
    }
    public function userByOrder($id)
    {
        $user = Medical::with('user')->find($id);
        return $user->user;
    }

	 public function userByOrder_pub($id)
    {
        $user = PublicService::with('user')->find($id);

        return $user->user;

    }
}
