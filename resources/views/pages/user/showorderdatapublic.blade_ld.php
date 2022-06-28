<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <title>3D Organs</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/fonts.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chat.css') }}">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
    @livewireStyles
    
    <style type="text/css">
          #public-order {
            display: block;
        }


        @font-face {
            font-family: JannaRegular;
            src: url("{{ asset('assets/fonts/JannaLTRegular.ttf') }}");
        }
        @font-face {
            font-family: JannaBold;
            src: url("{{ asset('assets/fonts/NotoSans-Bold.ttf') }}");
        }

        body {
            font-family: 'JannaRegular';
        }
    </style>
</head>

<body>
    <div class="modal page result" id="public-order">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <a href="{{route('home')}}" type="button" class="btn-close" aria-label="Close"></a>

                                <div class="view-order-heading">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title">طلباتي<span class="inner-line"></span></h1>
                                </div>
                                <div class="profile">
                                    @if(@auth()->user()->name == null)
                                        <button class="btn btn-sky profile-btn invert">
                                            المصمم
                                        </button>
                                    @else
                                        <button class="btn btn-sky profile-btn invert">
                                            {{-- المصمم --}}
                                            {{ auth()->user()->name }}
                                        </button>
                                    @endif
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="payment d-none" id="payment">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="{{asset('user/assets/images/mada-logo.svg')}}" alt="">
                                            <p>مدى</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </label>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <img src="{{asset('user/assets/images/masterCard.svg')}}" alt="">
                                            <p>فيزا وماستر كارد</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <img src="{{asset('user/assets/images/apple-pay.svg')}}" alt="">
                                            <p>آبل باي</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        </label>
                                    </div>
                                </div>
                                <div class="reject-reason d-none" id="reject-reason">
                                    <div class="row mt-1 justify-content-center">
                                        <div class="col-md-8">
                                            <label class="form-label dot">سبب الرفض</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف هنا"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب :</span>
                                            <span class="id">{{@$public->id}}</span>
                                            <div class="dateTime">{{@$public->created_at}}</div>
                                            <!-- <div class="dateTime small">11/01/2022 - 03:00PM</div> -->
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    @if(@$public->status == 4)
                                                    <div class="dateTime small">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <div class="dateTime small text-white">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="green-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">المعلومات العامة</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row p-xs-0 p-3 conditional-blur">
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">الاسم الكامل</label>
                                                        <input type="text" class="form-control" placeholder=".. الاسم هنا" readonly value="{{@$public->full_name}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">رقم الهاتف</label>
                                                        <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly value="{{@$public->phone_num}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">الايميل</label>
                                                        <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly value="{{@$public->email}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">التخصص</label>
                                                        <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly value="{{@$public->specialization}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">الجنس</label>
                                                        <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly value="{{@$public->gender}}">
                                                    </div>
                                                    <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">صور المجسم</label>
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <h1 class="title text-center mt-5 no-border conditional-blur">تفاصيل الطباعة</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row mb-2 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">نوع الطباعة</label>
                                                                <input type="text" class="form-control" placeholder=".. الاسم هنا" readonly value="{{@$public->print_type}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">لون الطباعة</label>
                                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">دقة الطباعة (صورة كمثال)</label>
                                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly value="{{@$public->print_resolution}}">
                                                            </div>

                                                        </div>
                                                        <div class="row conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                                <label class="form-label">رفع ملف المجسم</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <a class="btn btn-upload" href="{{ asset(  @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="title text-center mt-5 no-border conditional-blur">

                                                            <div class="">
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow mt-10">عرض السعر</a>
                                                                <p class="mt-3">تمت بنجاح المرحلة الأولى من الطلب</p>
                                                            </div>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @livewire('chats',['user_id' => $public->user_id,'request_id'=>$public->id,'request_type'=>'App\Models\PublicService'])
                                        </div>
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>
    @livewireScripts

</body>

</html>