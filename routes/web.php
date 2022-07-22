<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactControllers;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageSlideController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapimageController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\PrintingController;
use App\Http\Controllers\PerposalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\SideImageController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AdminCreateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YoutubeurlController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\FileExtentionController;
use App\Http\Controllers\MedicalProcedureController;
use App\Http\Controllers\SpecializationController;
use App\Models\Invoice;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('userLogin', 'Auth\LoginController@showLoginForm');
Route::group(['prefix' => 'artisan'], function () {
    Route::get('clear', function () {
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');

        Artisan::call('storage:link');
        return 'Successfully Cleared !';
    });

    Route::get('migrate/fresh', function () {

        Artisan::call('migrate:fresh --seed');

        return 'Successfully Migrated !';
    });
    Route::get('seed', function () {

        Artisan::call('db:seed');

        return 'Successfully seeded !';
    });

    Route::get(
        'migrate',
        function () {

            Artisan::call('migrate');

            return 'Successfully Migrated !';
        }
    );

    Route::get('link', function () {
        Artisan::call('storage:link');
        return 'Storage link successfully';
    });
});
// Route::post('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/', [RegisterController::class, 'homepage'])->name('/');

    Route::any('add-proposal',[ProductController::class,'addProposal'])->name('addProposal');
Route::post('createDesigner', [RegisterController::class, 'createDesigner'])->name('createDesigner');
Auth::routes();
Route::get('updateProfileMail', [HomeController::class, 'updateProfileMail'])->name('updateProfileMail');

