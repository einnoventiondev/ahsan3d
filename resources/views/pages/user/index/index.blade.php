<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(@$title->title != null)
    <title>{{$title->title}}</title>
    @else
    <title>أجهزة ثلاثية الأبعاد</title>
    @endif
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/assets/icons/logo.svg') }}" type="image/x-icon" />
    <meta property="og:image" itemprop="image" content="https://zen-boyd.161-97-115-110.plesk.page/3dorgans/public/user/assets/icons/logo.png">
    @if(@$title->discription != null)
    <meta name="description" content="{{$title->discription}}" />
    @else
    <meta name="description" content="شركة إدراك للإستشارات الإدارية والتدريب الإستشاري" />
    @endif
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/> -->
    <!-- StyleSheet -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/fonts.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.pageLoading.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/ahsan.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/zahid.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/asim.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" />

    {{-- <style>
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999999;
			background: #fff;
		}
	</style> --}}

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

        #subImages img {
            width: 128px;
            height: auto;
        }
    </style>

</head>

<body>
    <div class="toast" style="direction:ltr;position:absolute; z-index:9999999" role="alert" aria-live="assertive" aria-atomic="true">

        <div class="toast-header">
            <strong class="mr-auto col">Login Failed</strong>
            <button type="button" class="ml-2 mb-1 close btn btn-sm " data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            @foreach($errors->all() as $error)

            {{$error}}
            @endforeach


        </div>
    </div>

    <div class="toggle-overlay"></div>
    <div class="content-wrapper hide-on-load">
        @if (Session::has('success'))

        <div class="alert-overlay">
            <div class="alert alert-success alert-msg " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <i class="fa-solid fa-xmark alert-icon"></i>
                <ul>
                    <li>تم ارسال الطلب بنجاح !</li>
                </ul>
            </div>
        </div>

        @endif
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">
                                من نحن
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">ماهي
                                تقنية الـ 3D</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-section" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#design">مجتمع المصممين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                        </li>
                        <li class="mobile-menu">
                            <div class="left-side">
                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                @auth
                                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}!</a>
                                @endauth
                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                <span>
                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                @auth

                <div class="left-side desktop-menu">

                    <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                        {{-- @if (auth()->user()->profile != null)
                        @if (@auth()->user()->profile == null)
                        <div class="profile-img">
                            <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile)}}" style="height:40px; width:40px; border-radius: 50%">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (@auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
                    @endif

                    <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>

                    <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                    <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                        تسجيل خروج
                    </a>
                    <script type="text/javascript">
                        function logout(event) {
                            event.preventDefault();
                            var check = confirm("هل تريد حقا الخروج؟");
                            if (check) {
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                            Out</button>

                    </form>
                    <span class="social-icons">

                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                    </span>
            </div>
            @else
            <div class="left-side">

                <a href="#" class="m-0">
                    <img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar">
                </a>

                <a href="#login" data-bs-toggle="modal" class="register-icon border-bottom" data-bs-target="#loginModal">تسجيل
                    دخول</a>
                <a href="#register" class="ms-auto register-icon border-bottom main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                <span class="social-icons">
                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                </span>
            </div>
            @endauth
    </div>
    </nav>

    <div id="wrapper" class="mobile-nav">
        <div id="sidebar-wrapper">
            <div class="area-brand">
                <a class="" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="mmnue">
                <ul class="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ماهي
                            تقنية الـ 3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-section" class="nav-link">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مجتمع المصممين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                    </li>
                    @if(Auth::user())
                    <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                    <li class="nav-item pt-0">
                        <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">

                        <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link dot main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                    </li>
                    @endif
                    <li class="">
                        <div class="mobile-social-icon">

                            <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-sm-3 mobile-logo">

                        <div class="area-brand">
                            <a class="" href="#">
                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-9 mobile-pro-icon">
                        <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                        <div class="mobile-profile">


                            <a href="#" class="m-0"><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile) }}" class="profile-img" alt="avatar"></a>
                            @if(Auth::user())
                            <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ Auth::user()->name }}!</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start here -->



    <!-- mobile menu end here -->
    <!-- <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel-inner">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                </div>
                <div class="carousel-item active">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands move" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot animate__animated animate__slideInLeft animate__slower d-block">اهلاً
                        وسهلاً</span>
                      <h2 class="title no-border animate__animated animate__slideInRight animate__slower">لنبتكر لمستقبل
                        أفضل !</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row align-items-center" dir="ltr">
          <div class="col-md-4" dir="rtl">
            <div class="text-start">
              <figcaption class="map-cap side">
                <h6>اثناء العمل</h6>
                <p>خارج الصندوق</p>
              </figcaption>
              <div class="bottom boxContainer">
                <div class="blue-box"></div>
                <img src="{{ asset('user/assets/images/side-img.jpg') }}" >
              </div>
            </div>
          </div>
          <div class="col-md-8 padi-top">
            <div class="main-slide">
              <div><img src="{{ asset('user/assets/images/cgc.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/gas.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/sfda.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/mci.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/cgc.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/gas.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/sfda.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/mci.png') }}"></div>
            </div>
            <div class="row pt-5 mt-5 align-items-end" dir="rtl">
              <div class="col-md-6">
                <div class="about-content">
                  <span class="outline dot right-center">+3D</span>
                  <h1 class="modal-title color-blue text-center">من نحن</h1>
                  <div class="description text-center">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                    يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                  </div>
                  <div class="actions">
                    <button class="btn btn-sky invert">
                      المزيد
                      <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <figcaption class="map-cap">
                  <h6>مقر العمل</h6>
                  <p>الرياض، المونسية، شارع احمد بن حنبل</p>
                </figcaption>
                <div class="map-place boxContainer">
                  <div class="blue-box"></div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3988.7912337679813!2d103.77780549213008!3d1.3000914839605147!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1645634527875!5m2!1sen!2s"
                    width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="banner sample">
        {{-- <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg sample move-blue animate__animated animate__fadeInRight animate__slower " alt="banner-bg">
        <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg sample move-black animate__animated animate__fadeInLeft animate__slower " alt="black-bg"> --}}
        <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg sample move-blue animate__animated animate__slideInRight animate__slow" alt="banner-bg">
        <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg sample move-black animate__animated animate__slideInLeft animate__slow" alt="black-bg">
        {{-- <div class="move-blue2"></div> --}}

        <div class="black-bg2"></div>
        <div class="move-blue2"></div>
        <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands sample move-hand hide-hands" alt="hands">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-inner">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            @foreach($profile as $key=>$profiles)
                            @if($key == 0)
                            <div class="carousel-item active" id="{{$key}}">
                                @else
                                <div class="carousel-item" id="{{$key}}">
                                    @endif
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 col-lg-7 first-col">

                                            <div class="mob-profile-heading">
                                                <span class="outline dot d-block">{{ $profiles->sub_heading }}
                                                </span>


                                                <h2 class="title no-border">
                                                    {{ $profiles->heading }}
                                                    !
                                                    <span class="inner-line"></span>
                                                </h2>
                                            </div>
                                            <div class="static-text">
                                                <div class="mob-profile-heading-hide">

                                                    <span class="outline dot d-block">{{ $profiles->sub_heading }}
                                                    </span>


                                                    <h2 class="title no-border">
                                                        {{ $profiles->heading }}
                                                        !
                                                        <span class="inner-line"></span>
                                                    </h2>
                                                </div>
                                                <p class="description">
                                                    {!!$profiles->body_text !!}
                                                </p>

                                                <div class="wrapper-btn">
                                                    <button class="btn btn-sky">المزيد</button>
                                                    <a href="#services-section" class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}" alt="arrow-down"></a href="#services-section">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-5">
                                            <div class="top boxContainer">
                                                <div class="blue-box"></div>
                                                @if (@$profiles->images != null)
                                                <img src="{{ asset($profiles->images) }}" class="img-fluid img-behind" alt="medical">
                                                @else
                                                <img src="{{ asset('user/assets/images/medical.jpg') }}" class="img-fluid img-behind" alt="medical">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="row align-items-center responsive-reverse" dir="ltr">
                        <div class="col-md-4" dir="rtl">
                            <div class="text-start">
                                <figcaption class="map-cap side sample">
                                    @if (@$side->subheading != null)
                                    <h6> {{$side->subheading}}</h6>
                                    @else
                                    <h6>اثناء العمل</h6>
                                    @endif
                                    @if (@$side->heading != null)
                                    <p> {{$side->heading}}</p>
                                    @else
                                    <p>خارج الصندوق</p>
                                    @endif


                                </figcaption>
                                <div class="bottom boxContainer sample heart-img">
                                    <div class="blue-box move-box"></div>
                                    @if (@$side->side_image != null)
                                    <img src="{{ asset('upload/' . $side->side_image) }}" alt="image" class="card-img">
                                    @else
                                    <img src="{{ asset('user/assets/images/side-img.jpg') }}" alt="side-img">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 padi-top">
                            <!-- counter -->
                            <div class="row">
                                <div class="col-md-8 tab-counter-width"></div>
                                <div class="col-md-2 task-number">
                                    <div class="counter">
                                        @if(@$counter->client != null)
                                        <span class="client-counter" data-count="{{$counter->client}}">0</span><span class="symbol">+</span>
                                        @else
                                        <span class="client-counter" data-count="12">0</span><span class="symbol">+</span>
                                        @endif
                                        <h5>عميل</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 task-number1">
                                    <div class="counter">
                                        @if(@$counter->project != null)
                                        <span class="client-counter" data-count="{{$counter->project}}">0</span><span class="symbol">+</span>

                                        @else
                                        <span class="client-counter" data-count="130">0</span><span class="symbol">+</span>
                                        @endif

                                        <h5>مشروع</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="main-slide" style="opacity: 0;">
                                @if (@$logos->logo1 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo1) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo2 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo2) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo3 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo3) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo4 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo4) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo5 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo5) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/mci.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo6 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo6) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo7 != null)
                                <div class="slide-logos">
                                    <img src="{{ asset('upload/' . $logos->logo7) }}" alt="image" class="card-img">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo8 != null)
                                @php

                                $images= App\Models\Logo::first();
                                $image=[];
                                $image = json_decode($images->logo8, true);
                                @endphp

                                <div class="slide-logos">
                                    @foreach ($image as $item)
                                    <img src="{{$item ? asset('upload/' . $item) : asset('user/assets/images/gas.png') }}" alt="image" class="card-img">
                                    @endforeach
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                            </div>
                            <div class="row pt-5 mt-5 align-items-end p-t-70" dir="rtl">
                                <div class="col-md-9 col-lg-7 res-width-64" data-aos="fade-up">
                                    <div class="about-content" id="about-us">
                                        <!-- <span class="outline dot right-center">+3D</span> -->
                                        @if ($about != null)

                                        <h1 class="modal-title color-blue text-center line-heading">
                                            <span class="outline dot right-center">+3D</span>
                                            <span class="btm-line"><span class="inner-line"></span>{{
                                                    @$about->heading }}</span>
                                        </h1>
                                        @else
                                        <h1 class="modal-title color-blue text-center line-heading">
                                            <span class="outline dot right-center">+3D</span>
                                            <span class="btm-line"><span class="inner-line"></span> من نحن
                                            </span>
                                        </h1>
                                        @endif
                                        @if ($about != null)
                                        <p class="description">
                                            {!! @$about->bodytext !!}
                                            @else
                                        <div class="description text-center">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                            النص من
                                            مولد النص العربى، حيث
                                            يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                                            عدد
                                            الحروف
                                            التى يولدها
                                            التطبيق.
                                        </div>
                                        @endif
                                        <div class="actions">
                                            <button class="btn btn-sky invert" data-bs-toggle="modal" data-bs-target="#aboutModal">
                                                المزيد
                                                <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-5 res-width-36">
                                    <figcaption class="map-cap">
                                        <h6>مقر العمل</h6>
                                        <p>الرياض، المونسية، شارع احمد بن حنبل</p>
                                    </figcaption>
                                    <div class="map-place boxContainer" data-aos="zoom-in">
                                        <div class="blue-box move-box"></div>
                                        @if (@$map->map_image != null)

                                        <img src="{{ asset( $map->map_image) }}" width="550" height="300" style="border:0;" allowfullscreen="">

                                        @else
                                        <img src="{{ asset('user/assets/images/world-map.jpg') }}" width="550" height="300" style="border:0;" allowfullscreen="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="request section p-t-70" id="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main dot-txt-main kadam-talab" data-aos="fade-up">
                        <span class="outline dot center">إختيار نوع الخدمة</span>
                        <h1 class="title"><span class="btm-line"><span class="inner-line"></span>
                                قدم طلبك
                            </span></h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 dot-txt-main">
                    <div class="image-place dot-effect" id="main-effect" data-aos="fade-up">
                        <div class="pointer head">
                            <p>الجمجمة</p>
                        </div>
                        <div class="pointer arm">
                            <p>اليدين</p>
                        </div>
                        <div class="pointer chest">
                            <p>الصدر</p>
                        </div>
                        <div class="pointer foot">
                            <p>الساقين</p>
                        </div>
                        <img src="{{ asset('user/assets/images/man-sitting.png') }}" class="img-fluid mx-auto d-block mt-5 mt-md-0 mt-lg-0 mt-xl-4" alt="man-sitting" width="500">
                    </div>
                    <div class="pt-5 pt-md-1 pt-lg-4 pt-xl-4 pt-xxl-4 medical-animate" data-aos="fade-up" data-aos-offset="200">
                        <span class="outline dot right left-right-h">أكثر من 13 عضو اصطناعي</span>
                        <h1 class="modal-title right-center"><span class="btm-line"><span class="inner-line"></span>

                                الخدمات الطبية
                            </span> </h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                        <div class="actions">
                            @auth
                            <button class="btn btn-grey" data-bs-toggle="modal" data-bs-target="#healthServiesModal"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>
                            @else
                            <button class="btn btn-grey authmasg-health"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>

                            @endauth

                            <button class="btn btn-video healthVideoModal"><img src="{{ asset('user/assets/icons/video.svg') }}" alt="video"> فيديو
                                تعريفي</button>
                            <p class='koib-health d-none mt-5 nav-link'><span style="color:red"> يتطلب التسجيل
                                </span><a href="#" data-bs-toggle="modal" class="right-register" data-bs-target="#registerModal"> للتسجيل اضغط
                                    هنا</a></p>
                        </div>
                        @auth
                        @if(@$orders->count() > 0 )
                        <div class="notification-box">
                            <p><span class="notification">{{count($orders)}}
                                </span>طلبات قائمة</p>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
                <div class="col-md-6 dot-txt-main-left">
                    <div class="image-place effect-machine" data-aos="zoom-in" id="main-macine">
                        <div class="pointer top">
                            <p>مجسمات كبيرة</p>
                        </div>
                        <div class="pointer bottom">
                            <p>مجسمات صغيرة</p>
                        </div>
                        <img src="{{ asset('user/assets/images/machine.png') }}" class="img-fluid" alt="machine">
                    </div>
                    <div class="pt-5 public-animate" data-aos="fade-up" data-aos-offset="200">
                        <span class="outline dot left left-right-h">أكثر 20 خدمة مختلفة</span>
                        <h1 class="modal-title left"><span class="btm-line"><span class="inner-line"></span>
                                الخدمات العامة
                            </span></h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                        <div class="actions">
                            <button class="btn btn-video publicVideoModal"><img src="{{ asset('user/assets/icons/video.svg') }}" alt="video"> فيديو
                                تعريفي</button>
                            @auth
                            <button class="btn btn-grey invert" data-bs-toggle="modal" data-bs-target="#publicServiesModal"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>
                            @else
                            <button class="btn btn-grey invert authmasg"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>

                            <p class='koib d-none mt-5 nav-link'><span style="color:red"> يتطلب التسجيل </span><a href="#" data-bs-toggle="modal" class="left-register" data-bs-target="#registerModal"> للتسجيل اضغط
                                    هنا</a></p>
                            @endauth

                        </div>
                        @auth
                        @if(@$publics->count() >0 )
                        <div class="notification-box mobile">
                            <p><span class="notification">{{count($publics)}}
                                </span>طلبات قائمة</p>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ahsan html start here -->
    <section class="mujtmah-almusmamen" id="design">
        <div class="container-m">
            <div class="mujtmah-almusmamen-heading-wrapper" data-aos="fade-up">
                <div class="mujtmah-heading-box">
                    <div class="sub-heading-box">
                        <div class="red-dot"></div>
                        <p class="sub-heading-box__heading">إختيار نوع الخدمة</p>
                    </div>
                    <div class="heading-box">
                        <h1 class="mujtmah-almusmamen__heading">مجتمع المصممين</h1>
                        <div class="heading-box__underline"></div>
                    </div>
                </div>
                <p class="mujtmah-almusmamen__para">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                </p>
                <!-- <a href="#" class="m-btn mujtmah-almusmamen-btn">تعرف أكثر</a> -->
                <button type="button" class="m-btn mujtmah-almusmamen-btn" data-bs-toggle="modal" data-bs-target="#aboutModal">
                    تعرف أكثر
                </button>
            </div>
            <div class="mujtmah-almusmamen-wrapper wrapper jst-btw">
                <div class="mujtmah-box">
                    <div class="mujtmah-box__content" data-aos="fade-up" data-aos-offset="200">
                        <h1 class="mujtmah-box__heading">هل أنت مصمم 3D ؟</h1>
                        <p class="mujtmah-box__para">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="mujtmah-box-btn-wrapper wrapper al-center">
                            <button class="m-btn mujtmah-box-btn reg-des btn-white-1 right-register" data-bs-toggle="modal" data-bs-target="#registerModal">
                                <img src="{{ asset('user/assets/images/arrow-8.png') }}" class="mujtmah-box-btn__img"> سجل الان
                            </button>
                            <button class="m-btn mujtmah-box-btn userVideoModal">
                                <img src="{{ asset('user/assets/images/video.png') }}" class="mujtmah-box-btn__img2">فيديو تعريفي
                            </button>

                        </div>
                        @auth
                        @if(Auth::user()->role == 'designer')
                        <div class="notification-box me-0 notification-box-wdt">
                            <p><span class="notification">
                                    1</span>طلبات قائمة</p>
                        </div>
                        @else

                        @endif

                        @endauth
                    </div>
                    <div class="mujtmah-box__media" data-aos="zoom-in">
                        <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">
                        <div class="mujtmah-box__count">
                            <h1 class="mujtmah-box__count-heading designer-counter2" data-count="{{$counter->designer ?? ' '}}">0</h1>
                            <p class="mujtmah-box__count-sub-heading">مصمم</p>
                        </div>
                    </div>
                </div>
                <div class="mujtmah-box2">
                    <div class="mujtmah-box__media" data-aos="zoom-in">
                        <div class="mujtmah-box__count2">
                            <h1 class="mujtmah-box__count-heading designer-counter" data-count="{{ $counter->client ?? ' '}}">0</h1>
                            <p class="mujtmah-box__count-sub-heading">عميل</p>
                        </div>
                        <img src="{{ asset('user/assets/images/mujtmah-box__image3.png') }}" class="mujtmah-box__image">
                    </div>
                    <div class="mujtmah-box__content" data-aos="fade-up" data-aos-offset="200">
                        <h1 class="mujtmah-box__heading">هل تحتاج مصمم 3D ؟</h1>
                        <p class="mujtmah-box__para">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                        </p>
                        <div class="mujtmah-box-btn-wrapper wrapper al-center mb-3">
                            <button class="m-btn mujtmah-box-btn ml-3 designerVideoModal">
                                <img src="{{ asset('user/assets/images/video.png') }}" class="mujtmah-box-btn__img2">فيديو تعريفي
                            </button>
                            @if(Auth::user())
                            <button class="m-btn mujtmah-box-btn btn-white-1" data-bs-toggle="modal" data-bs-target="#designModal">
                                <!-- order now -->
                                أطلب الان
                                <img src="{{ asset('user/assets/images/arrow-8.png') }}" class="mujtmah-box-btn__img mgl-0 mujtmah-box-btn__img3">
                            </button>
                            @else

                            <button class="m-btn mujtmah-box-btn btn-white-1" id="validate">
                                <!-- order now -->
                                أطلب الان
                                <img src="{{ asset('user/assets/images/arrow-8.png') }}" class="mujtmah-box-btn__img mgl-0 mujtmah-box-btn__img3">
                            </button>
                            @endif

                            <!-- <button data-bs-toggle="modal" data-bs-target="#designModal"
                                    class="m-btn mujtmah-box-btn btn-white-1">
                                أطلب الان
                                    <img src="{{ asset('user/assets/images/arrow-8.png') }}"
                                    class="mujtmah-box-btn__img mgl-0 mujtmah-box-btn__img2">
                                </button> -->
                        </div>

                        {{-- <h3 style="color: red" id="validate_message">Please login first !</h3> --}}
                        <!--                              <p class='koib d-none mt-5 nav-link'><span style="color:red"> يتطلب التسجيل </span><a
                                        href="#" data-bs-toggle="modal" class="left-register"  data-bs-target="#registerModal"> للتسجيل اضغط
                                        هنا</a></p> -->
                        <div class="mujtmah-box__wrapper wrapper al-center" id="validate_message">
                            <p class="mujtmah-box__link1 mgl-2">يتطلب تسجيل</p>
                            <button class="mujtmah-box__link2" data-bs-toggle="modal" data-bs-target="#registerModal">للتسجيل اضغط هنا</button>
                        </div>

                        @auth
                        @if(Auth::user()->role == 'designer')
                        <div class="notification-box me-0 notification-box-wdt">
                            <p><span class="notification">
                                    1</span>طلبات قائمة</p>
                        </div>
                        @else

                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ahsan html end here -->


    <!-- ahsan html end here -->

    <section class="contact section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main footer-white-heading">
                        @if (@$con->subheading != null)
                        <span class="outline dot center"> {{ $con->subheading }} </span>
                        @else
                        <span class="outline dot center">في أي وقت</span>
                        @endif

                        @if (@$con->heading != null)
                        <h1 class="title white"> <span class="btm-line"> <span class="inner-line"> </span>{{
                                $con->heading }}</span> </h1>
                        @else
                        <h1 class="title white"><span class="btm-line"> <span class="inner-line"> </span>
                                اتصل بنا
                            </span></h1>
                        @endif

                        @if (@$con->heading != null)
                        <div class="description">
                            <p> {!!$con->body_text !!}</p>
                        </div>
                        @else
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                                يولدها التطبيق.</p>
                        </div>
                        @endif

                    </div>
                    <div class="map">
                        <img src="{{ asset('user/assets/images/map.svg') }}" class="img-fluid" alt="map">
                        <button class="btn btn-sky" data-bs-toggle="modal" data-bs-target="#mapModal">الخريطة <img src="{{ asset('user/assets/icons/arrow.svg') }}" alt="arrow"></button>
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="details">
                                <h6 class="title">موقع المكتب</h6>

                                @if (@$con->address != null)
                                <p>{{ $con->location_name }} <br> {{ $con->address }}</p>
                                @else
                                <p>الرياض <br> حي المونسية شارع أحمد بن حنبل</p>
                                @endif

                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="details">
                                <h6 class="title">أرقام التواصل</h6>

                                @if (@$con->phone != null)
                                <p>{{ $con->phone }}</p>
                                <p>{{ $con->email }}</p>
                                @else
                                <p>00966xxxxxxxxx</p>
                                <p>info@info.sa</p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="footer-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">
                                        من نحن
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">
                                        ماهي تقنية الـ 3D
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services-section">الخدمات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us">اتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <footer>
                <div class="row">
                    <div class="col-md-4 col-xl-4">
                        <div class="right">
                            <p>تصميم وتطوير شركة تيلرز</p>
                            <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.svg') }}" alt="tellers-logo"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-4">
                        <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                    </div>
                    <div class="col-md-3 col-xl-4">
                        <div class="social">
                            <a href="#"><img src="{{ asset('user/assets/icons/twitter-white.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram-white.svg') }}" alt="instagram"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>
        </footer>
        </div>
    </section>
    @php
    $request = Session::get('req');
    @endphp
    </div>

    <!-- ///////////////////////////////////// services start here ////////////////////////////////-->
    <div class="modal fade page" id="servicesModal" tabindex="-1" aria-labelledby="servicesLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div>
                                    <span class="outline dot">إختيار نوع الخدمة</span>
                                    <h1 class="modal-title right centr-main-title">
                                        <span class="btm-line"> <span class="inner-line"> </span>
                                            قدم طلبك
                                        </span>
                                    </h1>

                                </div>

                                <div class="profile">
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p></p>
                            </div>
                            <div class="modal-body">
                                <section class="request section p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main dot-txt-main">
                                                    <div class="description mt-0">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                            توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                                                            عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 dot-txt-main pb-4">
                                                <div class="image-place dot-effect" data-aos="zoom-in">
                                                    <div class="pointer head">
                                                        <p>الجمجمة</p>
                                                    </div>
                                                    <div class="pointer arm">
                                                        <p>اليدين</p>
                                                    </div>
                                                    <div class="pointer chest">
                                                        <p>الصدر</p>
                                                    </div>
                                                    <div class="pointer foot">
                                                        <p>الساقين</p>
                                                    </div>
                                                    <img src="{{asset('user/assets/images/man-sitting.png')}}" class="img-fluid mx-auto d-block mt-5 mt-md-0 mt-lg-0 mt-xl-1" alt="man-sitting" width="500">
                                                </div>
                                                <div class="pt-5 pt-md-1 pt-lg-5 pt-xl-5 pt-xxl-5 medical-animate" data-aos="fade-up" data-aos-offset="200">
                                                    <span class="outline dot right">أكثر من 13 عضو اصطناعي</span>
                                                    <h1 class="modal-title right-center">الخدمات الطبية
                                                    </h1>
                                                    <div class="description">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                            توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                                                            عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="btn btn-grey" data-bs-toggle="modal" data-bs-target="#healthServiesModal"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="arrow-right"> طلب الخدمة</button>
                                                        <button class="btn btn-video healthVideoModal"><img src="{{asset('user/assets/icons/video.svg')}}" alt="video"> فيديو تعريفي</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 dot-txt-main-left pb-4" id="macine">
                                                <div class="image-place effect-machine" data-aos="zoom-in">
                                                    <div class="pointer top">
                                                        <p>مجسمات كبيرة</p>
                                                    </div>
                                                    <div class="pointer bottom">
                                                        <p>مجسمات صغيرة</p>
                                                    </div>
                                                    <img src="{{asset('user/assets/images/machine.png')}}" class="img-fluid" alt="machine">
                                                </div>
                                                <div class="pt-5 public-animate" data-aos="fade-up" data-aos-offset="200">
                                                    <span class="outline dot left ">أكثر 20 خدمة مختلفة</span>
                                                    <h1 class="modal-title left"><span class="btm-line"><span class="inner-line"></span>
                                                            الخدمات العامة
                                                        </span> </h1>
                                                    <div class="description">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                            توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة
                                                            عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="btn btn-video publicVideoModal"><img src="{{asset('user/assets/icons/video.svg')}}" alt="video"> فيديو تعريفي</button>
                                                        <button class="btn btn-grey invert" data-bs-toggle="modal" data-bs-target="#publicServiesModal"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="arrow-right"> طلب الخدمة</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="main-progress">
        <img src="{{asset('user/assets/icons/logo.svg')}}" alt="logo">
    <p class='progress text-center bg-transparent d-block'>0</p>

    <div class="progress-bar bar-load" id="bar"></div>
    </div> --}}

    <!--///////////////////////////////////// services model end here ////////////////////////////////////-->


    <!-- ///////////////////////////////////// cleanshot Modal  start here ////////////////////////////////-->

    <div class="modal fade page" id="cleanshotModal" tabindex="-1" aria-labelledby="cleanshotLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">

                            <div class="modal-body">


                                <!-- header designer start here -->
                                <div class="toggle-overlay"></div>
                                <div class="content-wrapper hide-on-load">
                                    <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#about-us">
                                                            من نحن
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">ماهي
                                                            تقنية الـ 3D</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#services-section" class="nav-link">الخدمات</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">مجتمع المصممين</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                    </li>
                                                    <li class="mobile-menu">
                                                        <div class="left-side">
                                                            <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                                            @auth
                                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                auth()->user()->name }}!</a>
                                                            @endauth
                                                            <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                                            <span>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                            </span>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            @auth
                                            <div class="left-side desktop-menu">

                                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                    {{-- @if (auth()->user()->profile != null)
                                                    @if (@auth()->user()->profile == null)
                                                    <div class="profile-img">
                                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                            </div>
                                            @else
                                            <div class="profile-img">
                                                <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                                            </div>
                                            @endif
                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                        auth()->user()->name }}</a>
                                            --}}
                                            <a href="javascript:void(0);" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal2">
                                                {{-- @if (auth()->user()->profile != null) --}}
                                                @if (@auth()->user()->profile == null)
                                                <div class="profile profile-icon">
                                                    <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                                </div>
                                                @else
                                                <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
                                                @endif

                                                <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                            auth()->user()->name }}</a>

                                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                                                <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                                                    تسجيل خروج
                                                </a>
                                                <script type="text/javascript">
                                                    function logout(event) {
                                                        event.preventDefault();
                                                        var check = confirm("هل تريد حقا الخروج؟");
                                                        if (check) {
                                                            document.getElementById('logout-form').submit();
                                                        }
                                                    }
                                                </script>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf

                                                    <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                                                        Out</button>

                                                </form>
                                                <span class="social-icons">

                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                </span>
                                        </div>
                                        @else
                                        <div class="left-side">
                                            <a href="#login" data-bs-toggle="modal" class="register-icon border-bottom" data-bs-target="#loginModal">تسجيل دخول</a>
                                            <a href="#register" class="ms-auto register-icon border-bottom main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                                            <span class="social-icons">
                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                            </span>
                                        </div>
                                        @endauth
                                </div>
                                </nav>

                                <div id="wrapper" class="mobile-nav">
                                    <div id="sidebar-wrapper">
                                        <div class="area-brand">
                                            <a class="" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                        </div>
                                        <div class="mmnue">
                                            <ul class="sidebar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about-us">
                                                        من نحن
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">ماهي
                                                        تقنية الـ 3D</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#services-section" class="nav-link">الخدمات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                </li>
                                                @if(Auth::user())
                                                <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                                                <li class="nav-item pt-0">
                                                    <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                @else
                                                <li class="nav-item">

                                                    <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#register" class="nav-link dot main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                                                </li>
                                                @endif
                                                <li class="">
                                                    <div class="mobile-social-icon">

                                                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="page-content-wrapper">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-3 mobile-logo">

                                                    <div class="area-brand">
                                                        <a class="" href="#">
                                                            <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-9 mobile-pro-icon">
                                                    <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                                                    <div class="mobile-profile">


                                                        <a href="#" class="m-0"><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile) }}" class="profile-img" alt="avatar"></a>
                                                        @if(Auth::user())
                                                        <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                Auth::user()->name }}!</a>
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- zahid page modal start here -->


                                <section class="cleanshot" id="bg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 cleanshot-close-btn">
                                                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="row cleanshot-row align-items-end">

                                            <div class="col-md-12 col-lg-9 col-xl-8">
                                                <div class="small-card wrapper al-center">
                                                    <div class="row" id="subImages">

                                                        <div class="col-auto p-0 card-img-main">

                                                            <img src="{{ asset('user/assets/images/cleancard.png') }}" alt="">
                                                        </div>
                                                        <div class="col-auto p-0">

                                                            <img src="{{ asset('user/assets/images/cleancard2.png') }}" alt="">
                                                        </div>
                                                        <div class="col-auto p-0">

                                                            <img src="{{ asset('user/assets/images/cleancard3.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-3 col-xl-4">
                                                <div class="adobe-icon">
                                                    <h6>البرمج المستخدمة</h6>
                                                    <div id="product_image_show">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="container head-clean">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 ">
                                            <div class="profile tag-profile">
                                                <a href="#profile">
                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                <div class="star-profile-txt">
                                                    <span>مصمم</span>
                                                    <h4 id="name"> أسم المصمم</h4>
                                                    <div class="star-reating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-sky invert personal-pro zhd-product-visit">
                                                الملف الشخصي

                                            </button>
                                        </div>


                                    </div>
                                    @php
                                    $printings=App\Models\Printing::all();
                                    $softwares=App\Models\Software::all();
                                    $sizes=App\Models\Size::all();
                                    $colors=App\Models\Color::all();
                                    @endphp
                                    <div class="row clean-headings">
                                        <div class="col-md-12" id="data">
                                            <h3>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h3>
                                            <h6>27 ديسمبر 2021</h6>

                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                                النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                                من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                        </div>
                                    </div>

                                    <div class="form form-clean">
                                        <form method="POST" action="{{route('addOrder')}}">
                                            @csrf
                                            <input type="hidden" id="designer_id" name="designer_id" value="">
                                            <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="row zhd-form-clean">

                                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-4 acf">
                                                    <label class="form-label dot">اختيار اللون</label>

                                                    <div class="color-circle-main">

                                                        <label for="gray" class="color-circle gray"> <span class="color-txt"> رمادي</span></label>
                                                        <input type="radio" id="gray" name="gray" class="color-picker d-none" value="#FFFF00">

                                                        <label for="yellow" class="color-circle yellow"> <span class="color-txt"> الأصفر</span> </label>
                                                        <input type="radio" id="yellow" name="yellow" class="color-picker d-none " value="#FED949">

                                                        <label for="red" class="color-circle red"> <span class="color-txt"> زهري</span> </label>
                                                        <input type="radio" id="red" name="red" class="color-picker d-none " value="#000">

                                                        <label for="blue" class="color-circle blue"> <span class="color-txt"> أزرق</span> </label>
                                                        <input type="radio" id="blue" name="blue" class="color-picker d-none " value="#fff">

                                                        <label for="orange" class="color-circle orange"> <span class="color-txt"> أحمر</span> </label>
                                                        <input type="radio" id="orange" name="orange" class="color-picker d-none " value="#FFFF00">



                                                        <!-- <div class="color-circle blue-border">

                                                        </div>
                                                        <div class="color-circle yellow"></div>
                                                        <div class="color-circle orange"></div>
                                                        <div class="color-circle"></div> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                    <label class="form-label dot">الكمية</label>
                                                    <!-- <select class="form-select" required name=""
                                                        aria-label="Default select example">
                                                        <option></option>
                                                        <option>1</option>
                                                    </select> -->
                                                    <input class="form-control" id="qty"
                                                        rows="4" name="qty" placeholder=   الكمية">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                    <label class="form-label dot">المقاسات</label>
                                                    <!-- <select class="form-select" required name=""
                                                        aria-label="Default select example">
                                                        <option></option>
                                                        <option>اختيار المقاس</option>

                                                    </select> -->
                                                    <input class="form-control" id="size" rows="4" name="size" placeholder="لمقاسات  ">
                                                </div>
                                            </div>

                                            <div class="row circle-bottom justify-content-center">

                                                <div class="col-md-6 col-lg-4 mt-5 ad">
                                                    <label class="form-label dot">شكل الطباعة</label>
                                                    <select class="form-control" data-placeholder="Выберите теги" name="print">
                                                        @foreach($softwares as $software)
                                                        <option value="{{ $software->name }}">{{ $software->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-lg-4 mt-5 ad">
                                                    <label class="form-label dot">تقنية الطباعة</label>
                                                    <select class="form-control" data-placeholder="Выберите теги" name="format">
                                                        @foreach($printings as $printing)
                                                        <option value="{{ $printing->name }}">{{ $printing->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>



                                            <div class="row zhd-textarea-clean">
                                                <div class="col-md-12 textarea-clean-short">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="notes" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>



                                            <div class="modal-footer footer-clean">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-action requests">
                                                            <button type="submit" class="btn-form designer-btn clean-btn">
                                                                تقديم طلب </button>

                                                            <!-- <p>يتطلب تسجيل للتسجيل اضغط هنا </p> -->
                                                        </div>

                                                        <div class="mujtmah-box__wrapper wrapper al-center mt-4">
                                                            <!-- <p class="mujtmah-box__link1 mgl-2">يتطلب تسجيل</p> -->
                                                            <!--  <button class="mujtmah-box__link2 zhd-bt-p "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#registerModal" hidden="">للتسجيل اضغط
                                                                هنا</button> -->
                                                            <!-- <button type="button" class="mujtmah-box__link2 zhd-bt-p ">
                                                للتسجيل اضغطنا
                                             </button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                            </div>

                            </section>

                            <!-- zahid page modal end here -->

                            <!-- design footer start here -->
                            <section class="contact design-footer design-1-footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="footer-nav zhd-footer">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#about-us">
                                                                من نحن
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                                ماهي تقنية الـ 3D
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#services-section">الخدمات</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">مجتمع المصممين</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#contact-us">اتصل بنا</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <footer>
                                        <div class="row">
                                            <div class="col-md-4 col-xl-4">
                                                <div class="right">
                                                    <p>تصميم وتطوير شركة تيلرز</p>
                                                    <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.png') }}" alt="tellers-logo"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-xl-4">
                                                <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                                            </div>
                                            <div class="col-md-3 col-xl-4">
                                                <div class="social">
                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.png') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.png') }}" alt="instagram"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                        </div>
                        </footer>
                    </div>
                    </section>


                    <!-- design footer end here -->




                    <!-- disign section end here -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- header cleanshot end here ///////////////////////////////////////////////////-->


    <!-- ///////////////////////////////////// cleanshot Modal end here ////////////////////////////////-->





    <!-- ///////////////////////////////////// read-only-cleanshot Modal  start here ////////////////////////////////-->

    <div class="modal fade page" id="cleanshotModal-readonly" tabindex="-1" aria-labelledby="cleanshotLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">

                            <div class="modal-body">


                                <!-- header designer start here -->
                                <div class="toggle-overlay"></div>
                                <div class="content-wrapper hide-on-load">
                                    <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#about-us">
                                                            من نحن
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">ماهي
                                                            تقنية الـ 3D</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#services-section" class="nav-link">الخدمات</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">مجتمع المصممين</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                    </li>
                                                    <li class="mobile-menu">
                                                        <div class="left-side">
                                                            <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                                            @auth
                                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                auth()->user()->name }}!</a>
                                                            @endauth
                                                            <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                                            <span>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                            </span>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            @auth
                                            <div class="left-side desktop-menu">

                                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                    {{-- @if (auth()->user()->profile != null)
                                                    @if (@auth()->user()->profile == null)
                                                    <div class="profile-img">
                                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                            </div>
                                            @else
                                            <div class="profile-img">
                                                <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                                            </div>
                                            @endif
                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                        auth()->user()->name }}</a>
                                            --}}
                                            <a href="javascript:void(0);" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal2">
                                                {{-- @if (auth()->user()->profile != null) --}}
                                                @if (@auth()->user()->profile == null)
                                                <div class="profile profile-icon">
                                                    <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                                </div>
                                                @else
                                                <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
                                                @endif

                                                <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                            auth()->user()->name }}</a>

                                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                                                <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                                                    تسجيل خروج
                                                </a>
                                                <script type="text/javascript">
                                                    function logout(event) {
                                                        event.preventDefault();
                                                        var check = confirm("هل تريد حقا الخروج؟");
                                                        if (check) {
                                                            document.getElementById('logout-form').submit();
                                                        }
                                                    }
                                                </script>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf

                                                    <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                                                        Out</button>

                                                </form>
                                                <span class="social-icons">

                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                </span>
                                        </div>
                                        @else
                                        <div class="left-side">
                                            <a href="#login" data-bs-toggle="modal" class="register-icon" data-bs-target="#loginModal">تسجيل دخول</a>
                                            <a href="#register" class="ms-auto register-icon main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                                            <span class="social-icons">
                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                            </span>
                                        </div>
                                        @endauth
                                </div>
                                </nav>

                                <div id="wrapper" class="mobile-nav">
                                    <div id="sidebar-wrapper">
                                        <div class="area-brand">
                                            <a class="" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                        </div>
                                        <div class="mmnue">
                                            <ul class="sidebar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about-us">
                                                        من نحن
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">ماهي
                                                        تقنية الـ 3D</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#services-section" class="nav-link">الخدمات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                </li>
                                                @if(Auth::user())
                                                <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                                                <li class="nav-item pt-0">
                                                    <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                @else
                                                <li class="nav-item">

                                                    <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#register" class="nav-link dot main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                                                </li>
                                                @endif
                                                <li class="">
                                                    <div class="mobile-social-icon">

                                                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="page-content-wrapper">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-3 mobile-logo">

                                                    <div class="area-brand">
                                                        <a class="" href="#">
                                                            <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-9 mobile-pro-icon">
                                                    <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                                                    <div class="mobile-profile">


                                                        <a href="#" class="m-0"><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile) }}" class="profile-img" alt="avatar"></a>
                                                        @if(Auth::user())
                                                        <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                Auth::user()->name }}!</a>
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- zahid page modal start here -->


                                <section class="cleanshot">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 cleanshot-close-btn">
                                                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="row cleanshot-row align-items-end">

                                            <div class="col-md-12 col-lg-9 col-xl-8">
                                                <div class="small-card wrapper al-center">
                                                    <div class="row">
                                                        <!-- <div class="col-auto p-0 card-img-main">
                                                        <div class="small-card__images-box">
                                                            <div class="small-card__images-box-shadow"></div>
                                                            <img class="designer-8"
                                                                src="{{ asset('user/assets/images/design-8.png') }}"
                                                                alt="">
                                                            <div class="small-card__images-text al-center">

                                                                <img src="{{ asset('user/assets/images/exp.png') }}"
                                                                    alt="" class="small-card__images-img">
                                                                <p>تكبير الصور </p>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                        <div class="col-auto p-0 card-img-main">

                                                            <img src="{{ asset('user/assets/images/cleancard.png') }}" alt="">
                                                        </div>
                                                        <div class="col-auto p-0">

                                                            <img src="{{ asset('user/assets/images/cleancard2.png') }}" alt="">
                                                        </div>
                                                        <div class="col-auto p-0">

                                                            <img src="{{ asset('user/assets/images/cleancard3.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-3 col-xl-4">
                                                <div class="adobe-icon">
                                                    <h6>البرمج المستخدمة</h6>
                                                    <img src="{{ asset('user/assets/images/ai.png') }}" alt="">
                                                    <img src="{{ asset('user/assets/images/dn.png') }}" alt="">
                                                    <img src="{{ asset('user/assets/images/in.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="container head-clean">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 ">
                                            <div class="profile tag-profile">
                                                <a href="#profile">
                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                <div class="star-profile-txt">
                                                    <span>مصمم</span>
                                                    <h4> أسم المصمم</h4>
                                                    <div class="star-reating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-sky invert personal-pro zhd-product-visit">
                                                الملف الشخصي

                                            </button>
                                        </div>


                                    </div>
                                    <div class="row clean-headings">
                                        <div class="col-md-12">
                                            <h3>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h3>
                                            <h6>27 ديسمبر 2021</h6>

                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                                النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                                                من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                        </div>
                                    </div>
                                    @php
                                    $printings=App\Models\Printing::all();
                                    $softwares=App\Models\Software::all();
                                    $sizes=App\Models\size::all();
                                    $colors=App\Models\color::all();
                                    @endphp
                                    <div class="form form-clean">
                                        <div class="row zhd-form-clean">
                                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                <label class="form-label dot">اختيار اللون</label>

                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border"></div>
                                                    <div class="color-circle yellow"></div>
                                                    <div class="color-circle orange"></div>
                                                    <div class="color-circle"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                <label class="form-label dot">الكمية</label>
                                                <select class="form-select" required name="" aria-label="Default select example">
                                                    <option></option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                <label class="form-label dot">المقاسات</label>
                                                <select class="form-select" required name="" aria-label="Default select example">
                                                    <option></option>
                                                    <option>اختيار المقاس</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row circle-bottom justify-content-center">

                                            <div class="col-md-12 col-lg-4 mt-5">
                                                <label class="form-label dot">شكل الطباعة</label>
                                                <select class="form-control" data-placeholder="Выберите теги" name="print">
                                                    @foreach($softwares as $software)
                                                    <option value="{{ $software->name }}">{{ $software->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-lg-4 mt-5">
                                                <label class="form-label dot">تقنية الطباعة</label>
                                                <select class="form-control" data-placeholder="Выберите теги" name="format">
                                                    @foreach($printings as $printing)
                                                    <option value="{{ $printing->name }}">{{ $printing->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>


                                        <div class="row zhd-textarea-clean">
                                            <div class="col-md-12 textarea-clean-short">
                                                <label class="form-label dot">الملاحظات</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" readonly placeholder="   الملاحظات .."></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-clean">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-action requests">
                                                        <button class="btn-form designer-btn clean-btn" data-bs-toggle="modal" data-bs-target="#designerPublicServiesModal">ارسال </button>

                                                        <button class="btn-form designer-btn clean-btn disabled tadile-btn">
                                                            تعديل
                                                        </button>
                                                        <!-- <button class="ahs-profile-plus-btn productadd-top-btn show-bg-pink">
                                            تعديل
                                        </button> -->

                                                    </div>
                                                    <div class="text-center mt-4">
                                                        <p>هل أنت متأكد من ارسال الطلب ؟</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>

                            </section>

                            <!-- zahid page modal end here -->

                            <!-- design footer start here -->
                            <section class="contact design-footer design-1-footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="footer-nav zhd-footer">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#about-us">
                                                                من نحن
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">
                                                                ماهي تقنية الـ 3D
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#services-section">الخدمات</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">مجتمع المصممين</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#contact-us">اتصل بنا</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <footer>
                                        <div class="row">
                                            <div class="col-md-4 col-xl-4">
                                                <div class="right">
                                                    <p>تصميم وتطوير شركة تيلرز</p>
                                                    <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.png') }}" alt="tellers-logo"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-xl-4">
                                                <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                                            </div>
                                            <div class="col-md-3 col-xl-4">
                                                <div class="social">
                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.png') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.png') }}" alt="instagram"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                        </div>
                        </footer>
                    </div>
                    </section>


                    <!-- design footer end here -->




                    <!-- disign section end here -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- header cleanshot end here ///////////////////////////////////////////////////-->


    <!-- ///////////////////////////////////// read-only-cleanshot Modal end here ////////////////////////////////-->
    <!-- zahid-page2 start -->

    <div class="modal fade page form animate__animated animate__fadeInLeft animate__fast" id="designerPublicServiesModal" tabindex="-1" aria-labelledby="designerPublicServiesLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div>
                                    <span class="outline dot">أكثر 20 خدمة مختلفة</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line"><span class="inner-line"></span>الخدمات العامة
                                        </span></h1>
                                </div>
                                <div class="profile">
                                    <button class="btn btn-sky profile-btn invert">
                                        مستخدم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="modal-body">
                                <div>

                                    <div class="carousel-inner">

                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="submitted-data">
                                                    <h6>رقم الطلب</h6>

                                                    <h1></h1>

                                                    <h1>406</h1>

                                                    <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> رفع الطلب</p>
                                                    <p><img src="{{asset('user/assets/icons/red-circle.png')}}" alt="red-circle">تقديم عرض سعر من قبل المصمم</p>
                                                    <p><img src="{{asset('user/assets/icons/red-circle.png')}}" alt="red-circle"> الدفع</p>
                                                    <!-- <span>سيتم تحديث حالة الطلب من قبل الإدارة</span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-action designer-btn">
                                                    <!-- data-bs-toggle="modal" data-bs-target="#publicServiesFinalModal"  / carousel-next-icon-show-->
                                                    <button class="btn btn-form mx-3 with-arrow carousel-next-icon-show" type="submit">تفاصيل الطلب</button>
                                                    <!-- <button class="btn-form designer-btn clean-btn" data-bs-toggle="modal" data-bs-target="#designer-order"> تقديم طلب </button> -->

                                                    <p>تم رفع الطلب بنجاح</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--
                                <button class="carousel-control-prev " type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next carousel-next-icon-hide" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button> -->
                                    <!-- <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- zahid-page2  end-->
    <!-- zahid-designer order  start-->
    <div class="modal page result" id="designer-order">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">

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
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id" id="order_no"></span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime" id="order_date"></div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <!-- <img src="{{ asset('user/assets/icon/avatar.svg')}}" alt="avatar"> -->
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar">
                                                    </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4 id="designer_name"> </h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end py-4 conditional-blur justify-content-between">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" id="order_qty" value="1">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" id="order_size" value="اختيار المقاس">
                                            </div>
                                        </div>
                                        <div class="row align-items-end p-xs-0 conditional-blur justify-content-between mob-margin">
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" id="order_format" value="رقم الهاتف هنا">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" id="order_print" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-5">
                                            <div class="designer-text">
                                                <label class="form-label dot">الملاحظات</label>
                                                <textarea class="form-control" id="order_note" rows="4" placeholder="   الملاحظات .."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="submit_proposal" method="post" action="{{route('addProposal')}}">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id" value="">
                                        <input type="hidden" name="order_id" id="order_id" value="">
                                        <div class="row justify-content-between conditional-blur uplod-txt">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">تقديم
                                                عرض سعر</h1>
                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 service-fee-zhd">
                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." name="price">
                                                <div class="service-fee-text">
                                                    <span> سيتم اضافة رسوم الخدمة 10% وقيمة الضريبة المضافة 15%
                                                        تلقائياً</span>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">تاريخ البداية</label>
                                                <input type="date" class="form-control" placeholder="تحديد التاريخ هنا .." name="start_date">
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">تاريخ التسليم</label>
                                                <input type="date" class="form-control" placeholder="تحديد التاريخ هنا .. " name="end_date">
                                            </div>

                                            <div class="col-md-12">

                                                <h1 class="title text-center mt-5 no-border conditional-blur">
                                                    <div class="">

                                                        <input type="submit" class="btn btn-form mx-3 with-arrow mt-10" data-bs-toggle="modal" data-bs-target="#designer-order-submitted
                                                        ">
                                                        <!-- data-bs-toggle="modal"
                                                        data-bs-target="#designer-order-upload"
                                                         -->

                                                        <!--  <input  type="submit" class="btn btn-form mx-3 with-arrow mt-10"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#designer-order-upload"> -->

                                                        <a href="#" class="btn btn-form mx-3 with-arrow mt-10 red-btn ">رفض</a>

                                                    </div>

                                                </h1>
                                                <p class="mt-4 modal-bottom-txt">سيتم ارسال تفاصيل تنفيذ المهمة الى المستخدم للقبول
                                                    او الرفض</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- zahid-designer order  end-->
    <!-- zahid-designer order-submitted  start-->
    <div class="modal page result" id="designer-order-submitted">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert"> المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile)}}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <!-- <img src="{{ asset('user/assets/icon/avatar.svg')}}" alt="avatar"> -->
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar">
                                                    </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4> أسم المصمم</h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end py-4 conditional-blur justify-content-between mob-margin">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                        </div>
                                        <div class="row align-items-end p-xs-0 conditional-blur justify-content-between">
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1"></div> -->
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-5">
                                            <div class="designer-text">
                                                <label class="form-label dot">الملاحظات</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between conditional-blur">
                                        <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">تم تقديم عرض السعر</h1>
                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 service-fee-zhd">
                                            <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                            <input type="text" class="form-control" readonly placeholder="750 ريال">
                                            <div class="service-fee-text text">
                                                <span>شامل رسوم الخدمة + قيمة الضريبة المضافة
                                                    تلقائياً</span>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                            <label class="form-label">تاريخ البداية</label>
                                            <input type="text" class="form-control" readonly placeholder="  01/01/2022">
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                            <label class="form-label">تاريخ التسليم</label>
                                            <input type="text" class="form-control" readonly placeholder="  01/01/2022 ">
                                        </div>
                                        <!-- <div class="row conditional-blur">
                                          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                              <label class="form-label">رفع ملف المجسم</label>
                                              <div class="upload-btn-wrapper">
                                                  <a class="btn btn-upload" href="{{ asset( @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                              </div>
                                          </div>
                                          </div> -->
                                        <div class="col-md-12">

                                            <h1 class="title text-center mt-5 no-border conditional-blur">
                                                <div class="">
                                                    <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-10 uplod-rev-btn" data-bs-toggle="modal" data-bs-target="#designer-order-upload">تم الارسال</a>
                                                    <a href="#" class="btn btn-form mx-3 with-arrow mt-10 red-btn ">رفض</a>


                                                </div>
                                            </h1>
                                            <p class="mt-4 modal-bottom-txt">سيتم ارسال تفاصيل تنفيذ المهمة الى المستخدم للقبول
                                                او الرفض</p>
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
    </div>
    <!-- zahid-designer order-submitted  end-->
    <!-- zahid-designer order upload  start-->
    <div class="modal page result" id="designer-order-upload">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert"> المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" alt="" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small ">11/01/2022 - 03:00PM
                                                    </div>

                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">

                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4> أسم المصمم</h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end p-xs-0  conditional-blur">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3 mob-margin">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">طلب
                                                قيد التنفيذ</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row mb-2 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <div class="service-fee-text text-center">
                                                                    <span>شامل رسوم الخدمة + قيمة الضريبة المضافة</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">

                                                            </div>
                                                            <div class="prog-outer wrapper al-center">
                                                                <div class="prog-inner"></div>


                                                            </div>
                                                            <div class="service-fee-text prog-fee">
                                                                <span> متبقي على تسليم الطلب 24 يوم 35 دقيقة 13
                                                                    ثانية</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row conditional-blur">
                                       <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                           <label class="form-label">رفع ملف المجسم</label>
                                           <div class="upload-btn-wrapper">
                                               <a class="btn btn-upload" href="{{ asset( @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                           </div>
                                       </div>
                                       </div> -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label dot">ملاحظات</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control designer-text-area " id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$ss->discription}}</textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="upload-btn-wrapper designer-upload">
                                                                <button class="btn btn-upload-designer "><img src="{{asset('user/assets/icons/upload-atachment.png')}}" alt="upload-img">
                                                                    <p>صور بصيغة STL,PNG,JPG</p>
                                                                </button>
                                                                <input type="file" id="" required name="myfile" />
                                                            </div>
                                                        </div>
                                                        <!-- <p class="mt-3" style="    text-align: center;
                                          ">متبقي على تسليم الطلب 24 يوم 35 دقيقة 13 ثانية</p> -->
                                                    </div>
                                                    <h1 class="title text-center mt-5 no-border conditional-blur">
                                                        <div class="">
                                                            <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-10" data-bs-toggle="modal" data-bs-target="#designer-review-upload">ارسال</a>
                                                            <a href="#" class="btn btn-form mx-3 with-arrow btn-uplod mt-10">الفاتورة</a>
                                                            <a href="#" class="btn btn-form mx-3 with-arrow mt-10 red-btn">رفض</a>


                                                        </div>
                                                    </h1>
                                                    <p class="mt-4  modal-bottom-txt">الرجاء التأكد من ارسال كافة الملفات لتجنب
                                                        تقديم بلاغ عليك</p>
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
        </div>
    </div>

    <!-- zahid-designer order  upload end-->

    <!-- zahid-designer review upload  start-->
    <div class="modal page result" id="designer-review-upload">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM
                                                    </div>

                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">

                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="userreq-blur review-star-blur">
                                            <!-- blur -->
                                            <div class="blur-star blur-bg " id="star-blur-scroll">
                                                <div class="blur-star-inner">
                                                    <div class="review-text">
                                                        <label class="form-label">تقييم المصمم</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>

                                                        <div class="rating">

                                                            <div class="star-reating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>

                                                        </div>
                                                        <div class="blur-star-bottom-btn">
                                                            <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-4">ارسال</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-blur-star-rating">

                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="profile tag-profile designer-order">
                                                        <a href="#profile">
                                                            <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                        <div class="star-profile-txt">
                                                            <span>مصمم</span>
                                                            <h4> أسم المصمم</h4>
                                                            <div class="star-reating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-end p-xs-0  conditional-blur mob-margin">

                                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">اختيار اللون</label>
                                                    <div class="color-circle-main">

                                                        <div class="blue-text">
                                                            <span> أبيض</span>
                                                        </div>
                                                        <div class="color-circle blue-border">

                                                        </div>
                                                        <div class="color-circle  gray-bg">

                                                        </div>
                                                        <div class="color-circle  gray-bg">

                                                        </div>
                                                        <div class="color-circle gray-bg">

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                    <label class="form-label">الكمية</label>
                                                    <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">المقاسات</label>
                                                    <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                    <label class="form-label">شكل الطباعة</label>
                                                    <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                    <label class="form-label">تقنية الطباعة</label>
                                                    <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                    <button class="btn btn-sky invert">
                                                        زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                    </button>
                                                </div>
                                                <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                        <label class="form-label">صور المجسم</label>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn btn-upload"><img src="http://127.0.0.1:8000/user/assets/icons/uploaded-img.svg" alt="upload-img"></button>
                                        </div>
                                    </div> -->

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="designer-text mt-5">
                                                        <label class="form-label dot">الملاحظات</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="review-text review-text-tog">
                                                        <label class="form-label">تقييم المصمم</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>
                                                        <div class="rating">
                                                            <div class="star-reating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">طلب
                                                قيد التنفيذ</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">

                                                        <div class="row mb-2 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                            <div class="prog-outer wrapper al-center ">
                                                                <div class="prog-inner full-prog"></div>
                                                            </div>
                                                            <div class="service-fee-text prog-fee">
                                                                <span>تم التسليم</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row conditional-blur">
                                          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                              <label class="form-label">رفع ملف المجسم</label>
                                              <div class="upload-btn-wrapper">
                                                  <a class="btn btn-upload" href="{{ asset( @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                              </div>
                                          </div>
                                          </div> -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="form-label dot">عموم الحاله الصحية</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$ss->discription}}</textarea>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="upload-btn-wrapper designer-upload">
                                                                    <button class="btn btn-upload-designer "><img src="{{asset('user/assets/icons/download-attachments.png')}}" alt="upload-img">
                                                                        <h5>تحميل المرفقات</h5>
                                                                    </button>
                                                                    <input type="file" id="" required name="myfile" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="review-text without-label review-text-tog">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>
                                                                    <div class="rating">
                                                                        <div class="star-reating">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="title text-center mt-5 no-border conditional-blur starbluerModal-btn-hide">
                                                        <div class="zhd-finished">
                                                            <a href="#star-blur-scroll" class="btn btn-form mx-3 with-arrow uplod-rev-btn mt-10 starbluerModal-btn">منتهي</a>

                                                        </div>
                                                    </h1>

                                                    <h1 class="title text-center mt-5 no-border conditional-blur show-footer-btns">
                                                        <div class="zhd-finished">
                                                            <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow uplod-rev-btn mt-10 starbluerModal-btn">تم
                                                                الارسال</a>
                                                            <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow pink-btn-bg mt-10 starbluerModal-btn">الفاتورة</a>
                                                            <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow red-btn mt-10 starbluerModal-btn" data-bs-toggle="modal" data-bs-target="#designer-bid-submission">تقديم بلاغ</a>
                                                            <!-- <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-10 starbluerModal-btn"  data-bs-toggle="modal" data-bs-target="#designer-bid-submission">تقديم بلاغ</a> -->


                                                        </div>
                                                    </h1>
                                                    <p class="mt-4 modal-bottom-txt">الرجاء التأكد من ارسال كافة الملفات لتجنب
                                                        تقديم بلاغ عليك</p>
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
        </div>
    </div>
    </div>


    <!-- zahid-designer review  upload end-->

    <!-- zahid-designer bid-submission  start-->
    <div class="modal page result" id="designer-bid-submission">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4> أسم المصمم</h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end p-xs-0  conditional-blur mob-margin">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                تقديم عرض سعر</h1>

                                            <div class="row mb-2 justify-content-between conditional-blur">
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                    <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                    <div class="service-fee-text text-center">
                                                        <span>شامل رسوم الخدمة + قيمة الضريبة المضافة</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ البداية</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ التسليم</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                </div>

                                            </div>

                                            <h1 class="title text-center mt-5 no-border conditional-blur">
                                                <div class="zhd-finished">
                                                    <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow uplod-rev-btn mt-10" data-bs-toggle="modal" data-bs-target="#designer-submit-quote">ارسال</a>
                                                    <a href="#" class="btn btn-form mx-3 with-arrow mt-10 red-btn">رفض</a>


                                                </div>
                                            </h1>
                                            <p class="mt-4  modal-bottom-txt">سيتم ارسال تفاصيل تنفيذ المهمة الى المستخدم للقبول
                                                او الرفض</p>
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
    </div>
    </div>
    </div>


    <!-- zahid-designer bid-submission end-->
    <!-- zahid-designer bid-rejected  start-->
    <div class="modal page result" id="designer-bid-rejected">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>


                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">

                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <!-- <div class="row">
                              <div class="col-md-12 ">
                                 <div class="profile tag-profile designer-order">
                                    <a href="#profile">
                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                    <div class="star-profile-txt">
                                       <span>مصمم</span>
                                       <h4> أسم المصمم</h4>
                                       <div class="star-reating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                                        <div class="row align-items-end p-xs-0  conditional-blur mob-margin">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">

                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-4">
                                                    <label class="form-label">سبب الرفض</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="    الوصف هنا .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">تم
                                                رفض عرض السعر</h1>

                                            <div class="row mb-2 justify-content-between conditional-blur">
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                    <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                    <div class="service-fee-text text-center">
                                                        <span>شامل رسوم الخدمة + قيمة الضريبة المضافة</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ البداية</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ التسليم</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                </div>

                                            </div>

                                            <h1 class="title text-center mt-5 no-border conditional-blur">
                                                <div class="zhd-finished">
                                                    <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-10" data-bs-toggle="modal" data-bs-target="#designer-information">طلباتي</a>

                                                </div>
                                            </h1>
                                            <p class="mt-4  modal-bottom-txt">طلب مرفوض من قبل المستخدم</p>
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
    </div>
    </div>
    </div>


    <!-- zahid-designer bid-rejected end-->


    <!-- zahid-designer information  start-->
    <div class="modal page result" id="designer-information">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile)}}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
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
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>


                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">

                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <!-- <div class="row">
                              <div class="col-md-12 ">
                                 <div class="profile tag-profile designer-order">
                                    <a href="#profile">
                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                    <div class="star-profile-txt">
                                       <span>مصمم</span>
                                       <h4> أسم المصمم</h4>
                                       <div class="star-reating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                                        <div class="row align-items-end p-xs-0  conditional-blur mob-margin">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center mt-5 no-border zhd-quote">معلومات المصمم</h1>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-4">
                                                    <label class="form-label">سبب الرفض</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="    الوصف هنا .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!--
                                       <div class="row mb-2 justify-content-between conditional-blur">
                                          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                             <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                             <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                          </div>
                                          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                             <label class="form-label">تاريخ البداية</label>
                                             <input type="text" class="form-control" id="order_date" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                          </div>
                                          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                             <label class="form-label">تاريخ التسليم</label>
                                             <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                          </div>

                                       </div> -->

                                            <h1 class="title text-center mt-5 no-border conditional-blur">
                                                <div class="zhd-finished">
                                                    <a href="#" class="btn btn-form mx-3 with-arrow mt-10">طلباتي</a>

                                                </div>
                                            </h1>
                                            <p class="mt-4  modal-bottom-txt">طلب مرفوض من قبل المصمم</p>
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
    </div>
    </div>
    </div>
    <!-- zahid-designer information end-->

    <!-- zahid-designer submit-quote  start-->
    <div class="modal page result" id="designer-submit-quote">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4> أسم المصمم</h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-end p-xs-0  conditional-blur mob-margin">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>

                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">تم
                                                تقديم عرض السعر</h1>

                                            <!-- blur -->
                                            <div class="blur-star blur-bg submit-quote-review d-block" id="star-blur-scroll">
                                                <div class="blur-star-inner">
                                                    <div class="review-text">
                                                        <label class="form-label">تقييم المصمم</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>

                                                        <div class="rating">

                                                            <div class="star-reating">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>

                                                        </div>
                                                        <!-- <div class="blur-star-bottom-btn">
                                                                        <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-4">ارسال</a>
                                                                    </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- blur -->

                                            <div class="row mb-2 justify-content-between conditional-blur blur">

                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                    <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                    <div class="service-fee-text">
                                                        <span>شامل رسوم الخدمة + قيمة الضريبة المضافة</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ البداية</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                    <label class="form-label">تاريخ التسليم</label>
                                                    <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                </div>

                                            </div>

                                            <h1 class="title text-center mt-5 no-border conditional-blur">
                                                <div class="zhd-finished">
                                                    <!-- <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow uplod-rev-btn mt-10">تم الارسال</a> -->
                                                    <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-4">ارسال</a>
                                                    <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-4 red-btn" data-bs-toggle="modal" data-bs-target="#designer-bid-rejected">رفض</a>


                                                </div>
                                            </h1>
                                            <p class="mt-4  modal-bottom-txt">سيتم ارسال تفاصيل تنفيذ المهمة الى المستخدم للقبول
                                                او الرفض</p>
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
    </div>
    </div>
    </div>


    <!-- zahid-designer submit-quote end-->

    <!-- ///////////////////////////////////// design modal start here ////////////////////////////////-->


    <div class="modal fade page" id="designModal" tabindex="-1" aria-labelledby="designLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">

                            <div class="modal-body">
                                <!-- header designer start here -->
                                <div class="toggle-overlay"></div>
                                <div class="content-wrapper hide-on-load">
                                    <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#about-us">
                                                            من نحن
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">ماهي
                                                            تقنية الـ 3D</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#services-section" class="nav-link">الخدمات</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">مجتمع المصممين</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                    </li>
                                                    <li class="mobile-menu">
                                                        <div class="left-side">
                                                            <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                                            @auth
                                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                            auth()->user()->name }}!</a>
                                                            @endauth
                                                            <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                                            <span>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                            </span>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            @auth
                                            <div class="left-side desktop-menu">

                                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                    {{-- @if (auth()->user()->profile != null)
                                                @if (@auth()->user()->profile == null)
                                                <div class="profile-img">
                                                    <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                            </div>
                                            @else
                                            <div class="profile-img">
                                                <img src="{{asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                                            </div>
                                            @endif
                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                    auth()->user()->name }}</a>
                                            --}}
                                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                {{-- @if (auth()->user()->profile != null) --}}
                                                @if (@auth()->user()->profile == null)
                                                <div class="profile profile-icon">
                                                    <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                                </div>
                                                @else
                                                <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
                                                @endif

                                                <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                        auth()->user()->name }}</a>

                                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                                                <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                                                    تسجيل خروج
                                                </a>
                                                <script type="text/javascript">
                                                    function logout(event) {
                                                        event.preventDefault();
                                                        var check = confirm("هل تريد حقا الخروج؟");
                                                        if (check) {
                                                            document.getElementById('logout-form').submit();
                                                        }
                                                    }
                                                </script>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf

                                                    <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                                                        Out</button>

                                                </form>
                                                <span class="social-icons">

                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                </span>
                                        </div>
                                        @else
                                        <div class="left-side">
                                            <a href="#login" data-bs-toggle="modal" class="register-icon border-bottom" data-bs-target="#loginModal">تسجيل دخول</a>
                                            <a href="#register" class="ms-auto register-icon border-bottom main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                                            <span class="social-icons">
                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                            </span>
                                        </div>
                                        @endauth
                                </div>
                                </nav>

                                <div id="wrapper" class="mobile-nav">
                                    <div id="sidebar-wrapper">
                                        <div class="area-brand">
                                            <a class="" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                        </div>
                                        <div class="mmnue">
                                            <ul class="sidebar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about-us">
                                                        من نحن
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">ماهي
                                                        تقنية الـ 3D</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#services-section" class="nav-link">الخدمات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                </li>
                                                @if(Auth::user())
                                                <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                                                <li class="nav-item pt-0">
                                                    <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                @else
                                                <li class="nav-item">

                                                    <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#register" class="nav-link dot main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                                                </li>
                                                @endif
                                                <li class="">
                                                    <div class="mobile-social-icon">

                                                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="page-content-wrapper">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-3 mobile-logo">

                                                    <div class="area-brand">
                                                        <a class="" href="#">
                                                            <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-9 mobile-pro-icon">
                                                    <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                                                    <div class="mobile-profile">


                                                        <a href="#" class="m-0"><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile) }}" class="profile-img" alt="avatar"></a>
                                                        @if(Auth::user())
                                                        <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                            Auth::user()->name }}!</a>
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- mobile menu start here -->


                                <!-- header designer end here -->

                                <div class="blue-bg">

                                    <section class="designer-sec" id="">

                                        <!-- <img src="{{asset('user/assets/images/design.png')}}" class="design-bg" class="img-fluid" alt=""> -->

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="design-txt">
                                                        <h1 class="designer-title">
                                                            مجتمع المصممين
                                                        </h1>
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                                                            تم
                                                            توليد هذا النص من مولد النص العربى،
                                                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                                            الأخرى
                                                            إضافة إلى زيادة عدد الحروف التى يولدها
                                                            التطبيق.</p>
                                                    </div>

                                                </div>
                                                @php
                                                $printing=App\Models\Printing::all();
                                                @endphp
                                                <div class="col-md-12">
                                                    <div class="designer-search-form">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="search-form">
                                                        <form id="serch_form_data" method="POST" action="{{ route('print.search.btn.title') }}">
                                                            <div class="row">
                                                                <div class="col-6 col-md-3 col-lg-2 mob-center">
                                                                    <div class="sort-btn">
                                                                        <button class="btn"> الترتيب حسب <i class="fa-solid fa-arrow-down"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-md-3 col-lg-2 mob-center">

                                                                    <div class="sort-btn">
                                                                        <button class="btn"> تقنية الطباعة <i class="fa-solid fa-arrow-down"></i></button>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-7 ps-0">

                                                                    <div class="search-input ">
                                                                        <input type="text" class="form-control" name="search" placeholder="البحث">
                                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>

                                                    </div>


                                                    <div class="btn-list">
                                                        @foreach ($printing as $item)
                                                        <button class="btn btn-trans search_btn" value="{{$item->name}}" id="{{ $item->name }}">{{ $item->name }}</button>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="design-card-main">
                                                <div id="get_search_data">

                                                </div>
                                                <div class="row" id="check">
                                                    @foreach($products as $product)

                                                    <div class="col-md-6 col-lg-4" id="{{$product->id}}">
                                                        <div class="design-card-inner">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="star-profile">
                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#">
                                                                            <div class="star-profile-icon">
                                                                                <img src="{{asset('assets/images/dashboard/1.png')}}" alt="">
                                                                            </div>
                                                                        </a>
                                                                        <div class="star-profile-txt">
                                                                            <span>مصمم</span>
                                                                            <h3>{{$product->user ? $product->user->name : ' '}}</h3>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6 m-auto">
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="javascript:void(0);" class="" data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                                                                <div class="design-card-body">
                                                                    <img src="{{$product->images ? asset('products/'.$product->images[0]) : ' '}}" class="design-img img-fluid" alt="">


                                                                    <div class="design-card-left-top">
                                                                        <p>{{$product->print_technology}}</p>

                                                                    </div>
                                                                    @php
                                                                      $software_type=[];
                                                                    $software=[];
                                                                      $software_type=json_decode($product->user_software);
                                                                      foreach($software_type as $item)
                                                                      {
                                                                       $software[] =App\Models\Software::where('name', $item)->first();
                                                                       }

                                                                    @endphp

                                                                    <div class="design-card-left-bottom">
                                                                        <div class="card-icons">
                                                                            @foreach($software as $soft)
                                                                                <a href="#">
                                                                                    <img src="{{ asset('upload/software/'.$soft->images)}}" class="img-fluid" alt="">

                                                                                 </a>
                                                                                 @endforeach

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="design-card-footer">
                                                                    <h4>{{$product->description}}
                                                                    </h4>
                                                                </div>
                                                        </div>

                                                    </div>
                                                    @endforeach


                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="design-card-inner">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="star-profile">
                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#">
                                                                            <div class="star-profile-icon">
                                                                                <img src="{{asset('assets/images/dashboard/1.png')}}" alt="">
                                                                            </div>
                                                                        </a>
                                                                        <div class="star-profile-txt">
                                                                            <span>مصمم</span>
                                                                            <h3>أسم المصمم</h3>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6 m-auto">
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="blurText"></div>
                                                </div>

                                                <!-- <div class="design-bottom-btn">
                                                    <button class="btn">المزيد</button>
                                                </div> -->
                                                <div class="design-bottom-btn">
                                                    <button type="button" class="btn">
                                                        المزيد
                                                    </button>
                                                </div>

                                    </section>

                                    <!-- design footer start here -->
                                    <section class="design-footer">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="footer-nav zhd-footer">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#about-us">
                                                                        من نحن
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">
                                                                        ماهي تقنية الـ 3D
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#services-section">الخدمات</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#contact-us">اتصل
                                                                        بنا</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <footer>
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="right">
                                                            <p>تصميم وتطوير شركة تيلرز</p>
                                                            <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.svg') }}" alt="tellers-logo"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-xl-4">
                                                        <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                                                    </div>
                                                    <div class="col-md-2 col-xl-4">
                                                        <div class="social">
                                                            <a href="#"><img src="{{ asset('user/assets/icons/twitter-white.svg') }}" alt="twitter"></a>
                                                            <a href="#"><img src="{{ asset('user/assets/icons/instagram-white.svg') }}" alt="instagram"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </footer>
                                        </div>
                                </div>
                                </footer>
                            </div>
                            </section>
                        </div>
                        <!-- design footer end here -->


                        <!-- disign section end here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- ///////////////////////////////////// design modal end here ////////////////////////////////-->

    <!-- ///////////////////////////////////////////////////////// design-view-inner designinnerModal start here /////////////////////////////////////////////// -->


    <div class="modal fade page" id="designinnerModal" tabindex="-1" aria-labelledby="designinnerLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">

                            <div class="modal-body">


                                <!-- header designer start here -->
                                <div class="toggle-overlay"></div>
                                <div class="content-wrapper hide-on-load">
                                    <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
                                        <div class="container-fluid mob-p-0">
                                            <a class="navbar-brand" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#about-us">
                                                            من نحن
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">ماهي
                                                            تقنية الـ 3D</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#services-section" class="nav-link">الخدمات</a>
                                                    </li>
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="#">مجتمع المصممين</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                    </li>
                                                    <li class="mobile-menu">
                                                        <div class="left-side">
                                                            <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                                            @auth
                                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                auth()->user()->name }}!</a>
                                                            @endauth
                                                            <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                                            <span>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                            </span>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            @auth
                                            <div class="left-side desktop-menu">

                                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                    {{-- @if (auth()->user()->profile != null)
                                                    @if (@auth()->user()->profile == null)
                                                    <div class="profile-img">
                                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                            </div>
                                            @else
                                            <div class="profile-img">
                                                <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                                            </div>
                                            @endif
                                            <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                        auth()->user()->name }}</a>
                                            --}}
                                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                                                {{-- @if (auth()->user()->profile != null) --}}
                                                @if (@auth()->user()->profile == null)
                                                <div class="profile profile-icon">
                                                    <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                                                </div>
                                                @else
                                                <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
                                                @endif

                                                <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                            auth()->user()->name }}</a>

                                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                                                <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                                                    تسجيل خروج
                                                </a>
                                                <script type="text/javascript">
                                                    function logout(event) {
                                                        event.preventDefault();
                                                        var check = confirm("هل تريد حقا الخروج؟");
                                                        if (check) {
                                                            document.getElementById('logout-form').submit();
                                                        }
                                                    }
                                                </script>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf

                                                    <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                                                        Out</button>

                                                </form>
                                                <span class="social-icons">

                                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                                </span>
                                        </div>
                                        @else
                                        <div class="left-side">
                                            <a href="#login" data-bs-toggle="modal" class="register-icon border-bottom" data-bs-target="#loginModal">تسجيل دخول</a>
                                            <a href="#register" class="ms-auto register-icon border-bottom main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                                            <span class="social-icons">
                                                <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                            </span>
                                        </div>
                                        @endauth
                                </div>
                                </nav>

                                <div id="wrapper" class="mobile-nav">
                                    <div id="sidebar-wrapper">
                                        <div class="area-brand">
                                            <a class="" href="#">
                                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                            </a>
                                        </div>
                                        <div class="mmnue">
                                            <ul class="sidebar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="page" href="/">الرئيسية</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about-us">
                                                        من نحن
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">ماهي
                                                        تقنية الـ 3D</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#services-section" class="nav-link">الخدمات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                                                </li>
                                                @if(Auth::user())
                                                <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                                                <li class="nav-item pt-0">
                                                    <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                                @else
                                                <li class="nav-item">

                                                    <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#register" class="nav-link dot main-register" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                                                </li>
                                                @endif
                                                <li class="">
                                                    <div class="mobile-social-icon">

                                                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="page-content-wrapper">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-3 mobile-logo">

                                                    <div class="area-brand">
                                                        <a class="" href="#">
                                                            <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-9 mobile-pro-icon">
                                                    <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                                                    <div class="mobile-profile">


                                                        <a href="#" class="m-0"><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile) }}" class="profile-img" alt="avatar"></a>
                                                        @if(Auth::user())
                                                        <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{
                                                                Auth::user()->name }}!</a>
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- mobile menu start here -->


                                <!-- header designer end here -->


                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <button class="ahs-profile-plus-btn plus-bton circle-plus-icon" data-bs-toggle="modal" data-bs-target="#productaddformModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill svg-plus-icon" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                        </svg>
                                        <!-- <i class="fa-solid fa-circle-plus"></i> -->
                                        <!-- <i class="fa fa-plus-circle fa-lg ahs-profile-plus"></i> -->
                                        <span>إضافة منتج</span>
                                    </button>
                                </div>


                                <section class="designer-sec designer-sec-1" id="">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="designer-profile">
                                                    @if(@auth()->user()->profile == null)
                                                    <img id="blah" src="{{ asset('/user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important;">
                                                    <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                                                    @else
                                                    <img id="blah" src="{{ asset('storage/' . auth()->user()->profile) }}" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important;">
                                                    <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                                                    @endif
                                                    <!-- <img id="blah"
                                                            src="{{ asset('/user/assets/icons/edit-avatar.svg')}}"
                                                            class="mx-auto d-block imageupload" width="100" alt="avatar"
                                                            style="clip-path: circle() !important;">
                                                        <input id="imgInp" type="file" class="chose" name="profile"
                                                            accept="image/*" style="display: none;">
														-->

                                                    <!-- <button class="btn btn-blue">مصمم</button> -->
                                                    @if(@auth()->user()->name == null)
                                                    <button class="btn btn-blue">مصمم</button>
                                                    @else
                                                    <button class="btn btn-blue">
                                                        {{-- المصمم --}}
                                                        {{ auth()->user()->name }}
                                                    </button>
                                                    @endif

                                                    <div class="star-reating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="design-txt designer-sec-1-title">
                                                        <h1 class="designer-title ">
                                                            أسم المصمم
                                                        </h1>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-12">
                                                <div class="designer-search-form">
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                        $printing=App\Models\Printing::all();
                                        @endphp
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="search-form">
                                                    <form id="serch_form_data2" method="POST" action="{{ route('print.search.btn.title') }}">
                                                        <div class="row">
                                                            <div class="col-6 col-md-3 col-lg-2 mob-center">
                                                                <div class="sort-btn">
                                                                    <button class="btn"> الترتيب حسب <i class="fa-solid fa-arrow-down"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-3 col-lg-2 mob-center">

                                                                <div class="sort-btn">
                                                                    <button class="btn"> تقنية الطباعة <i class="fa-solid fa-arrow-down"></i></button>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-7 ps-0">

                                                                <div class="search-input ">
                                                                    <input type="text" class="form-control" name="search" placeholder="البحث">
                                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>

                                                </div>


                                                <div class="btn-list">
                                                    @foreach ($printing as $item)
                                                    <button class="btn btn-trans search_btn2" value="{{$item->name}}" id="{{ $item->name }}">{{ $item->name }}</button>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <!-- here is cards -->
                                        <!--  <button class="ahs-profile-plus-btn disabled circle-plus-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill svg-plus-icon" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                              </svg>
                                            <span>
                                            إضافة منتج
                                        </span>
                                     </button> -->
                                        <div class="design-card-main">

                                            <div class="row padd-30" id="all_products">
                                                <div id="get_search_data2">

                                                </div>
                                                @foreach($products_d as $product_d)

                                                <div class="col-md-6 col-lg-4" id="{{$product_d->id ?? ''}}">
                                                    <div class="design-card-inner">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="star-profile">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#">
                                                                        <!-- <div class="star-profile-icon">
                                                                                <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                                                    alt="">
                                                                            </div> -->
                                                                    </a>
                                                                    <div class="star-profile-txt">
                                                                        <!-- <span>مصمم</span>
                                                                            <h3> {{$product_d->user ? $product_d->user->name : ' '}}</h3> -->
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="col-md-6 m-auto">
                                                                <!-- <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div> -->
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="" data-bs-toggle="modal" data-bs-target="#productdesignModal">

                                                            <div class="design-card-body">

                                                                <img src="{{$product_d->images ? asset('products/'.$product_d->images[0]) : ' '}}" class="design-img img-fluid" alt="">
                                                                <div class="design-card-left-top">
                                                                    <p>{{$product_d->print_technology}}</p>
                                                                </div>
                                                                @php
                                                                $software_type=[];
                                                                        $software=[];
                                                                      $software_type=json_decode($product_d->user_software);
                                                                      foreach($software_type as $item)
                                                                      {
                                                                       $software[] =App\Models\Software::where('name', $item)->first();
                                                                       }
                                                              @endphp
                                                              <div class="design-card-left-bottom">
                                                                <div class="card-icons">
                                                                    @foreach($software as $soft)
                                                                    <a href="#">
                                                                        <img src="{{ asset('upload/software/'.$soft->images)}}" class="img-fluid" alt="">
                                                                    </a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="design-card-footer products-cards-footer">
                                                                <h4>{{$product_d->description}}
                                                                </h4>

                                                                <form action="{{ route('product.destroy.designer',
                                                                $product_d) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')

                                                                    <button type="submit" class="btn btn-light"><i class="fa-solid fa-trash-can design-card-delete-icon"></i></button>
                                                                </form>
                                                            </div>
                                                    </div>

                                                </div>
                                                @endforeach


                                            </div>

                                        </div>


                                </section>

                                <section class="contact design-footer design-1-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul class="footer-nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page" href="/">الرئيسية</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#about-us">
                                                                    من نحن
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">
                                                                    ماهي تقنية الـ 3D
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#services-section">الخدمات</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">مجتمع المصممين</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#contact-us">اتصل بنا</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <footer>
                                            <div class="row">
                                                <div class="col-md-5 col-xl-4">
                                                    <div class="right">
                                                        <p>تصميم وتطوير شركة تيلرز</p>
                                                        <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.png') }}" alt="tellers-logo"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-xl-4">
                                                    <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                                                </div>
                                                <div class="col-md-2 col-xl-4">
                                                    <div class="social">
                                                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.png') }}" alt="twitter"></a>
                                                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.png') }}" alt="instagram"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </div>
                            </div>
                            </footer>
                        </div>
                        </section>

                        <!-- design footer end here -->


                        <!-- disign section end here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- ///////////////////////////////////////////////////////// design-view designinnerModal end here /////////////////////////////////////////////// -->

    <!-- ///////////////////////////////////////////////////////// product design productdesignModal end here /////////////////////////////////////////////// -->

    <div class="modal fade page" id="productdesignModal" tabindex="-1" aria-labelledby="productdesignLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">

                            <div class="modal-body">
                                <div class="container ps-lr-0">
                                    <div class="modal-header border-0">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div>
                                            <span class="outline dot">اهلاً وسهلاً بكم</span>
                                            <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">المنتجات<span class="inner-line"></span></span></h1>
                                        </div>

                                        <button class="ahs-profile-plus-btn plus-bton circle-plus-icon" data-bs-toggle="modal" data-bs-target="#productaddformModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill svg-plus-icon" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                            </svg>
                                            <!-- <i class="fa-solid fa-circle-plus"></i> -->
                                            <!-- <i class="fa fa-plus-circle fa-lg ahs-profile-plus"></i> -->
                                            <span>إضافة منتج</span>
                                        </button>
                                        <!-- <div class="add-btn">
                                            <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#productaddModal">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>

                                            <span>
                                                إضافة منتج
                                            </span>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- product design body  start here-->

                                <section class="designer-sec designer-sec-1 productdesign-main pt-0" id="">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="design-card-main">

                                                    <div class="row padd-30">
                                                        @foreach($products_d as $product_d)
                                                        @if($product_d->verify == 1
                                                        )

                                                        <div class="col-md-6 col-lg-4" id="{{$product_d->id ?? ''}}">
                                                            <div class="design-card-inner">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="star-profile">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#">
                                                                                <div class="star-profile-icon">
                                                                                    <img src="{{asset('assets/images/dashboard/1.png')}}" alt="">
                                                                                </div>
                                                                            </a>
                                                                            <div class="star-profile-txt">
                                                                                <span>مصمم</span>
                                                                                <h3> {{$product_d->user ? $product_d->user->name : ' '}}</h3>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6 m-auto">
                                                                        <div class="star-reating">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="javascript:void(0);" class="" data-bs-toggle="modal" data-bs-target="#productaddModal">

                                                                    <div class="design-card-body">
                                                                        <img src="{{$product_d->images ? asset('products/'.$product_d->images[0]) : ''}}" class="design-img img-fluid" alt="">
                                                                        <div class="design-card-left-top">
                                                                            <p>{{$product_d->print_technology}}</p>
                                                                        </div>
                                                                        <div class="design-card-left-bottom">
                                                                            <div class="card-icons">
                                                                                <a href="#">
                                                                                    <!--  <img src="{{ asset('user/assets/images/ai.png') }}"
                                                                            class="img-fluid" alt=""> -->
                                                                                </a>
                                                                                <a href="#">
                                                                                    <!-- <img src="{{ asset('user/assets/images/dn.png') }}"
                                                                            class="img-fluid" alt=""> -->
                                                                                </a>
                                                                                <a href="#">
                                                                                    <!--  <img src="{{ asset('user/assets/images/in.png') }}"
                                                                            class="img-fluid" alt=""> -->
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="design-card-footer">
                                                                        <h4>{{$product_d->description}}
                                                                        </h4>
                                                                    </div>
                                                            </div>

                                                        </div>
                                                        @else
                                                        @endif

                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- product design body  end here-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///////////////////////////////////////////////////////// product design productdesignModal end here /////////////////////////////////////////////// -->


    <!-- ///////////////////////////////////////////////////////// product design productaddModal start here /////////////////////////////////////////////// -->
    <div class="wrapper al-center">
        <div class="modal fade page register" id="productaddModal" tabindex="-1" aria-labelledby="productaddLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="modal-body">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div>
                                            <span class="outline dot">اهلاً وسهلاً بكم</span>
                                            <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">المنتجات<span class="inner-line"></span></span></h1>

                                        </div>
                                        <button class="ahs-profile-plus-btn disabled circle-plus-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill svg-plus-icon" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                            </svg>
                                            <!-- <i class="fa fa-plus-circle fa-lg ahs-profile-plus"></i> -->
                                            <span>
                                                إضافة منتج
                                            </span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{route('addProduct')}}" class="almuntjat-form">
                                        @csrf
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot"></div>
                                                <p class="sub-heading-box__heading b2 sub-heading-box__heading--b">
                                                    صور المنتج</p>
                                            </div>
                                            <!-- <label for="almuntjat-form__img" class="almuntjat-form__img-label">
                                                    <p class="almuntjat-form__img-label-text">إضافة</p>
                                                </label> -->
                                            <div class="col-md-2">
                                                <div class="product-add-upload">
                                                    <p class="">إضافة</p>
                                                    <span class="camera-icon"><i class="fa fa-camera"></i></span>
                                                </div>
                                            </div>

                                            <!-- <input type="file" name="almuntjat-form__img" id="almuntjat-form__img" class="almuntjat-form__img-input"> -->
                                        </div>
                                        <!-- img input end -->
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot"></div>
                                                <p class="sub-heading-box__heading sub-heading-box__heading--b">العنوان
                                                </p>
                                            </div>
                                            <input type="text" class="almuntjat-form__input form-control" placeholder="الاسم هنا .." name="title">
                                        </div>
                                        <!-- alunwan end -->
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot"></div>
                                                <p class="sub-heading-box__heading sub-heading-box__heading--b">الوصف
                                                </p>
                                            </div>
                                            <textarea placeholder="الوصف هنا .." name="description" value="" id="almuntjat-form__wasaf" class="almuntjat-form__wasaf-input form-control"></textarea>
                                        </div>
                                        <div class="form-inner-wrapper wrapper jst-btw">
                                            <div class="almuntjat-form__box ">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        تقنية الطباعة</p>
                                                </div>
                                                <div class="input-holder">
                                                    <!-- <input type="text" placeholder="كلمة المرور هنا .." class="almuntjat-form__input">
                                                    <img src="assets/images/arrow-5.png" alt="" class="input-holder__img"> -->
                                                    <select class="form-select a" required name="print_technology">
                                                        <option selected disabled>اختيار التقنية</option>
                                                        <option>اختيار التقنية</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        البرامج المستخدم</p>
                                                </div>
                                                <div class="input-holder">
                                                    <!-- <input type="text" placeholder="اختيار التقنية" class="almuntjat-form__input">
                                                    <img src="assets/images/arrow-5.png" alt="" class="input-holder__img"> -->
                                                    <select class="form-select b" required name="software">
                                                        <option selected disabled>اختيار التقنية</option>
                                                        <option>اختيار التقنية</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        الألوان</p>
                                                </div>
                                                <div class="input-holder">
                                                    <!-- <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                    <img src="assets/images/arrow-5.png" alt="" class="input-holder__img"> -->
                                                    <select class="form-select c" required name="color">
                                                        <option selected disabled>اختاير البرامج المستخدمة</option>
                                                        <option>اختاير البرامج المستخدمة</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        المقاسات</p>
                                                </div>
                                                <div class="input-holder">
                                                    <!-- <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                    <img src="assets/images/arrow-5.png" alt="" class="input-holder__img"> -->
                                                    <select class="form-select d" required name="size">
                                                        <option selected disabled>اختاير البرامج المستخدمة</option>
                                                        <option>اختاير البرامج المستخدمة</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="almuntjat-form-error">
                                            <i class="fa-solid fa-triangle-exclamation"></i> بعد إضافة المنتج سيذهب الى
                                            الإدارة للمراجعة للقبول أو الرفض
                                        </div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#productaddformModal" class="almuntjat-form__btn m-btn">
                                            إضافة
                                        </button>

                                        <p class="almuntjat-form__text">
                                            إضافة منتج جديد
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///////////////////////////////////////////////////////// product design productaddModal end here /////////////////////////////////////////////// -->


    <!-- ///////////////////////////////////////////////////////// product design productaddformModal start here /////////////////////////////////////////////// -->
    <div class="wrapper al-center">
        <div class="modal fade page register" id="productaddformModal" tabindex="-1" aria-labelledby="productaddformLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 p-0">

                                <div class="modal-body">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div>
                                            <span class="outline dot">اهلاً وسهلاً بكم</span>
                                            <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">المنتجات<span class="inner-line"></span></span></h1>

                                        </div>
                                        <span class="productadd-top-span">

                                        </span>

                                    </div>
                                    @php
                                    $printings=App\Models\Printing::all();
                                    $softwares=App\Models\Software::all();
                                    $sizes=App\Models\Size::all();
                                    $colors=App\Models\Color::all();
                                    @endphp
                                    <form method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- <div class="almuntjat-form-error error-red-bg">
                                            <img src="{{ asset('user/assets/icons/message-icon.png') }}"
                                                class="message-error-icon img-fluid" alt=""> بعد إضافة المنتج سيذهب الى
                                            الإدارة للمراجعة للقبول أو الرفض
                                        </div> -->
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot add-red-dot"></div>
                                                <p class="sub-heading-box__heading b2 sub-heading-box__heading--b">
                                                    صور المنتج</p>
                                            </div>
                                            <!-- <label for="almuntjat-form__img" class="almuntjat-form__img-label">
                                                    <p class="almuntjat-form__img-label-text">إضافة</p>
                                                </label> -->
                                            <div class="row">

                                                <div class="col-auto">
                                                    <div class="product-add-upload">
                                                        <!-- <img src="{{ asset('user/assets/images/cleancard3.png') }}" class="img-fluid" alt=""> -->
                                                        <p class="">إضافة</p>
                                                        <span class="camera-icon add-camera-icon">
                                                            <input type="file" name="images[]" multiple="" style="
  opacity: 0;">
                                                            <i class="fa fa-camera"></i>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <input type="file" name="almuntjat-form__img" id="almuntjat-form__img" class="almuntjat-form__img-input"> -->

                                        </div>
                                        <!-- img input end -->
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot add-red-dot"></div>
                                                <p class="sub-heading-box__heading sub-heading-box__heading--b">العنوان
                                                </p>
                                            </div>
                                            <input type="text" class="almuntjat-form__input form-control" placeholder="الاسم هنا .." name="title">
                                        </div>
                                        <!-- alunwan end -->
                                        <div class="almuntjat-form__input-wrapper">
                                            <div class="sub-heading-box">
                                                <div class="red-dot add-red-dot"></div>
                                                <p class="sub-heading-box__heading sub-heading-box__heading--b">الوصف
                                                </p>
                                            </div>
                                            <!-- <label for="almuntjat-form__wasaf" class="almuntjat-form__wasaf-label"></label> -->
                                            <textarea placeholder="الوصف هنا .." name="description" id="almuntjat-form__wasaf" class="almuntjat-form__wasaf-input form-control"></textarea>
                                        </div>
                                        <div class="form-inner-wrapper wrapper jst-btw">
                                            <div class="almuntjat-form__box ">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot add-red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        تقنية الطباعة</p>
                                                </div>

                                                <div class="input-holder">

                                                    <select class="form-control" data-placeholder="Выберите теги" name="print_technology">
                                                        @foreach($printings as $printing)
                                                        <option value="{{ $printing->name }}">{{ $printing->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot add-red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        البرامج المستخدم</p>
                                                </div>
                                                <div class="input-holder" id="select-product-parent">

                                                    <select class="form-select select-product" name="software[]" multiple aria-label="Default select example">
                                                        @foreach($softwares as $software)
                                                        <option value="{{ $software->name }}">{{ $software->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot add-red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        الألوان</p>
                                                </div>
                                                <div class="input-holder">

                                                    <select class="form-control" data-placeholder="Выберите теги" name="color">
                                                        @foreach($colors as $color)
                                                        <option value="{{ $color->name }}">{{ $color->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form__box">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot add-red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">
                                                        المقاسات</p>
                                                </div>
                                                <div class="input-holder">

                                                    <select class="form-control" data-placeholder="Выберите теги" name="size">
                                                        @foreach($sizes as $size)
                                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="almuntjat-form__box switch">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">تفعيل
                                                        المنتج</label>
                                                </div>
                                                <div class="sub-heading-box">
                                                    <p>تفعيل أو تعطيل ظهور المنتج لا يتطلب موافقة من الإدارة</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="almuntjat-form-error">
                                            <i class="fa-solid fa-triangle-exclamation"></i> بعد إضافة المنتج سيذهب الى
                                            الإدارة للمراجعة للقبول أو الرفض
                                        </div>
                                        <div class="productadd-btm-btn">
                                            <input type="submit" class="almuntjat-form__btn m-btn product-sub-btn" value="submit">
                                            <input type="button" class="almuntjat-form__btn m-btn product-sub-btn" value="تعديل">
                                            <!-- <button type="button" class="ahs-profile-plus-btn productadd-top-btn show-bg-pink change-zhd">
                                            تعديل
                                        </button> -->
                                        </div>

                                        <p class="almuntjat-form__text">
                                            تعديل بيانات المنتج
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ///////////////////////////////////////////////////////// product design productaddformModal end here /////////////////////////////////////////////// -->

    <div class="modal fade page register" id="financialOperations" tabindex="-1" aria-labelledby="financialOperationsLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0" style="padding: 4em 0 !important">
                                <div class=" ahs-member-model-box">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class=" ahs-member-model-box">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right" style="color: black;">
                                        <span class="btm-line"></span><span class="inner-line"></span> العمليات المالية
                                    </h1>
                                </div>
                                <div class="profile ahs-member-model-box2">
                                    <button class="btn btn-sky edit-profile edit-profile--ahs">المنتجات</button>
                                    <button class="btn btn-sky membership-edit">تعديل</button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="profile wrapper al-center jst-center">
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar" style="height:100px; width:100px; border-radius: 50%">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:100px; width:100px; border-radius: 50%">
                                    </a> @endif
                                </div>

                                <div class="ahs-form-box1-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        ال

                                    </button>
                                </div>
                                <div class="wrapper al-center ahs-form-box1">
                                    <span class="ahs-form-head1"> الرصيد الحالي </span>
                                    <span class="ahs-form-head2"> 750 ريال </span>
                                    <button data-bs-toggle="modal" data-bs-target="#financialOperations2" class="m-btn mujtmah-box-btn ml-3 d-contents">
                                        <img src="{{asset('user/assets/images/ar.png')}}" alt="" class="ahs-form-img1">
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 wrapper jst-center">
                                        <div class="star-reating star-s-30">
                                            <i class="fa-solid fa-star star-active  ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="medical-services" role="tabpanel">
                                                <div class="row">
                                                    <div class="nav-link">
                                                        <div class="col-md-12">
                                                            <div data-id='' class="request-box editProduct">
                                                                <div class="heading">
                                                                    <i class="fa fa-circle-minus heading__minus" aria-hidden="true"></i>
                                                                    <h5>رقم الطلب:</h5>
                                                                    <span>307</span>
                                                                </div>
                                                                <div class="data">
                                                                    <p>حالة الطلب:</p>
                                                                    <span>تحت المراجعة</span>
                                                                    <p>نوع الطلب:</p>
                                                                    <span>سحب أموال</span>
                                                                    <p>المبلغ المطلوب:</p>
                                                                    <span>750 ريال</span>
                                                                </div>
                                                                <span class="dateTime small">11/01/2022 - 03:00PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="medical-services" role="tabpanel">
                                                <div class="row">
                                                    <div class="nav-link">
                                                        <div class="col-md-12">
                                                            <div data-id='' class="request-box editProduct">
                                                                <div class="heading">
                                                                    <i class="fa-solid fa-circle-plus heading__plus"></i>
                                                                    <h5>رقم الطلب:</h5>
                                                                    <span>304</span>
                                                                </div>
                                                                <div class="data">
                                                                    <p>حالة الطلب:</p>
                                                                    <span>تحت المراجعة</span>
                                                                    <p>نوع الطلب:</p>
                                                                    <span>سحب أموال</span>
                                                                    <p>المبلغ المطلوب:</p>
                                                                    <span>750 ريال</span>
                                                                </div>
                                                                <span class="dateTime small">11/01/2022 - 03:00PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-action mb-5">
                                    <button class="btn btn-form mx-3 with-arrow" type="submit">سحب أموال</button>
                                    <p class="">يتفعل هذا الخيار في حال كان لديك رصيد</p>
                                    <p class="d-none">هناك طلب جاري معالجته</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade page register" id="financialOperations2" tabindex="-1" aria-labelledby="financialOperations2Label" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0" style="padding: 4em 0 !important">
                                <div class=" ahs-member-model-box">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class=" ahs-member-model-box2">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right" style="color: black;">
                                        <span class="btm-line"></span><span class="inner-line"></span> طلب سحب أموال
                                    </h1>
                                </div>
                                <div class="profile ahs-member-model-box2">
                                    <button class="btn btn-sky edit-profile edit-profile--ahs">المنتجات</button>
                                    <button class="btn btn-sky membership-edit">تعديل</button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="profile wrapper al-center jst-center">
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar" style="height:100px; width:100px; border-radius: 50%">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:100px; width:100px; border-radius: 50%">
                                    </a> @endif
                                </div>

                                <div class="ahs-form-box1-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                </div>
                                <div class="wrapper al-center ahs-form-box1">
                                    <span class="ahs-form-head1"> الرصيد الحالي </span>
                                    <span class="ahs-form-head2"> 750 ريال </span>
                                    <img src="{{asset('user/assets/images/ar.png')}}" alt="" class="ahs-form-img1">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 wrapper jst-center">
                                        <div class="star-reating star-s-30">
                                            <i class="fa-solid fa-star star-active  ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                            <i class="fa-solid fa-star star-active ahs-star"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-body">
                                <form class="gy-4 gx-5" method="post">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                            <label class="form-label dot">المبلغ المطلوب</label>
                                            <input type="text" class="form-control  " placeholder="المبلغ .." value="">
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                            <label class="form-label dot">اسم صاحب الحساب</label>
                                            <input type="text" class="form-control " placeholder="اسم صاحب الحساب هنا .." value="">
                                        </div>
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                            <label class="form-label dot">اسم البنك</label>
                                            <input type="text" name="" class="form-control  " placeholder="اسم البنك .." value="">
                                        </div>
                                    </div>
                                    <div class="row  mb-5">
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                            <label class="form-label dot">الآيبان</label>
                                            <input type="text" name="" class="form-control  " placeholder="الآيبان" value="">
                                        </div>

                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4 ahs-from-box">
                                            <label class="form-label dot">رقم الجوال</label>
                                            <input type="" name="" class="form-control " placeholder="رقم الجوال هنا .." value="">
                                            <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                        </div>
                                    </div>
                                    <div class="form-action mb-5">
                                        <button class="btn btn-form mx-3 with-arrow " type="submit">ارسال</button>
                                        <p>عند ارسال طلب لا يمكن انشاء طلب آخر حتى تتم معالجة طلبك الحالي</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade page result animate__animated animate__fadeInLeft" id="userRequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
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
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب :</span>
                                            <span class="id" id="order_no3"></span>
                                            <!-- <span class="id">{{@$public->id ?? ''}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime" id="order_date3"></div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small padd-t-40"> {{@$public->created_at}} </div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row  p-xs-0 align-items-end  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" value="" placeholder=".. رقم الهاتف هنا" readonly="" id="order_qty3" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" value="" placeholder=".. الايميل هنا" readonly="" id="order_size3" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 mtop-">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" id="order_print3" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" id="order_format3" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert" data-bs-toggle="modal" data-bs-target="#cleanshotModal">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="order_note3" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="payment pay credit-payment d-none" id="payment">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ asset('user/assets/images/mada-logo.svg') }}" alt="">
                                                        <p>مدى</p>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    </label>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        <img src="{{ asset('user/assets/images/masterCard.svg') }}" alt="">
                                                        <p>فيزا وماستر كارد</p>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        <img src="{{ asset('user/assets/images/apple-pay.svg') }}" alt="">
                                                        <p>آبل باي</p>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    </label>
                                                </div>
                                            </div>
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 conditional-blur design-payment-blur blur">
                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}

                                                        @php
                                                        $id = Session::get('order_id');
                                                        $user_data=App\Models\Perposal::where('order_id',$id)->first();
                                                        @endphp
                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{$user_data->price_model ?? ''}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{$user_data->date ?? ''}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{$user_data->validtill ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="wrapper jst-center userReq-btn-box">
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--a credit-btn-blur-show">قبول
                                                                <!--  credit-btn-blur-show -->
                                                            </button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--b toggle_button" id="{{ $id }}">رفض
                                                                <!--  data-bs-toggle="modal"
                                                                data-bs-target="#user3RequestModal" ye rafuse pr lgi hoi thi id -->
                                                            </button>
                                                            <a href="" id="web_pdf"> <button class="userReq-btn-box__btn userReq-btn-box__btn--c mgl-0 ">عرض
                                                                    السعر</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="userreqFormBtn-box">
                                                        <button class="btn btn-form paying-off-btn   show-order-agaim  disabled toggle_button1 " id="{{ $id }}" data-bs-toggle="modal" data-bs-target="#user2RequestModal">
                                                            طلباتي
                                                        </button>
                                                        <p class="userreqFormBtn-box__text">سيتم تحديث حالة الطلب من قبل
                                                            المصمم</p>
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
            </div>
        </div>
    </div>
    {{-- user request modal end --}}
    <div class="modal fade page" id="user2RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div>
                                    <span class="outline dot">أكثر 20 خدمة مختلفة</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line"><span class="inner-line"></span>الخدمات العامة
                                        </span>
                                    </h1>
                                </div>
                                <div class="profile">
                                    <button class="btn btn-sky profile-btn invert">
                                        مستخدم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>

                            <div class="modal-body">
                                <div>

                                    <div class="carousel-inner">

                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="submitted-data">
                                                    <h6>رقم الطلب</h6>

                                                    <h1></h1>

                                                    <h1>406</h1>

                                                    <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> رفع الطلب</p>
                                                    <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">تقديم عرض سعر من قبل المصمم</p>
                                                    <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> الدفع</p>
                                                    <!-- <span>سيتم تحديث حالة الطلب من قبل الإدارة</span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-action designer-btn">
                                                    <!-- data-bs-toggle="modal" data-bs-target="#publicServiesFinalModal"  / carousel-next-icon-show-->
                                                    <button class="btn btn-form mx-3 with-arrow carousel-next-icon-show" type="submit" data-bs-toggle="modal" data-bs-target="#user3RequestModal">تفاصيل الطلب</button>
                                                    <p>تم رفع الطلب بنجاح</p>
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
        </div>
    </div>
    {{-- user 2 request modal end --}}
    <div class="modal fade page result" id="user3RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small padd-t-40"></div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row align-items-end  p-xs-0  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-4">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 ">
                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}
                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                        </div>
                                                        <div class="prog-box mb-5">
                                                            <h6 class="prog-box__heading">مدة التنفيذة</h6>
                                                            <div class="prog-outer prog-outer--b wrapper al-center">
                                                                <div class="prog-inner"></div>
                                                            </div>
                                                            <p class="prog-box__para">متبقي على تسليم الطلب 24 يوم 35
                                                                دقيقة 13 ثانية</p>
                                                        </div>
                                                        <div class="bill-click-show">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label dot">عموم الحاله
                                                                        الصحية</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <textarea class="form-control text-area-input" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly=""></textarea>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="upload-btn-wrapper designer-upload">
                                                                        <button class="btn btn-upload-designer"><img src="{{asset('user/assets/icons/download-attachments.png')}}" alt="upload-img">
                                                                            <h5>تحميل المرفقات</h5>
                                                                        </button>
                                                                        <input type="file" id="" required="" name="myfile">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="almuntjat-form-error almuntjat-form-error-2">
                                                            <img src="{{ asset('/user/assets/images/warning.png')}}" alt="" class="almuntjat-form-error__img">في حال حدم التزام المصمم بالخدمة المقدمة لك، الرجاء تقديم بلاغ ..
                                                        </div>

                                                        <div class="wrapper jst-center userReq-btn-box userReq-btn-box--a bill-click-hide">
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--d bill-btn">الفاتورة</button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--e mgl-0" data-bs-toggle="modal" data-bs-target="#user4RequestModal">تقديم بلاغ</button>
                                                        </div>
                                                        <div class="wrapper jst-center userReq-btn-box userReq-btn-box--a bill-click-show">
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--d orange-bg">انهاء
                                                                الخدمة</button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--d ">الفاتورة</button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--e mgl-0">تقديم بلاغ</button>
                                                            <!--  data-bs-toggle="modal"
                                                                data-bs-target="#user6RequestModal" ye id is button pr lgi hoi thi -->
                                                        </div>
                                                        <p class="userreqFormBtn-box__text userreqFormBtn-box__text--a">
                                                            تمت عملية الدفع بنجاح</p>
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
            </div>
        </div>
    </div>
    </div>
    {{-- user 3 requestmodal end --}}
    <div class="modal fade page result" id="user4RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
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
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row  p-xs-0  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert" data-bs-toggle="modal" data-bs-target="#user5RequestModal">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>

                                            <div class="col-md-12  userreq-blur">
                                                <!-- blur -->

                                                <div class="blur-star blur-bg blur-bg--a d-block" id="star-blur-scroll">
                                                    <div class="blur-star-inner">
                                                        <div class="review-text">
                                                            <label class="form-label">تقييم المصمم</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>

                                                            <div class="rating">

                                                                <div class="star-reating">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- blur  -->
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 blur blur-star-rating">

                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}
                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                        </div>
                                                        <div class="almuntjat-form-error almuntjat-form-error-2">
                                                            <img src="{{ asset('/user/assets/images/warning.png')}}" alt="" class="almuntjat-form-error__img"> بعد إضافة
                                                            المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                                        </div>
                                                    </div>
                                                    <div class="userreqFormBtn-box">
                                                        <button class="btn btn-form send-btn">
                                                            ارسال
                                                        </button>
                                                        <p class="userreqFormBtn-box__text">هل انت متأكد من تقديم بلاغ ؟
                                                        </p>
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
            </div>
        </div>
    </div>
    {{-- user 4 requestmodl end --}}
    <div class="modal fade page result" id="user5RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
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
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="profile tag-profile designer-order">
                                                    <a href="#profile">
                                                        <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                    <div class="star-profile-txt">
                                                        <span>مصمم</span>
                                                        <h4> أسم المصمم</h4>
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  p-xs-0  conditional-blur">

                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">

                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle  gray-bg">

                                                    </div>
                                                    <div class="color-circle gray-bg">

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>

                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">


                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                             <label class="form-label">صور المجسم</label>
                                             <div class="upload-btn-wrapper">
                                                 <button class="btn btn-upload"><img src="http://127.0.0.1:8000/user/assets/icons/uploaded-img.svg" alt="upload-img"></button>
                                             </div>
                                         </div> -->

                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-4">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="review-text review-text-tog">
                                                    <label class="form-label">تقييم المصمم</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>
                                                    <div class="rating">
                                                        <div class="star-reating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="blur-star blur-bg" id="star-blur-scroll">
                                                            <div class="blur-star-inner">
                                                                <div class="review-text">
                                                                    <label class="form-label">تقييم المصمم</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>

                                                                    <div class="rating">

                                                                        <div class="star-reating">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </div>

                                                                    </div>
                                                                    <div class="blur-star-bottom-btn">
                                                                        <a href="javascript:void(0);" class="btn btn-form mx-3 with-arrow mt-4">ارسال</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-5 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>

                                                        </div>
                                                        <div class="prog-box mb-5">
                                                            <h6 class="prog-box__heading">مدة التنفيذة</h6>
                                                            <div class="prog-outer prog-outer--b wrapper al-center">
                                                                <div class="prog-inner"></div>
                                                            </div>
                                                            <p class="prog-box__para">تم التسليم من قبل المصمم</p>
                                                        </div>
                                                        <!-- <div class="row conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                                <label class="form-label">رفع ملف المجسم</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <a class="btn btn-upload" href="{{ asset( @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <label class="form-label dot">ملاحظات</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$ss->discription}}</textarea>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="upload-btn-wrapper designer-upload">
                                                                    <button class="btn btn-upload-designer "><img src="{{asset('user/assets/icons/upload-img.svg')}}" alt="upload-img"></button>
                                                                    <input type="file" id="" required name="myfile" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <div class="review-text without-label review-text-tog">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف "></textarea>
                                                                    <div class="mb-3">

                                                                        <div class="rating rating2  wrapper al-center jst-btw ">
                                                                            <h6 class="prog-box__heading">تقييم المستخدم
                                                                            </h6>
                                                                            <div class="star-reating">
                                                                                <i class="fa-solid fa-star"></i>
                                                                                <i class="fa-solid fa-star"></i>
                                                                                <i class="fa-solid fa-star"></i>
                                                                                <i class="fa-solid fa-star"></i>
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="title text-center mt-5 no-border conditional-blur starbluerModal-btn-hide">
                                                        <div class="zhd-finished">
                                                            <button class="btn btn-form btn-sky mx-3 with-arrow uplod-rev-btn mt-10">الفاتورة</button>
                                                            <p class="mt-4">تمت عملية الدفع بنجاح</p>
                                                        </div>
                                                    </h1>
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
        </div>
    </div>
    {{-- user5requestmodal --}}



    <!-- user 6 requestmodal start  -->

    <div class="modal fade page result" id="user6RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset( auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span> -->
                                            <!-- <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small padd-t-40">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row  p-xs-0  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label mt-4">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">

                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}

                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                        </div>
                                                        <div class="wrapper jst-center userReq-btn-box">
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--a">قبول</button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--b">رفض</button>
                                                            <button class="userReq-btn-box__btn userReq-btn-box__btn--c mgl-0">عرض
                                                                السعر</button>
                                                        </div>
                                                    </div>
                                                    <div class="userreqFormBtn-box">
                                                        <button class="btn btn-form">
                                                            طلباتي
                                                        </button>
                                                        <button class="btn btn-form error-red-bg" data-bs-toggle="modal" data-bs-target="#user7RequestModal">
                                                            تقديم بلاغ
                                                        </button>
                                                        <p class="userreqFormBtn-box__text">سيتم تحديث حالة الطلب من قبل
                                                            المصمم</p>
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
            </div>
        </div>
    </div>

    <!-- user 6 requestmodal end -->

    <!-- user 7 requestmodal start -->

    <div class="modal fade page result" id="user7RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب :</span>
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span>
                                            <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
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
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row  p-xs-0  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border zhd-quote">معلومات المصمم</h1>
                                            <div class="col-md-12 ">
                                                <div class="row justify-content-center">
                                                    <!-- payment blur -->
                                                    <div class="payment pay credit-payment d-block" id="payment">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <img src="{{ asset('user/assets/images/mada-logo.svg') }}" alt="">
                                                                <p>مدى</p>
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            </label>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                <img src="{{ asset('user/assets/images/masterCard.svg') }}" alt="">
                                                                <p>فيزا وماستر كارد</p>
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                <img src="{{ asset('user/assets/images/apple-pay.svg') }}" alt="">
                                                                <p>آبل باي</p>
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 blur">

                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}
                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="userreqFormBtn-box">
                                                        <button class="btn btn-form" data-bs-toggle="modal" data-bs-target="#user8RequestModal">
                                                            طلباتي
                                                        </button>
                                                        <p class="userreqFormBtn-box__text">سيتم تحديث حالة الطلب من قبل
                                                            المصمم</p>
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
            </div>
        </div>
    </div>
    <!-- user 7 requestmodal end -->

    <!-- user 8 requestmodal start -->


    <div class="modal fade page result" id="user8RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <div class="zhd-center-close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="zhd-center-hdng" style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span>
                                    </h1>
                                </div>
                                <div class="profile zhd-box">
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
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
                                            <span class="id">406</span>
                                            <!-- <span class="id">{{@$public->id}}</span>
                                            <div class="dateTime">{{@$public->created_at}}</div> -->
                                            <div class="dateTime ">11/01/2022 - 03:00PM</div>
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
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>عرض سعر</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}
                                                    </div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle"> @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>

                                        <div class="row  p-xs-0  conditional-blur">
                                            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <label class="form-label dot">اختيار اللون</label>
                                                <div class="color-circle-main">
                                                    <div class="blue-text">
                                                        <span> أبيض</span>
                                                    </div>
                                                    <div class="color-circle blue-border">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle  gray-bg">
                                                    </div>
                                                    <div class="color-circle gray-bg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4 quantity-m-50">
                                                <label class="form-label">الكمية</label>
                                                <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly="" value="1">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                <label class="form-label">المقاسات</label>
                                                <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly="" value="اختيار المقاس">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5">
                                                <label class="form-label">شكل الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly="" value="رقم الهاتف هنا">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mt-5 quantity-m-50">
                                                <label class="form-label">تقنية الطباعة</label>
                                                <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly="" value="التقنية الأولي + 35 ريال">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 col-xxl-1 hide-tab"></div>
                                            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 zhd-product-visit">

                                                <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="designer-text mt-5">
                                                    <label class="form-label dot">الملاحظات</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h1 class="title text-center mt-5 no-border conditional-blur zhd-quote">
                                                معلومات المصمم</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">

                                                        {{-- user- req --}}
                                                        <div class="wrapper al-center jst-btw mb-5">
                                                            <div class="profile tag-profile designer-order">
                                                                <a href="#profile">
                                                                    <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                                                                <div class="star-profile-txt">
                                                                    <span>مصمم</span>
                                                                    <h4> أسم المصمم</h4>
                                                                    <div class="star-reating">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-sky invert">
                                                                زيارة المنتج <img src="{{ asset('/user/assets/icons/arrow-right.svg')}}" alt="arrow-right">
                                                            </button>
                                                        </div>
                                                        {{-- user- req --}}
                                                        <div class="row mb-2 justify-content-between mb-5 conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                                <p class="user-req-p">شامل رسوم الخدمة + قيمة الضريبة
                                                                    المضافة</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="userreqFormBtn-box">
                                                        <button class="btn btn-form" data-bs-toggle="modal" data-bs-target="#user9RequestModal">
                                                            طلباتي
                                                        </button>
                                                        <p class="userreqFormBtn-box__text">تم رفض عرض السعر</p>
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
            </div>
        </div>
    </div>

    <!-- user 8 requestmodal end -->

    <!-- user 9 requestmodal start -->
    <div class="modal fade page" id="user9RequestModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div>
                                    <span class="outline dot">أكثر 20 خدمة مختلفة</span>
                                    <h1 class="modal-title right"><span class="btm-line"><span class="inner-line"></span>الخدمات العامة
                                        </span>
                                    </h1>
                                </div>
                                <div class="profile">
                                    <button class="btn btn-sky profile-btn invert">
                                        مستخدم
                                    </button> @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a> @endif
                                </div>
                            </div>

                            <div class="modal-body">
                                <div>

                                    <div class="carousel-inner">

                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="submitted-data">
                                                    <h6>رقم الطلب</h6>

                                                    <h1></h1>

                                                    <h1>406</h1>

                                                    <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> رفع الطلب</p>
                                                    <p><img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="green-circle">رفض عرض السعر</p>
                                                    <!-- <span>سيتم تحديث حالة الطلب من قبل الإدارة</span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-action designer-btn">
                                                    <!-- data-bs-toggle="modal" data-bs-target="#publicServiesFinalModal"  / carousel-next-icon-show-->
                                                    <button class="btn btn-form mx-3 with-arrow carousel-next-icon-show" type="submit">تفاصيل الطلب</button>
                                                    <p>تم رفع الطلب بنجاح</p>
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
        </div>
    </div>

    <!-- user 9 requestmodal end -->
    <!-- mapmodal  start start -->
    <div class="modal fade page result video" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </h1>

                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13606.813007965276!2d74.3235535!3d31.50483955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1651321479830!5m2!1sen!2s" width="70%" height="450" style="border:0; width:70%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mapmodal end here -->
    <!-- About US -->

    @include('pages.user.aboutModal')
    <!-- 3D Technology -->
    @include('pages.user.tdModal')
    <!-- Login -->
    @include('pages.user.loginModal')
    <!-- Register -->

    @include('pages.user.registerModal')
    <!-- Membership Information -->

    @include('pages.user.memberModal')
    <!-- Public Services Form -->

    @include('pages.user.publicServiesModal')
    <!-- Public Services Form result -->

    @include('pages.user.publicServiesFinalModal')
    <!-- Public Submitted modal -->

    @include('pages.user.publicSubmittedModal')
    <!-- publicPayment -->

    @include('pages.user.publicPaymentModal')
    <!-- Public FullSubmitted modal -->

    @include('pages.user.publicFullSubmittedModal')
    <!-- Public FullReadable modal -->

    @include('pages.user.publicFullReadableModal')
    <!-- Public Rejected Result modal -->

    @include('pages.user.publicRejectedResultModal')
    <!-- Public RejectedReadable modal -->

    @include('pages.user.publicRejectedReadableModal')
    <!-- Health Services Form -->

    @include('pages.user.healthServiesModal')
    <!-- Health Services Form result -->

    @include('pages.user.healthServicesFinalModal')
    <!-- Requests Modal -->

    @include('pages.user.requestsModal')
    <!-- All requests Modal -->

    @include('pages.user.allRequestsModal')
    <!-- Health Payment After -->

    @include('pages.user.healthPaymentAfterModal')
    <!-- All requests result -->

    @include('pages.user.allRequestsResultModal')
    <!-- healthPaymentResult -->

    @include('pages.user.healthPaymentResultModal')
    <!-- Health Rejected result Modal -->

    @include('pages.user.healthRejectedResultModal')
    <!-- Health Rejected readable Modal -->

    @include('pages.user.healthRejectedReadableModal')
    <!-- Other Stage One -->

    @include('pages.user.otherStageOneModal')
    <!-- Stage one final -->

    @include('pages.user.stageOneFinalModal')
    <!-- Other Stage Two -->

    @include('pages.user.otherStageTwoModal')
    <!-- Stage two final -->

    @include('pages.user.stageTwoFinalModal')
    <!-- Other Stage Three -->

    @include('pages.user.otherStageThreeModal')
    <!-- Stage three final -->

    @include('pages.user.stageThreeFinalModal')
    <!-- Loader Modal -->

    @include('pages.user.loaderModal')
    <!-- Other Stages Loader Modal -->

    @include('pages.user.otherLoaderModal')
    <!-- Register Loader Modal -->

    @include('pages.user.registerLoaderModal')
    <!-- Health Video Modal -->

    @include('pages.user.healthVideoModal')
    <!-- Public Video Modal -->

    @include('pages.user.userVideoModal')
    <!-- User Video Modal -->

    @include('pages.user.designerVideoModal')
    <!-- Designer Video Modal -->

    @include('pages.user.designerVideoModal2')
    <!-- Designer Video Modal2 -->

    @include('pages.user.publicVideoModal')
    <!-- Bootstrap js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>


    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
    <script>
        $(function() {
            $('#healthServicesFinalModal').modal('show');
        });
    </script>
    @endif
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 4)
    <script>
        $(function() {
            $('#publicPaymentModal').modal('show');
        });
    </script>
    @endif
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
    <script>
        $(function() {
            $('#publicServiesFinalModal').modal('show');
        });
    </script>
    @endif
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
    <!-- JQuery -->

    <script>
        $(document).ready(function() {

            $('#validate_message').css('display', 'none');
            var a = 0;
            var b = 0;
            var c = 0;
            $(window).scroll(function() {
                // var oTop = $('.counter').offset().top - window.innerHeight;
                console.log($(window).scrollTop())
                if (a == 0 && $(window).scrollTop() > 300) {
                    $('.client-counter').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }
                        });
                    });
                    a = 1;
                }
                if (b == 0 && $(window).scrollTop() > 2800) {
                    $('.designer-counter').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }
                        });
                    });
                    b = 1;
                }
                if (c == 0 && $(window).scrollTop() > 3400) {
                    $('.designer-counter2').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }
                        });
                    });
                    c = 1;
                }
            });
        })
    </script>
    <script>
        $(document).on('click', '.editProduct', function(e) {
            const btn = $(e.currentTarget);
            rowid = btn.attr('data-id');
            var url = '{{ route("vieworder", ":id") }}';
            url = url.replace(':id', rowid);
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {

                    console.log(response);
                    const modal = $('#allRequestsResultModal');
                    modal.find('#procedure').val(response.procedure);
                    modal.find('#parts').val(response.parts);
                    modal.find('#pa_age').val(response.pa_age);
                    modal.find('#pa_id').val(response.pa_id);
                    modal.find('#pa_name').val(response.pa_name);
                    modal.find('#hospital').val(response.hospital);
                    modal.find('#dr_phone').val(response.dr_phone);
                    modal.find('#dr_email').val(response.dr_email);
                    modal.find('#dr_name').val(response.dr_name);
                    modal.find('#dr_spec').val(response.dr_spec);
                    modal.find('#myfile').attr(response.myfile);
                    modal.find('#exampleFormControlTextarea1').val(response.discription);
                    modal.find('.dateTime').text(response.created_at);
                    modal.find('.id').text(response.id);
                    modal.find('#status').val(response.status);
                    $('#allRequestsResultModal').modal('show');

                    $('#requestsModal').modal('hide');
                    // $('.modal-backdrop').remove();
                },
                error: function(errorThrown, errResponse) {
                    console.log(errorThrown, errResponse);
                }
            });

        });
    </script>
    @if(count($errors) > 0)
    <script>
        $(document).ready(function() {
            $('.toast').toast('show')
        })
    </script>
    @endif
    <!-- Slick -->
    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>
    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('user/assets/js/formValidation.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CSSRulePlugin.min.js"></script> --}}
    <script>
        // gsap.from('.move-blue', {duration:1.5, delay:2, opacity:0,  x: 200});
        // gsap.from('.black-bg',  {duration:1.5, delay:3, opacity:0,  x: -200});
        gsap.from('.black-bg2', {
            duration: 1.5,
            delay: 0.5,
            backgroundPosition: '-350px 0'
        });
        gsap.from('.move-blue2', {
            duration: 1.5,
            delay: 1,
            backgroundPosition: '350px 0px'
        });
        gsap.from('.move-hand', {
            duration: 1.5,
            delay: 1.5,
            opacity: 0,
            y: -100
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
    </script>
    @if (Auth::check())
    @role('user')
    <script type="text/javascript">
        $(document).ready(function() {
            if ($.cookie('pop') == null) {
                $('#requestsModal').modal('show');
                $.cookie('pop', '1');
                console.log('ok');
            }
            console.log('ok');
        });
    </script>
    @endrole
    @endif
    {{-- <script>
        wow = new WOW(
            {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
        )
        wow.init();
    </script> --}}
    {{-- <script>
        $(window).load(function() {
        $(".se-pre-con").fadeOut("");
    });
    </script> --}}
    <script>
        $(document).ready(function() {
            $(".toggle_button").click(function() {
                var id = $(this).attr('id');
                alert(id);
                console.log(id);
                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('perposal_status_change') }}",
                    data: {
                        'id': id
                    },
                    success: function(data) {

                    }
                });
            });
        });
        $(document).ready(function() {
            $(".toggle_button1").click(function() {
                var id = $(this).attr('id');
                alert(id);
                console.log(id);
                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('perposal_status_change1') }}",
                    data: {
                        'id': id
                    },
                    success: function(data) {

                    }
                });
            });
        });
    </script>
    <script>
        $(function() {
            $('#validate').on('click', function() {
                $('#validate_message').css('display', 'block');
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#check > .col-md-6 ').on('click', function() {
                var id = $(this).attr('id');
                var url = '{{route("getProduct", ":id")}}'
                url = url.replace(':id', id);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: id,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data.soft_image);
                        $('#subImages').html(' ');
                        $('#data').html(' ');
                        $('#name').html(' ');
                        $('#images_field').html(' ');


                        $.each(data.soft_image, function(key, value) {
                            $('#product_image_show').append(`
                               <img src="upload/software/${value.images}" id="${value.images}" alt="img"style="width:70px;height:70px;">

                                `);
                        });

                        var date = data.msg[0].created_at;
                        date = date.substr(0, 10);
                        $.each(data.msg[0].images, function(index, value) {
                            $('#subImages').append(`<div class="col-auto p-0 card-img-main"><img src="{{asset(Storage::url('/'))}}/${value}" ></div>                                                           alt=""></div>`);
                        });
                        $('#data').append(`<h3>${data.msg[0].title}</h3>
                                                <h6>${date}</h6>

                                                <p>${data.msg[0].description}</p>`);
                        $('#name').append(`<p>${data.msg[1]}</p>`);
                        $('#designer_request > .row > .nav-link > .col-md-12 > .designer_request').attr('value', data.msg[0].designer_id);
                        $('#designer_id').attr('value', data.msg[0].designer_id);




                    }
                });

            });

            // #designer_request

            $('.request-box').on('click', function() {
                var id = $(this).attr('value');


                // alert(id);
                var url = '{{route("getRequest", ":id")}}'
                url = url.replace(':id', id);
                // alert(url);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: id,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);


                        if (data.msg.perposal_p_d_f != null) {
                            $(".conditional-blur.design-payment-blur").removeClass('blur');
                            $(".payment.credit-payment").addClass('d-none');

                            $("#web_pdf").attr('href', 'https://busy-mestorf.161-97-115-110.plesk.page/3d_latest/public/perposal/pdf/43');
                        } else {
                            console.log('this is null');
                        }
                        console.log('proceed');
                        $('#order_no').html(' ');
                        $('#order_no3').html(' ');
                        $('#order_date').html(' ');
                        $('#order_date3').html(' ');
                        $('#designer_name').html(' ');
                        $('#order_qty').val(' ');
                        $('#order_qty3').val(' ');
                        $('#order_size').val(' ');
                        $('#order_size3').val(' ');
                        $('#order_format').val(' ');
                        $('#order_format3').val(' ');
                        $('#order_print').val(' ');
                        $('#order_print3').val(' ');
                        $('#order_note').val(' ');
                        $('#order_note3').val(' ');
                        var date = data.msg.created_at;
                        date = date.substr(0, 10);
                        $('#order_no').html(`${data.msg.order_no}`);
                        $('#order_no3').html(`${data.msg.order_no}`);
                        $('#order_date').html(`${date}`);
                        $('#order_date3').html(`${date}`);
                        $('#designer_name').html(`${data.msg.user.name}`);
                        $('#user_id').val(`${data.msg.user.id}`);
                        $('#order_qty').val(`${data.msg.qty}`);
                        $('#order_qty3').val(`${data.msg.qty}`);
                        $('#order_id').val(`${data.msg.id}`);
                        $('#order_size').val(`${data.msg.size}`);
                        $('#order_size3').val(`${data.msg.size}`);
                        $('#order_format').val(`${data.msg.format}`);
                        $('#order_format3').val(`${data.msg.format}`);
                        $('#order_print').val(`${data.msg.print}`);
                        $('#order_print3').val(`${data.msg.print}`);
                        $('#order_note').val(`${data.msg.notes}`);
                        $('#order_note3').val(`${data.msg.notes}`);



                    }
                });

            });


            $("#submit_proposal").submit(function(stay) {
                var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
                var url = '{{route("addProposal")}}'
                $.ajax({
                    type: 'post',
                    url: url,
                    data: formdata, // here $(this) refers to the ajax object not form
                    contentType: "Json",
                    success: function(data) {
                        alert('Proposal added successfully')
                    }
                });
            });

            $('#designer-services > .row  ').on('click', function() {
                var id = $(this).attr('value');
                var url = '{{route("getRequest_blur", ":id")}}'
                url = url.replace(':id', id);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: id,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);

                        $('#order_no1').html(' ');

                        $('#order_date1').html(' ');
                        $('#designer_name1').html(' ');
                        $('#order_qty1').val(' ');
                        $('#order_size1').val(' ');
                        $('#order_format1').val(' ');
                        $('#order_print1').val(' ');
                        $('#order_note1').val(' ');
                        var date = data?.msg?.created_at;
                        date = date.substr(0, 10);
                        $('#order_no1').html(`${data.msg.order_no}`);

                        $('#order_date1').html(`${date}`);
                        $('#designer_name1').html(`${data.msg.user.name}`);
                        $('#user_id1').val(`${data.msg.user.id}`);
                        $('#order_qty1').val(`${data.msg.qty}`);
                        $('#order_id1').val(`${data.msg.id}`);
                        $('#order_size1').val(`${data.msg.size}`);
                        $('#order_format1').val(`${data.msg.format}`);
                        $('#order_print1').val(`${data.msg.print}`);
                        $('#order_note1').val(`${data.msg.notes}`);



                    }
                });

            });





        });
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
    <script>
        $(document).ready(function() {
            $(".search_btn").click(function() {
                var id = $(this).attr('id');
                var name = $(this).val();
                console.log(name);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('print.search.btn') }}",
                    data: {
                        'name': name,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.search);

                        $('#get_search_data').html(' ');


                        $.each(data.search, function(key, value) {

                            $('#get_search_data').append(`
                     <div class="row" id="check">


                        <div class="col-md-6 col-lg-4" >
                            <div class="design-card-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="star-profile">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <div class="star-profile-icon">
                                                    <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <div class="star-profile-txt">
                                                <span>مصمم</span>
                                                <h3> ${value.user.name}</h3>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="star-reating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class=""
                                    data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                                   <div class="design-card-body">

                                        <img src="products/${value.images}" id="${value.images}" alt="img">

                                    <div class="design-card-left-top">
                                        <p>${value.print_technology}</p>

                                    </div>

                                    <div class="design-card-left-bottom">
                                        <div class="card-icons">
                                            <a href="#">
                                                <p>${value.user_software}</p>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                                <div class="design-card-footer">
                                    <h4>${value.description}
                                    </h4>

                                </div>
                            </div>

                        </div>



                        <div class="col-md-6 col-lg-4">
                            <div class="design-card-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="star-profile">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <div class="star-profile-icon">
                                                    <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <div class="star-profile-txt">
                                                <span>مصمم</span>
                                                <h3>أسم المصمم</h3>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="star-reating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </div>
                    <div class="blurText"></div>
                </div>
                        `);


                        });

                    }
                });
            });
        });



        //print title
        $(document).ready(function() {
            $('form#serch_form_data').submit(function(event) {
                event.preventDefault();
                console.log($('form#serch_form_data').serialize());
                $.ajax({
                    type: 'POST',
                    url: "{{ route('print.search.btn.title') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('form#serch_form_data').serialize(),
                    dataType: 'json',
                    success: function(data) {
                        console.log(data.search);

                        $('#get_search_data').html(' ');
                        $.each(data.search, function(key, value) {

                            $('#get_search_data').append(`
                     <div class="row" id="check">
                        <div class="col-md-6 col-lg-4" >
                            <div class="design-card-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="star-profile">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <div class="star-profile-icon">
                                                    <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <div class="star-profile-txt">
                                                <span>مصمم</span>
                                                <h3> ${value.user.name}</h3>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="star-reating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class=""
                                    data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                                   <div class="design-card-body">

                                        <img src="products/${value.images}" id="${value.images}" alt="img">

                                    <div class="design-card-left-top">
                                        <p>${value.print_technology}</p>

                                    </div>

                                    <div class="design-card-left-bottom">
                                        <div class="card-icons">
                                            <a href="#">
                                                <p>${value.user_software}</p>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                                <div class="design-card-footer">
                                    <h4>${value.description}
                                    </h4>

                                </div>
                            </div>

                        </div>



                        <div class="col-md-6 col-lg-4">
                            <div class="design-card-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="star-profile">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <div class="star-profile-icon">
                                                    <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <div class="star-profile-txt">
                                                <span>مصمم</span>
                                                <h3>أسم المصمم</h3>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 m-auto">
                                        <div class="star-reating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="blurText"></div>
                </div>
                        `);


                        });
                    }
                })



            });
        });

        //Designer search
        $(document).ready(function() {
            $(".search_btn2").click(function() {
                var id = $(this).attr('id');
                var name = $(this).val();
                console.log(name);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('print.search.btn') }}",
                    data: {
                        'name': name,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.search);

                        $('#get_search_data2').html(' ');


                        $.each(data.search, function(key, value) {

                            $('#get_search_data2').append(`
             <div class="row" id="check">


                <div class="col-md-6 col-lg-4" >
                    <div class="design-card-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="star-profile">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <div class="star-profile-icon">
                                            <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="star-profile-txt">
                                        <span>مصمم</span>
                                        <h3> ${value.user.name}</h3>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="star-reating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class=""
                            data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                           <div class="design-card-body">

                                <img src="products/${value.images}" id="${value.images}" alt="img">

                            <div class="design-card-left-top">
                                <p>${value.print_technology}</p>

                            </div>

                            <div class="design-card-left-bottom">
                                <div class="card-icons">
                                    <a href="#">
                                        <p>${value.user_software}</p>
                                    </a>

                                </div>
                            </div>

                        </div>
                        <div class="design-card-footer">
                            <h4>${value.description}
                            </h4>

                        </div>
                    </div>

                </div>



                <div class="col-md-6 col-lg-4">
                    <div class="design-card-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="star-profile">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <div class="star-profile-icon">
                                            <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="star-profile-txt">
                                        <span>مصمم</span>
                                        <h3>أسم المصمم</h3>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="star-reating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
            <div class="blurText"></div>
        </div>
                `);


                        });

                    }
                });
            });
        });



        //print title
        $(document).ready(function() {
            $('form#serch_form_data2').submit(function(event) {
                event.preventDefault();
                console.log($('form#serch_form_data2').serialize());
                $.ajax({
                    type: 'POST',
                    url: "{{ route('print.search.btn.title') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('form#serch_form_data2').serialize(),
                    dataType: 'json',
                    success: function(data) {
                        console.log(data.search);

                        $('#get_search_data2').html(' ');
                        $.each(data.search, function(key, value) {

                            $('#get_search_data2').append(`
             <div class="row" id="check">
                <div class="col-md-6 col-lg-4" >
                    <div class="design-card-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="star-profile">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <div class="star-profile-icon">
                                            <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="star-profile-txt">
                                        <span>مصمم</span>
                                        <h3> ${value.user.name}</h3>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="star-reating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class=""
                            data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                           <div class="design-card-body">

                                <img src="products/${value.images}" id="${value.images}" alt="img">

                            <div class="design-card-left-top">
                                <p>${value.print_technology}</p>

                            </div>

                            <div class="design-card-left-bottom">
                                <div class="card-icons">
                                    <a href="#">
                                        <p>${value.user_software}</p>
                                    </a>

                                </div>
                            </div>

                        </div>
                        <div class="design-card-footer">
                            <h4>${value.description}
                            </h4>

                        </div>
                    </div>

                </div>



                <div class="col-md-6 col-lg-4">
                    <div class="design-card-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="star-profile">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <div class="star-profile-icon">
                                            <img src="{{asset('assets/images/dashboard/1.png')}}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="star-profile-txt">
                                        <span>مصمم</span>
                                        <h3>أسم المصمم</h3>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="star-reating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
            <div class="blurText"></div>
        </div>
                `);


                        });
                    }
                })
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
    <script>
        $(function() {
            Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

                // The configuration we've talked about above
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 25,
                maxFiles: 25,

                // The setting up of the dropzone
                init: function() {
                    let myDropzone = this;
                    myDropzone.on("addedfile", file => {
                        console.log("A file has been added");
                    });
                    // Here's the change from enyo's tutorial...

                    $("#submit-all").click(function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                }
            }
        })
    </script>
</body>
</html>
