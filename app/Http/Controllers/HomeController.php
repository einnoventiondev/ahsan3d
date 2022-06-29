<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\UpdateUser;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Counter;
use App\Models\ImageSlider;
use App\Models\Logo;
use App\Models\Mapimage;
use App\Models\Medical;
use App\Models\Order;
use App\Models\Product;
use App\Models\PublicService;
use App\Models\SideLogo;
use App\Models\Tech;
use App\Models\TempUpdateProfile;
use App\Models\Title;
use App\Models\User;
use App\Models\Proposal;
use App\Models\Software;
use App\Models\Perposal;
use App\Models\UserDetail;
use App\Models\Youtubeurl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Mpdf\Tag\Input;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        if (Auth::user()) {
            if (auth()->user()->role == 'admin') {
                $title = Title::first();
                $medical = Medical::orderBy('id', 'desc')->paginate(5);
                 $medical_request=Medical::count();
                 $public_request=PublicService::count();
                 $users_get = User::where('role','user')->count();
                 $designer_get = User::where('role','designer')->count();
                 $product=Product::count();
                 $order=Order::count();
                $public = PublicService::orderBy('id', 'desc')->paginate(5);
                $user = User::orderBy('id', 'desc')->paginate(5);

                return view('pages.admin.dashboard.dashboard', compact('title', 'medical', 'public','user','users_get','medical_request','public_request'));
            }
            elseif (auth()->user()->role == 'superadmin') {
                $title = Title::first();
                $medical = Medical::orderBy('id', 'desc')->paginate(5);
                 $medical_request=Medical::count();
                 $public_request=PublicService::count();
                 $users_get = User::where('role','user')->count();
                 $designer_get = User::where('role','designer')->count();
                 $product=Product::count();
                 $order=Order::count();
                 $admin_get = User::where('role','admin')->count();
                $public = PublicService::orderBy('id', 'desc')->paginate(5);
                $user = User::orderBy('id', 'desc')->paginate(5);

                return view('pages.admin.dashboard.dashboard', compact('title', 'medical', 'public','user','users_get','medical_request','public_request','order','product','admin_get','designer_get'));
            }  else {
                if(Auth::user()->approve==0){
                    return abort('403');
                }elseif(Auth::user()->approve==1){
                    $user =  User::where('id', Auth::user()->id)->with(['invoices' => function ($query) {
                        return $query->orderBy('id', 'desc')->limit(1);
                    }])->with(['purposals' => function ($query) {
                        return $query->orderBy('id', 'desc')->limit(1);
                    }])->first();
                    $about = AboutUs::first();
                    $con = ContactUs::first();
                    $tech = Tech::first();
                    $profile = ImageSlider::all();

                    $products = Product::with('user')->orderBy('id', 'DESC')->get();
                    $order = Medical::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
                    $public = PublicService::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
                    $side = SideLogo::first();
                    $logos = Logo::first();

                    $orders = Medical::where('user_id', Auth::id())->orderBy('id', 'desc')->with('InvoicePDF')->with('PerposalPDF')->get();
                    $publics = PublicService::where('user_id', Auth::id())->orderBy('id', 'desc')->with('InvoicePDF')->with('PerposalPDF')->get();
                    $title = Title::first();
                    $map = Mapimage::first();
                    $links = Youtubeurl::first();
                    $counter = Counter::first();
                    $images = Logo::all();
                    $products = Product::orderBy('id', 'DESC')->with('software')->get();

                    //$orders_designer = Order::orderBy('id','DESC')->get();
					$proposal_order_id = Proposal::where('user_id', Auth::id())->get('order_id');
                    // $orders_designer = Order::where('user_id',Auth::id())->whereNotIn('id',$proposal_order_id)->orderBy('id','DESC')->get();

                    $orders_designer = Order::where('designer_id',Auth::id())->orderBy('id','DESC')->get();
					  $orders_user = Order::where('user_id', Auth::id())->orderBy('id', 'desc')->with('InvoicePDF')->with('PerposalPDF')->get();

					// dd($orders_user);
					$products_d = Product::where('designer_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
                    return view('pages.user.index.index', compact('counter', 'links','images', 'about', 'con', 'tech', 'profile', 'order', 'side', 'orders', 'logos', 'public', 'publics', 'title', 'map', 'user','products','orders_designer','products_d','orders_user'));
                }
            }
        } else {

            $user =  User::where('id', Auth::user()->id)->with(['invoices' => function ($query) {
                return $query->orderBy('id', 'desc')->limit(1);
            }])->with(['purposals' => function ($query) {
                return $query->orderBy('id', 'desc')->limit(1);
            }])->first();

            $about = AboutUs::first();
            $con = ContactUs::first();
            $tech = Tech::first();
            $profile = ImageSlider::all();
            $order = Medical::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            $public = PublicService::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->first();
            $side = SideLogo::first();
            $logos = Logo::first();
            $orders = Medical::where('user_id', Auth::id())->orderBy('id', 'desc')->with('InvoicePDF')->with('PerposalPDF')->get();
            $publics = PublicService::where('user_id', Auth::id())->orderBy('id', 'desc')->with('InvoicePDF')->with('PerposalPDF')->get();
            $title = Title::first();
            $map = Mapimage::first();
            $links = Youtubeurl::first();
            $counter = Counter::first();

            $products = Product::with('software')->orderBy('id', 'DESC')->get();

            $products_d = Product::where('designer_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
            $orders_designer = Order::orderBy('id','DESC')->get();
            return view('pages.user.index.index', compact('counter', 'links', 'about', 'con', 'tech', 'profile', 'order', 'side', 'orders', 'logos', 'public', 'publics', 'title', 'map', 'user','products','orders_desgner','products_d'));
        }
    }

    public function getProduct($id)
    {
        $bdata = Product::with('user')->find($id);
        $software=Software::where('name',$bdata->user_software)->first();
        $software_image=$software->images;
        $designer_name = $bdata->user->name;
        $data[0] = $bdata;
        $data[1] = $designer_name;
        return response() -> json(['code'=> 200, 'msg' => $data,'soft_image'=>$software_image]);
    }

    public function getRequest($id)
    {
        $data = Order::with('user')->with('InvoicePDF')->with('PerposalPDF')->find($id);
        $session=Session::put('order_id',$id);
        return response() -> json(['code'=> 200,'session'=>$session, 'msg' => $data,'name' => 'request_order_with_id']);
    }

	 public function getRequest_blur($id)
    {

        $data = Order::with('user')->with('InvoicePDF')->with('PerposalPDF')->find($id);
        return response() -> json(['code'=> 200, 'msg' => $data , 'name'=>'remove_blur_with_id']);
    }

    public function vieworder($id)
    {
        $order = Medical::find($id);
        User::find(Auth::id())->update([
            'order_id' => $id,
        ]);
        $orders = Medical::where('user_id', Auth::id())->get();
        $perposal = Perposal::where('order_id',$id)->get();
        return view('pages.user.showorderdata', compact('order','perposal'));
    }
    public function vieworderpublic($id)
    {
        //return $id;
        $public = PublicService::find($id);
        $publics = PublicService::where('user_id', Auth::id())->get();
        $perposal = Perposal::where('order_id',$id)->get();

        return view('pages.user.showorderdatapublic', compact('public',  'publics','perposal'));
    }
    public function viewSetting()
    {

        return view('pages.admin.dashboard.ProfileUpdate.setting');
    }
    public function updateprofile(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
        ]);

        if ($request->hasFile('profile')) {
            if (isset($request->profile) && !empty($request->profile)) {
                if (!empty(auth()->user()->profile)) {

                    Storage::disk('public')->delete(auth()->user()->profile);
                }
                $profile = $request->profile->getClientOriginalName();
                $request->profile->move(public_path('upload/'), $profile);

                $path = 'upload/' . $profile;
            }
        } else {
            $path = (auth()->user()->profile);
            $profile  = (auth()->user()->profile);
        }

        User::find(auth()->user()->id)->update([
            'profile' => $path,
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('home');


    }
    public function password_updates(Request $request)
    {

        $request->validate([

            'newpassword' => 'required',
        ]);
        if (Hash::check($request->password, auth()->user()->password)) {
            User::find(auth()->user()->id)->update([
                'password' => Hash::make($request->newpassword),
            ]);
            return redirect()->route('home');
        }
    }
    public function passView()
    {
        return view('pages.admin.dashboard.ProfileUpdate.edit_password');
    }
    public function edituser(Request $request, $id)
    {

        $imageName = time() . '.' . $request->profile->extension();
        $request->profile->move(public_path('upload/images'), $imageName);
        $filePath = 'upload/images/' . $imageName;
        User::find(auth()->user()->id)->update([
            'profile' => $filePath,
            'name' => $request->name,
            'email' => $request->email,
            'field' => $request->field,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('/');
    }

    public function updateProfileMail($user_id,$approve)
    {
        if($approve==1){
            // $user = User::where('id',$user_id)->with('userDetails')->get();
            $user = TempUpdateProfile::where('user_id',$user_id)->get();
            UserDetail::updateOrCreate([
                'user_id'=>$user_id,
                'printing_technology'=>$user->printing_technology,
                'software_type'=>$user->software_type
            ]);
            //update query
        }else{
            $user = User::where('id',$user_id)->with('userDetails')->get();
            //delete query
        }

    }
    public function profile(Request $request)
    {
     $tempProfile = TempUpdateProfile::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request,
        'user_id'=>$request->id,
        'printing_technology'=>$request->printing_technology,
        'software_type'=>$request->software_type,
    ]);
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request,
        'subject'=>'update profile',
        'user_id'=>$request->id,
        'printing_technology'=>$request->printing_technology,
        'software_type'=>$request->software_type,
    ];
    // Mail::to('yasirb673@gmail.com')->send(new \App\Mail\UpdateUser($details));
    return redirect()->back();
    }

}