Route::get('approval/{id}', [HomeController::class, 'approval'])->name('approval');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::resource('invoicess', InvoiceController::class);
Route::resource('perposal', PerposalController::class);
Route::get('OrderManagement', [PerposalController::class, 'OrderManagement'])->name('OrderManagement');
Route::get('invoices/pdf/{id}', [InvoiceController::class,'pdfInvoice'])->name('invoice.pdf');
Route::get('perposal/pdf/{id}', [PerposalController::class,'pdfProposal'])->name('purposal.pdf');
Route::group(['middleware' => 'auth', 'varify','cors'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/getProduct/{id}', [App\Http\Controllers\HomeController::class, 'getProduct'])->name('getProduct');
     Route::get('/getRequest/{id}', [App\Http\Controllers\HomeController::class, 'getRequest'])->name('getRequest');
    Route::get('/getRequest_blur/{id}', [App\Http\Controllers\HomeController::class, 'getRequest_blur'])->name('getRequest_blur');
    Route::resource('medical', MedicalController::class);
    Route::resource('publics', PublicServiceController::class);
    Route::get('publics/delete/{id}', [PublicServiceController::class, 'destroy'])->name('publics.destroy');

    //Resource Route
    Route::post('profile',[UserController::class,'profileUpdate'])->name('profileUser');
    Route::get('invoices/{id}', [InvoiceController::class,'show'])->name('invoice');
    Route::get('perposal/{id}', [PerposalController::class,'show'])->name('purposal');

    Route::group(['middleware' =>  'role:user'], function () {
        Route::get('/vieworder/{id}', [App\Http\Controllers\HomeController::class, 'vieworder'])->name('vieworder');
        Route::get('/vieworderpublic/{id}', [App\Http\Controllers\HomeController::class, 'vieworderpublic'])->name('vieworderpublic');
        Route::get('perposal/accept/{id}',[PerposalController::class,'perposalAccept'])->name('perposalAccept');
        Route::get('perposal/action/view/{id}',[PerposalController::class,'perposalAction'])->name('perposalAction');
        Route::post('identity',[UserController::class,'identity'])->name('identity');
    });

    Route::group([['middleware' =>  'role:admin'],['middleware' =>  'role:superadmin']], function () {
        Route::resource('about', AboutUsController::class);
        Route::resource('contact', ContactControllers::class);
        Route::resource('client', ClientController::class);
        Route::resource('image', ImageSlideController::class);

        Route::resource('social', SocialMediaController::class);
        Route::resource('tech', TechController::class);

        Route::resource('title', TitleController::class);
        Route::resource('size', SizeController::class);
        Route::resource('color', ColorController::class);

        Route::resource('map', MapimageController::class);
        Route::resource('youtubeurl', YoutubeurlController::class);
        Route::resource('counter', CounterController::class);
        Route::resource('printing', PrintingController::class);
        Route::resource('software_type', SoftwareController::class);

        Route::delete('delete/product/{id}',[AdminController::class,'productDelete'])->name('product.destroy');
         Route::get('product-request',[AdminController::class,'productRequest'])->name('productRequest');
         Route::get('request-approve/{id}',[AdminController::class,'requestApprove'])->name('requestApprove');

         Route::get('adminSettingshow',[AdminController::class,'adminSettingshow'])->name('adminSettingshow');

         Route::post('adminSetting',[AdminController::class,'adminSetting'])->name('adminSetting');

        Route::post('convertToInvoice',[InvoiceController::class,'convertToInvoice'])->name('convertToInvoice');

        Route::prefix('user')->name('user.')->group(function (){
            Route::get('list',[UserController::class,'index'])->name('list');

            Route::get('update/{id}',[UserController::class,'userUpdate'])->name('userUpdate');
            Route::post('update1',[UserController::class,'userUpdate1'])->name('userUpdate1');
            Route::delete('delete/{id}',[UserController::class,'userDelete'])->name('userDelete');

            Route::get('userView/{id}',[UserController::class,'userView'])->name('userView');


            Route::get('approve/{id}',[UserController::class,'approval'])->name('approve');
            Route::get('profile/list',[UserController::class,'profileList'])->name('profile.list');
            Route::get('profile/approve/{id}',[UserController::class,'profileApprove'])->name('profile.approve');
        });
        //designer route
        Route::resource('designer', DesignerController::class);
        Route::get('send/mail/{id}',[InvoiceController::class,'sendViaMail'])->name('sendViaMail');
        Route::post('payment/added',[InvoiceController::class,'paymentAdded'])->name('paymentAdded');
        Route::get('payment', [MedicalController::class, 'payment'])->name('payment');

        Route::get('ProfileUpdate/view', [HomeController::class, 'viewSetting'])->name('profileupdate.view');
        Route::post('profile/setting', [HomeController::class, 'updateprofile'])->name('profile.setting');
        Route::get('editpassword', [HomeController::class, 'passView'])->name('editpassword');
        Route::get('medi/index', [MedicalController::class, 'index'])->name('medi.index');
        Route::get('medi/show/{id}', [MedicalController::class, 'show'])->name('medi.show');
        Route::get('medi/delete/{id}', [MedicalController::class, 'destroy'])->name('medi.destroy');

        Route::post('updated.status', [MedicalController::class, 'updated'])->name('updated.status');
        Route::post('public.updated.status', [MedicalController::class, 'updatedpublic'])->name('public.updated.status');
        Route::post('password/updates', [HomeController::class, 'password_updates'])->name('password_updates');
        Route::resource('side', SideImageController::class);
        Route::resource('logo', LogoController::class);

        Route::get('payment/pdf/{id}', [InvoiceController::class,'pdfPayment'])->name('payment.pdf');
        Route::post('edituser_profile/{id}', [HomeController::class, 'edituser'])->name('edituser_profile');
        Route::get('view/{id}', [ImageSlideController::class, 'view'])->name('view');

        Route::get('imageEdit/{id}',[ImageSlideController::class,'imageEdit'])->name('imageEdit');
        Route::post('imageUpdate/{id}',[ImageSlideController::class,'imageUpdate'])->name('imageUpdate');
        Route::delete('imageDelete/{id}',[ImageSlideController::class,'imageDelete'])->name('imageDelete');


        Route::get('register_profile', [HomeController::class, 'register_profile'])->name('register_profile');
        Route::post('send/question', [MedicalController::class, 'askQuestion'])->name('ask.question');
        Route::get('payment',[PaymentController::class,'index'])->name('payment');
        Route::get('order_id/{id}',[UserController::class,'userByOrder'])->name('userByOrder');
		Route::get('order_id_pub/{id}',[UserController::class,'userByOrder_pub'])->name('userByOrder_pub');
    });

    Route::get('feedback', [MedicalController::class, 'feedback'])->name('feedback');
    Route::post('feedback/store', [MedicalController::class, 'feedbackStore'])->name('feedbackStore');

    Route::get('/chats', [ChatController::class,'index']);
    Route::get('/messages', [ChatController::class,'fetchAllMessages']);
    Route::post('/medi/messages',[ChatController::class,'sendMessage']);
    Route::view('chat','chat.chats')->name('messanger');

});

    Route::any('add-product',[ProductController::class,'addProduct'])->name('addProduct');
    Route::any('add-order',[OrderController::class,'addOrder'])->name('addOrder');
     Route::any('add-product',[ProductController::class,'addProduct'])->name('addProduct');
     Route::delete('delete/{id}',[AdminController::class,'productDelete'])->name('product.destroy.designer');
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('mark/read',function(){
  auth()->user()->unreadNotifications->markAsRead();
  return redirect()->back();
})->name('mark.read');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//perposal status change
Route::post('perposal/statuschangee',[PerposalController::class,'perposal_statuschange1'])->name('perposal_status_change1');
Route::post('perposal/statuschange',[PerposalController::class,'perposal_statuschange'])->name('perposal_status_change');

