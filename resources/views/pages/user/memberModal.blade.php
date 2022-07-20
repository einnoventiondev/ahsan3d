<div class="modal fade page register" id="memberModal-1" tabindex="-1" aria-labelledby="memberModal1Label"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                <h1 class="modal-title right" style="color: black;">
                                    <span class="btm-line"></span><span class="inner-line"></span> معلومة العضوية
                                </h1>
                            </div>
                            <div class="profile">
                                <button class="btn btn-sky edit-profile">تعديل</button>
                            </div>
                        </div>
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- designer pro update  start-->
<!-- payment modal for users start -->
<!-- Modal -->
<div class="modal fade" id="user-payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user-payment-form" method="POST" action="{{route('user.account.payment')}}">
                   @csrf
                    <div class="payment-user" id="payment-user-method">
                        <div class="amount-box">
                            <label class="form-label dot">
                                amount
                            </label>

                            <input type="text" class="form-control" name="payment"  placeholder=" add Payment  .." >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img src="{{asset('user/assets/images/mada-logo.svg')}}" alt="">
                                <p>مدى</p>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                            </label>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <img src="{{asset('user/assets/images/masterCard.svg')}}" alt="">
                                <p>فيزا وماستر كارد</p>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault3">
                                <img src="{{asset('user/assets/images/apple-pay.svg')}}" alt="">
                                <p>آبل باي</p>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault3">
                            </label>
                        </div>
                        <div class="button-box__user-payment">
                            <input type="submit" value="submit" class="btn btn-sky invert user-payment-submit">

                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </div>
    </div>
</div>
<!-- payment modal for users End -->

