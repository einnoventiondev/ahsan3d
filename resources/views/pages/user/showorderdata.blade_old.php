<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(@$title->title != null)
    <title>{{$title->title}}</title>
    @else
    <title>أجهزة ثلاثية الأبعاد</title>
    @endif
    @livewireStyles
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/assets/icons/logo.svg') }}" type="image/x-icon" />
    <meta property="og:image" itemprop="image" content="https://zen-boyd.161-97-115-110.plesk.page/3dorgans/public/user/assets/icons/logo.png">
    @if(@$title->discription != null)
    <meta name="description" content="{{$title->discription}}" />
    @else
    <meta name="description" content="شركة إدراك للإستشارات الإدارية والتدريب الإستشاري" />
    @endif

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chat.css') }}">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/zahid.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/asim.css') }}">
    <style type="text/css">
        @font-face {
            font-family: JannaRegular;
            src: url("{{ asset('assets/fonts/JannaLTRegular.ttf') }}");
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: JannaBold;
            src: url("{{ asset('assets/fonts/NotoSans-Bold.ttf') }}");
        }

        body {
            font-family: 'JannaRegular';
        }
        #view-order{
            display:block;
        }
    </style>
</head>

<body>
       <div class="modal page result" id="view-order">

        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <a href="{{route('home')}}" class="btn-close"></a>
                                <div class="view-order-heading centr-main-title">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title centr-main-title">طلباتي <span class="inner-line"></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    @if(@auth()->user()->profile == null)
                                    <button class="btn btn-sky profile-btn invert">
                                    المصمم
                                    </button>
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <button class="btn btn-sky profile-btn invert">
                                    المصمم
                                    </button>
                                    <a href="#profile">
                                        <img src="{{ asset(auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب:</span>
                                            <span class="id">{{$order->id}}</span>
                                            <div class="dateTime">{{$order->created_at}}</div>
                                        </div>
                                        <div class="row text-center mb-5 final view-order-check-main">
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">

                                                <div class="dateTime small">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">

                                                <div>
                                                    <p>رفع الطلب</p>
                                                    
                                                </div>
                                            </div>
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                              
                                                @if($order->status == 1 ||$order->status>1)
                                                <div class="dateTime small">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>اجتماع الخطة العلاجية</p>
                                                </div>
                                            </div>
                                            @if($order->status == 1||$order->status>1)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}"  class="line-img" alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}"  class="line-img"  alt="">
                                            @endif

                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 2||$order->status>2)
                                                <div class="dateTime small">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>اجتماع النموذج الأول</p>
                                                </div>
                                            </div>
                                            @if($order->status == 2||$order->status>2)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}" class="line-img-tab"  alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}" class="line-img-tab"   alt="">
                                            @endif
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 3||$order->status>3)
                                                <div class="dateTime small">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>اجتماع النموذج النهائي</p>
                                                </div>
                                            </div>
                                            @if($order->status == 3||$order->status>3)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}"  class="line-img" alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}"  class="line-img"  alt="">
                                            @endif
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 4||$order->status>4)
                                                <div class="dateTime small ">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small ">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>الدفع</p>
                                                </div>
                                            </div>
                                            @if($order->status == 4||$order->status>4)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}"  alt="">
                                            @endif
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 5||$order->status>5)
                                                <div class="dateTime small ">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small ">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>الطباعة ثلاثية الأبعاد</p>
                                                </div>
                                            </div>
                                            @if($order->status == 5||$order->status>5)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}"  class="line-img line-img-tab" alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}"  class="line-img line-img-tab"  alt="">
                                            @endif
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 6||$order->status>6)
                                                <div class="dateTime small ">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>اختبار الجودة</p>
                                                </div>
                                            </div>
                                            @if($order->status == 6||$order->status>6)
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}" class="last-line-img" alt="">
                                            @else
                                            <img src="{{asset('user/assets/icons/redline.svg')}}" class="last-line-img"  alt="">
                                            @endif
                                            <div class="col-4 col-sm-12 col-md-3 col-lg col-xxl">
                                                @if($order->status == 7||$order->status>7)
                                                <div class="dateTime small ">{{$order->created_at}}</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                @else
                                                <div class="dateTime small">تاريخ</div>
                                                <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                                @endif
                                                <div>
                                                    <p>التوصيل واتمام الطلب</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center mb-5 no-border">معلومات المريض والطبيب</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row mb-2">
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">اسم الطبيب</label>
                                                        <input type="text" class="form-control" placeholder=".. الاسم هنا" value="{{$order->dr_name}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">تخصص الطبيب</label>
                                                        <input type="text" class="form-control" placeholder=".. التخصص هنا" value="{{$order->dr_spec}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">ايميل الطبيب</label>
                                                        <input type="text" class="form-control" placeholder=".. الايميل هنا" value="{{$order->dr_email}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">رقم هاتف الطبيب</label>
                                                        <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" value="{{$order->dr_phone}}" readonly>
                                                    </div>
                                                <!-- </div>
                                                <div class="row mb-2"> -->
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">المستشفى أو الشركة</label>
                                                        <input type="text" class="form-control" placeholder=".. الجهه هنا" value="{{$order->hospital}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">اسم المريض</label>
                                                        <input type="text" class="form-control" placeholder=".. الاسم هنا" value="{{$order->pa_name}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">رقم معرف المريض</label>
                                                        <input type="text" class="form-control" placeholder=".. المعرف هنا" value="{{$order->pa_id}}" readonly>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">عمر المريض</label>
                                                        <input type="text" class="form-control" placeholder=".. المعرف هنا" value="{{$order->pa_age}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-md-12">
                                                        <label class="form-label">عموم الحاله الصحية</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$order->discription}}</textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <h1 class="title text-center mt-5 mb-5 no-border">نوع الخدمة والاجراء الطبي</h1>
                                        <div class="row justify-content-center pt-5">
                                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <img src="{{asset('user/assets/images/patient-front.png')}}" class="img-fluid" alt="patient-front">
                                            </div>
                                            <div class="col-md-4 col-lg-3 pt-4 pt-md-0 mt-5">
                                                <label class="form-label">القسم</label>
                                                <input type="text" class="form-control" placeholder="الجمجمة، العامود الفقري" value="{{$order->parts}}" readonly>
                                                <label class="form-label mt-4">نوع الاجراء الطبي</label>
                                                <input type="text" class="form-control mb-4" placeholder=" .. اختيار من هنا" value="{{$order->procedure}}" readonly>
                                                <label class="form-label">الصور الطبية</label>
                                                <div class="upload-btn-wrapper">


                                                    <a class="btn btn-upload" href="{{ asset( $order->myfile) }}" download=" {{ $order->myfile }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                                </div>

                                            </div>

                                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <img src="{{asset('user/assets/images/patient-back.png')}}" class="img-fluid" alt="patient-back">
                                            </div>
                                            <!-- <div class="col-md-12 col-lg-3">
                                            <div class="form-action">
                                                <button class="btn btn-form mx-3 with-arrow" type="submit" data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</button>
                                                <p>سيتم تحديث حالة الطلب من قبل الإدارة</p>
                                            </div>
                                        </div> -->
                                        </div>
                                     
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    @livewire('chats',['user_id' => $order->user_id,'request_id'=>$order->id,'request_type'=>'App\Models\Medical'])
                                </div>
                            </div>
                            <!-- <div class="modal-footer mt-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-action price">
                                        <a href="#payment" class="btn btn-green mx-3 accept">قبول</a>
                                        <a href="#reject-reason" class="btn btn-red mx-3 reject">رفض</a>
                                        <button class="btn btn-sky mx-3 offer-price" type="submit" data-bs-toggle="modal" data-bs-target="#healthServicesFinalModal">عرض السعر</button>
                                        <button class="btn btn-form mx-3 next-one d-none" data-bs-toggle="modal" data-bs-target="#loaderModal">التالي</button>

                                        <p><img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">&emsp;الدفع</p>
                                    </div>
                                    <div class="form-action requests d-none">
                                        <button class="btn btn-form mx-3 with-arrow showRequests">طلباتي</button>
                                        <button class="btn btn-sky mx-3 p">الفاتورة</button>
                                        <p>تمت عملية الدفع بنجاح</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div> 


    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
    <!-- JQuery -->
    <!-- <script src="{{asset('user/assets/js/jquery.min.js')}}"></script> -->
    <script>

    </script>
    <!-- Slick -->
    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>
    @livewireScripts

</body>

</html>