//printing search
Route::post('search/printing',[PrintingController::class,'search_print'])->name('print.search.btn');
Route::post('search/printing/title',[PrintingController::class,'search_print_title'])->name('print.search.btn.title');

//logo delete
Route::delete('delete/logo1/{id}',[LogoController::class,'logoDelete1'])->name('logo1.destroy');
Route::delete('delete/logo2/{id}',[LogoController::class,'logoDelete2'])->name('logo2.destroy');
Route::delete('delete/logo3/{id}',[LogoController::class,'logoDelete3'])->name('logo3.destroy');
Route::delete('delete/logo4/{id}',[LogoController::class,'logoDelete4'])->name('logo4.destroy');
Route::delete('delete/logo5/{id}',[LogoController::class,'logoDelete5'])->name('logo5.destroy');
Route::delete('delete/logo6/{id}',[LogoController::class,'logoDelete6'])->name('logo6.destroy');
Route::delete('delete/logo7/{id}',[LogoController::class,'logoDelete7'])->name('logo7.destroy');


///admin routes

Route::get('admin/create',  [App\Http\Controllers\AdminCreateController::class, 'create'])->name('admin.create');
Route::post('admin/store',  [App\Http\Controllers\AdminCreateController::class, 'store'])->name('admin.store');
Route::get('admin/index',  [App\Http\Controllers\AdminCreateController::class, 'index'])->name('admin.index');
Route::get('admin/edit/{id}',  [App\Http\Controllers\AdminCreateController::class, 'edit'])->name('admin.edit');
Route::post('admin/update/{id}',  [App\Http\Controllers\AdminCreateController::class, 'update'])->name('admin.update');
Route::delete('admin/delete/{id}',  [App\Http\Controllers\AdminCreateController::class, 'destroy'])->name('admin.destroy');
Route::get('admin/show/{id}',  [App\Http\Controllers\AdminCreateController::class, 'show'])->name('admin.show');
Route::resource('specialization', SpecializationController::class);
Route::post('specialization/update/{id}',  [App\Http\Controllers\SpecializationController::class, 'update'])->name('specialization.update');
Route::resource('procedure', MedicalProcedureController::class);
Route::post('procedure/update/{id}',  [App\Http\Controllers\MedicalProcedureController::class, 'update'])->name('procedure.update');

Route::resource('extention', FileExtentionController::class);
Route::post('extention/update/{id}',  [App\Http\Controllers\FileExtentionController::class, 'update'])->name('extention.update');


Route::get('/ordermanagmentview/{id}',[PerposalController::class, 'OrderManagementview'])->name('order.management.user');
Route::get('/send/email',[UserController::class,'sendemail'])->name('user.email.send');
Route::post('/send/mail',[UserController::class,'usersendemail'])->name('send.mail.user');
Route::get('/reset/password/{token}',[UserController::class,'forgotview'])->name('user.forgot-password');
Route::post('/changepassword',[UserController::class,'changepassword'])->name('password.reset.user');
Route::post('/user/payment',[UserController::class,'userpayment'])->name('user.account.payment');
Route::post('/designer/deliver',[PerposalController::class,'deliverFile'])->name('designer.deliver.file');
Route::post('deliver/price',[PerposalController::class,'priceDetect'])->name('deliver_price_detect');
Route::post('/payment/withdraw',[UserController::class,'userPaymentDetect'])->name('user.payment.detect');
