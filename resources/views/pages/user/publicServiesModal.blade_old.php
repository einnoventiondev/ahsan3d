<div class="modal fade page form animate__animated animate__fadeInLeft animate__fast" id="publicServiesModal"
    tabindex="-1" aria-labelledby="publicServiesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                        <div class="zhd-center-close">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="m-r-30" style="margin-top: 1%;">
                                <span class="outline dot">أكثر 20 خدمة مختلفة</span>
                                <h1 class="modal-title right"><span class="btm-line"><span
                                            class="inner-line"></span>الخدمات العامة
                                    </span></h1>
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
                                    <img src="{{ asset(  auth()->user()->profile) }}"
                                        style="height:40px; width:40px; border-radius: 50%">
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="modal-body">
                            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    <form class="gy-4 gx-5" action="{{route('publics.store')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="carousel-item one active" data-bs-interval="100000">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12 col-xl-9 col-xxl-9">
                                                    <div class="row mb-2">
                                                        <div 
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">الاسم كامل</label>
                                                            <input type="text" class="form-control name"
                                                                placeholder=".. الاسم هنا"  name="name"
                                                                value="">
                                                        </div>
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">رقم الهاتف</label>
                                                            <input type="number" pattern="\d*"
                                                                class="form-control phone" placeholder=".. التخصص هنا"
                                                                 name="phone" value="">
                                                        </div>
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">الايميل</label>
                                                            <input type="email" class="form-control email"
                                                                placeholder=".. الايميل هنا"  name="email"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">التخصص</label>
                                                            <select class="form-select spec"  name="spec"
                                                                aria-label="Default select example">
                                                                <option selected>رقم الهاتف هنا</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">الجنس</label>
                                                            <select class="form-select gender"  name="gender"
                                                                aria-label="Default select example">
                                                                <option selected>الجنس</option>
                                                                <option value="male">الذكر</option>
                                                                <option value="female">أنثى</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-action">
                                                        <button
                                                            class="btn btn-grey invert btn-form disabled mx-3 with-arrow"
                                                            data-bs-target="#carouselIndicators"
                                                            data-bs-slide="next"><img
                                                                src="{{asset('user/assets/icons/arrow-right.svg')}}"
                                                                alt="arrow-right"> التالي</button>
                                                        <p>المعلومات العامة</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item two">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12 col-xl-9 col-xxl-9">

                                                    <div class="row mb-2">
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">نوع الطباعة</label>
                                                            <input type="text" class="form-control type"
                                                                placeholder=".. الاسم هنا" value="" 
                                                                name="pr_type">
                                                        </div>
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">لون الطباعة</label>
                                                            <input type="text" class="form-control spec"
                                                                placeholder=".. التخصص هنا" value="" 
                                                                name="pr_clr">
                                                        </div>
                                                        <div
                                                            class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                                            <label class="form-label dot">دقة الطباعة (صورة
                                                                كمثال)</label>
                                                            <input type="text" class="form-control print-resolution"
                                                                placeholder=".. الايميل هنا" value="" 
                                                                name="pr_res">
                                                        </div>
                                                        <div class="row m-0 p-0 pt-4">
                                                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                <label class="form-label dot">رفع ملف المجسم</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <button class="btn btn-upload public"><img
                                                                            src="{{asset('user/assets/icons/upload-img.svg')}}"
                                                                            alt="upload-img"></button>
                                                                    <input type="file" id="public-file" 
                                                                        name="myfile" />
                                                                </div>
                                                                <span class="form-detail">صور بصيغة STL,PNG,JPG </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-action">
                                                        <button
                                                            class="btn invert btn-form mx-3 with-arrow disabled"
                                                            data-bs-target="#carouselIndicators"
                                                            data-bs-slide="next"><img
                                                                src="{{asset('user/assets/icons/arrow-right.svg')}}"
                                                                alt="arrow-right"> التالي</button>
                                                        <p>تفاصيل الطباعة</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item three">
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="submitted-data">
                                                        <h6>رقم الطلب</h6>
                                                        @auth
                                                        <h1>{{@$public->id+1 }}</h1>
                                                        @else
                                                        <h1>244</h1>
                                                        @endauth
                                                        <p><img src="{{asset('user/assets/icons/green-circle.svg')}}"
                                                                alt="green-circle"> رفع الطلب</p>
                                                        <p><img src="{{asset('user/assets/icons/green-circle.svg')}}"
                                                                alt="green-circle"> الدفع</p>
                                                        <span>سيتم تحديث حالة الطلب من قبل الإدارة</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <img src="{{asset('user/assets/images/3dPrinter.png')}}"
                                                        class="img-fluid mx-auto d-block" width="400" alt="3DPrinter">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-action">
                                                        <!-- data-bs-toggle="modal" data-bs-target="#publicServiesFinalModal"  / carousel-next-icon-show-->
                                                        <button
                                                            class="btn btn-form mx-3 with-arrow carousel-next-icon-show"
                                                            type="submit">تفاصيل الطلب</button>
                                                        <p>تمت بنجاح المرحلة الأولى من الطلب</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <button class="carousel-control-prev " type="button"
                                    data-bs-target="#carouselIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next carousel-next-icon-hide" type="button"
                                    data-bs-target="#carouselIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>