<div class="modal fade page register" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <div class="ahs-member-model-box member-cross-btn">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="ahs-member-model-box">
                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                <h1 class="modal-title right" style="color: black;">
                                    <span class="btm-line"></span><span class="inner-line"></span> معلومات العضوية
                                </h1>
                            </div>
                            <div class="profile ahs-member-model-box">
                                @auth
                                @if(Auth::user()->role == 'designer')
                                <button class="btn btn-sky edit-profile--ahs" data-bs-toggle="modal"
                                    data-bs-target="#designinnerModal">المنتجات</button>
                                @else
                                @endif
                                @endauth

                                <button class="btn btn-sky edit-profile membership-edit">تعديل</button>
                            </div>
                        </div>
                        <div class="modal-body">

                            @if(Auth::check())
                            @if(Auth::user()->role == 'designer')

                            <form class="gy-4 gx-5" method="post" action="{{ route('profileUser') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- <input type="text" name="id" value="{{ Auth::user()->id }}">
    <input type="text" name="role" value="{{ Auth::user()->role }}"> -->
                                <div class="ahs-img-uploder-cam__holder">
                                    <img id="blah1"
                                        src="{{(Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile)}}"
                                        class="mx-auto d-block imageupload1"
                                        style="clip-path: circle() !important ;height:150% !important;" width="150">
                                    <label for="imgInp1" class="upload-avatar"> <img
                                            src="{{ asset('user/assets/images/camera.png') }}" alt="camera"
                                            class="ahs-img-uploder-cam"></label>
                                    <input id="imgInp1" type="file" class="chose1 d-none"
                                        value="upload/images/1648128609.png" name="image" accept="image/*"
                                        style="opacity: 0">
                                </div>

                                @if(Auth::user()->role == 'user')

                                <div class="ahs-form-box1-box">
                                    <a href="#" class="btn btn-form ahs-form-btn1">مستخدم</a>
                                </div>
                                @else
                                <div class="ahs-form-box1-box">
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
                                    {{-- <a href="#" class="btn btn-form ahs-form-btn1">
                                        المصمم
                                    </a> --}}
                                </div>

                                @endif


                                <div class="wrapper al-center ahs-form-box1">
                                    <span class="ahs-form-head1"> الرصيد الحالي </span>
                                    <span class="ahs-form-head2"> {{ Auth::user()->wallet }}  ريال </span>
                                    <!-- before this modal is  #financialOperations -->
                                    <button data-bs-toggle="modal" data-bs-target="#financialOperations"
                                        class="m-btn mujtmah-box-btn btn-white-1 d-contents">
                                        <img src="{{ asset('user/assets/images/ar.png') }}" alt=""
                                            class="ahs-form-img1">
                                    </button>
                                </div>
                                <div class="ff">
                                    <div class="star-reating star-s-30">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الاسم</label>
                                        <input type="text" class="form-control name disabled" name="name"
                                            value="{{ Auth::user()->name }}" placeholder="الاسم هنا .." value="">
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">رقم الجوال</label>
                                        <input type="text" class="form-control disabled" name="field"
                                            value="{{ Auth::user()->field }}" placeholder="رقم الجوال هنا .." value="">
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الايميل</label>
                                        <input type="text" name="email" name="email" value="{{ Auth::user()->email }}"
                                            class="form-control email disabled" placeholder="الايميل هنا .." value="">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-5">
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">كلمة المرور</label>
                                        <input type="text" name="password" class="form-control pass disabled"
                                            placeholder="كلمة المرور هنا .." value="">
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4 ahs-from-box">
                                        <label class="form-label dot">تقنية الطباعة</label>
                                        <select class="form-select disabled" name="printing_technology"
                                            aria-label="Default select example">
                                            <option></option>
                                            <option>اختيار التقنية</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4 ahs-from-box">
                                        <label class="form-label dot">أنواع البرامج المستخدمة</label>
                                        <select class="form-select disabled" name="software_type"
                                            aria-label="Default select example">
                                            <option></option>
                                            <option>اختاير البرامج المستخدمة</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="almuntjat-form-error d-none">
                                    <img src="assets/images/warning.png" alt="" class="almuntjat-form-error__img"> بعد
                                    إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                </div>
                                <div class="almuntjat-form-error almuntjat-form-error-2">
                                    <img src="{{ asset('/user/assets/images/warning.png')}}" alt=""
                                        class="almuntjat-form-error__img"> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة
                                    للقبول أو الرفض
                                </div>
                                <div class="form-action">
                                    <button class="btn btn-form mx-3 with-arrow member-modal-disabled disabled "
                                        type="submit">حفظ</button>
                                    <p>تعديل بيانات التسجيل</p>
                                </div>
                            </form>
                            @else
                            <form class="gy-4 gx-5" method="post" action="{{route('profileUser')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="ahs-img-uploder-cam__holder">
                                    <img id="blah1"
                                        src="{{(Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset('storage/' . auth()->user()->profile)}}"
                                        class="mx-auto d-block imageupload1"
                                        style="clip-path: circle() !important ;height:150% !important;" width="150">
                                    <label for="imgInp1" class="upload-avatar"> <img
                                            src="{{ asset('user/assets/images/camera.png') }}" alt="camera"
                                            class="ahs-img-uploder-cam"> </label>
                                    <input id="imgInp1" type="file" class="chose1 d-none"
                                        value="upload/images/1648128609.png" name="image" accept="image/*"
                                        style="opacity: 0">
                                </div>

                                @if(Auth::user()->role == 'user')
                                <div class="ahs-form-box1-box">
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
                                    {{-- <a href="#" class="btn btn-form ahs-form-btn1">
                                        المصمم
                                    </a> --}}
                                </div>

                                @else
                                <div class="ahs-form-box1-box">
                                    <a href="#" class="btn btn-form ahs-form-btn1">مستخدم</a>
                                </div>

                                @endif

                                <div class="wrapper al-center ahs-form-box1">
                                    <span class="ahs-form-head1"> الرصيد الحالي </span>
                                    <span class="ahs-form-head2"> {{ Auth::user()->wallet }} ريال </span>
                                    <button data-bs-toggle="modal" data-bs-target="#user-payment" type="button"
                                        class="m-btn mujtmah-box-btn btn-white-1 d-contents">
                                        <img src="{{ asset('user/assets/images/ar.png') }}" alt=""
                                            class="ahs-form-img1">
                                    </button>
                                </div>
                                <div class="ff">
                                    <div class="star-reating star-s-30">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الاسم</label>
                                        <input type="text" name="name" class="form-control disabled"
                                            placeholder=".. الاسم هنا" value="{{auth()->user()->name}}">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">رقم الجوال</label>
                                        <input type="text" name="field" class="form-control disabled"
                                            placeholder="التخصص هنا .." value="{{auth()->user()->field}}">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الايميل</label>
                                        <input type="email" name="email" class="form-control disabled"
                                            placeholder=".. الايميل هنا" value="{{auth()->user()->email}}">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">كلمة المرور</label>
                                        <input type="password" name="password" class="form-control disabled"
                                            placeholder=".. كلمة المرور">
                                    </div>
                                </div>
                                <div class="form-action">
                                    <button class="btn btn-form mx-3 with-arrow disabled" type="submit">حفظ</button>
                                    <p>تعديل بيانات التسجيل</p>
                                </div>
                            </form>
                            @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- designer pro update end -->
