<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medical;
use Illuminate\Http\Request;
use App\Models\PublicService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Notifications\MedicalNotification;
use Symfony\Component\Console\Question\Question;
use App\Models\Feedback;
use App\Mail\MedicalMail;
use App\Mail\ProposelMail;
use App\Mail\InvoiceMail;
use App\Models\Invoice;

class MedicalController extends Controller
{
    public function store(Request $request)
    {
 
        if ($request->hasFile('myfile')) {
            $myfile =  $request->myfile->getClientOriginalName();
            $request->myfile->move(public_path('upload/'), $request->myfile);
            $path ='upload/'.$myfile;
            // $myfile  = Storage::disk('public')->put('upload/', $request->myfile);
        } else {
            $path  = null;
        }
       
        $med = Medical::create([
            'user_id' => Auth::id(),
            'myfile' => $path,
            'procedure' => $request->procedure,
            'parts' => $request->parts,
            'discription' => $request->discription,
            'pa_age' => $request->pa_age,
            'pa_id' => $request->pa_id,
            'pa_name' => $request->pa_name,
            'hospital' => $request->hospital,
            'dr_phone' => $request->dr_phone,
            'dr_email' => $request->dr_email,
            'dr_spec' => $request->dr_spec,
            'dr_name' => $request->dr_name,
            'status' => 0,
        ]);
        $users = User::find(Auth::id());
        $users->update([
            'order_id' => $med->id,
        ]);
        $users = User::where('role', 'admin')->orwhere('id',$users->id)->first();
        $user = User::where('id',Auth::id())->first();
        $users->notify(new MedicalNotification($users,$med));
        $details = [
            'title' =>$user->name,
            'subject'=>"#'".$med->id."'جاري تنفيذ طلب رقم",
            'from' => 'contact@einnovention.co.uk',
            'adminSubject' => "#'".$med->id."' تم استلام طلب رقم ",
            'adminBody' => "#'".$med->id."' تم استلام طلبكم رقم ",
            'adminBody2' => 'وسيتم التواصل بكم قريباً',
            'userBody' => "'".$med->id."'جاري العمل على طلبكم رقم ",
            'thanks' => 'شكراً جزيلاً',
        ];
        \Mail::to($user->email)->send(new \App\Mail\MedicalMail($details));
        $admins = User::where('role','admin')->get();
        foreach ($admins as $key => $admin) {
            \Mail::to($admin->email)->send(new \App\Mail\MedicalAdminMail($details));
        }
       
        return redirect()->route('home')->with('error_code', 5);
    }

    public function payment()
    {
        return redirect()->route('home')->with('error_code', 4);
    }
    public function index()
    {
        $medical = Medical::orderBy('id', 'desc')->get();
        return view('pages.admin.dashboard.Medical.index', compact('medical'));
    }
    public function show($id)
    {
        $order = Medical::find($id);
        $order->update([
            'seen' => 1,
        ]);
        $user = User::find($order->user_id);
        $notification = auth()->user()->notifications()->where('type', 'App\Notifications\MedicalNotification')->latest()->first();

        if ($notification) {
            $notification->markAsRead();
        }
        return view('pages.admin.dashboard.Medical.show', compact('order', 'user'));
    }

    public function updated(Request $request)
    {
        $order = Medical::find($request->id);
       
        $order->update([
            'status' => $request->status,
        ]);
        $user = User::find($order->user_id);
        if ($request->status = 1) {
            $order->status = 1;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' اجتماع الخطةالعلاجية',
                'id'=>$request->id,
                'body' => $order->status.'#'.$request->id,
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
        else if ($request->status =2) {
            $order->status = 2;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' اجتماع النموذج الأول',
                'id'=>$request->id,
                'body' =>  $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
       else if ($request->status =3 ) {
            $order->status = 3;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' اجتماع النموذج النهائي',
                'id'=>$request->id,
                'body' =>  $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
        else if ($request->status =4) {
            $order->status = 4;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' الدفع',
                'id'=>$request->id,
                'body' =>  $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
        else if ($request->status=5) {
            $order->status = 5;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' الطباعة ثلاثية الأبعاد',
                'id'=>$request->id,
                'body' => $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
       else if ($request->status =6) {
            $order->status = 6;
           
            $details = [
                'title' =>  $user->name,
                'subject'=> '#'.$request->id.' اختبار الجودة',
                'id'=>$request->id,
                'body' =>  $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
        else if  ($request->status =7)  {
            $order->status = 7;
           
            $details = [
                'title' =>  $user->name,
                'subject'=>'#'.$request->id.' التوصيل واتمام الطلب',
                'id'=>$request->id,
                'body' =>  $order->status.'#'.$request->id
            ];
            \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        }
        $details = [
            'title' =>  $user->name,
            'id'=>$request->id,
            'subject'=>  $order->status,
            'body' =>  $order->status.'#'.$request->id
        ];
        // \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
    public function updatedpublic(Request $request)
    {

        $order = PublicService::find($request->id);
      
        $user = User::find($order->user_id);

        if ($request->status ==2) {
     
            $order->status = 4;
            $order->update([
                'status' => $order->status,
            ]);
            $details = [
                'title' =>  $user->name,
                'subject'=>$order->id. ' الدفع',
                'id'=>$request->id,
                'body' => $order->status,
            ];
        }else{
            $details = [
                'title' =>  $user->name,
                'subject'=>$order->id. '  رفع الطلب',
                'id'=>$request->id,
                'body' => $order->status,
            ];
        }
       

        \Mail::to($user->email)->send(new \App\Mail\statuschanged($details));
        return redirect()->route('home');
    }
    public function askQuestion(Request $request)
    {
        $details = [
            'title' => 'FeedBack',
            'body' =>$request->input('question')
        ];
        \Mail::to($request->email)->send(new \App\Mail\Question($details));
    }

    public function feedback(Request $request)
    {
        return view('pages.admin.dashboard.Medical.feedback');
    }

    public function feedbackStore(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $feedbacks = Feedback::create([
            'user_id' => $user->id,
            'message' => $request->input('question')
        ]);
        if ($feedbacks) {
           echo "successful send your feedback";
        } 
    }
}
