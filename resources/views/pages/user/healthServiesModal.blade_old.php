<div class="modal fade page form animate__animated animate__fadeInRight animate__fast" id="healthServiesModal" tabindex="-1" aria-labelledby="healthServiesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <div class="zhd-center-close">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div> 
                                <span class="outline dot">أكثر من 13 عضو اصطناعي</span>
                                <h1 class="modal-title right"><span class="btm-line"><span class="inner-line"></span>
                                        الخدمات الطبية
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
                                    <img src="{{ asset(  auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="modal-body">
                            <div id="carouselHealthIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <form class="gy-4 gx-5 p-2 form-1" action="{{route('medical.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="carousel-item one active" data-bs-interval="100000">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="row mb-2">
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">اسم الطبيب</label>
                                                            <input type="text" name="dr_name" class="form-control name" placeholder="الاسم هنا .." value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">تخصص الطبيب</label>
                                                            <input type="text" name="dr_spec" class="form-control spec" placeholder="التخصص هنا .." value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">ايميل الطبيب</label>
                                                            <input type="email" name="dr_email" class="form-control email" placeholder="الايميل هنا .." value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">رقم هاتف الطبيب</label>
                                                            <input type="number" pattern="\d*" name="dr_phone" class="form-control phone" placeholder="رقم الهاتف هنا" value="" required>
                                                        </div>
                                                    <!-- </div>
                                                    <div class="row"> -->
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">المستشفى أو الشركة</label>
                                                            <input type="text" name="hospital" class="form-control hospital" placeholder="الجهه هنا .." value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">اسم المريض</label>
                                                            <input type="text" name="pa_name" class="form-control p_name" placeholder="الاسم هنا .." value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">رقم معرف المريض</label>
                                                            <input type="number" pattern="\d*" name="pa_id" class="form-control id" placeholder="المعرف هنا" value="" required>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label dot">عمر المريض</label>
                                                            <input type="number" pattern="\d*" max="99" name="pa_age" class="form-control age" placeholder="المعرف هنا" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mt-4">
                                                            <label class="form-label dot">عموم الحاله الصحية</label>
                                                            <textarea name="discription" class="form-control desc" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-action first">
                                                        <button class="btn btn-form disabled mx-3 with-arrow" data-bs-target="#carouselHealthIndicators" data-bs-slide="next"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="">&nbsp; التالي</button>
                                                        <p>تسجيل معلومات الطبيب والمريض</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="carousel-item two" data-bs-interval="100000">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">

                                                    <div class="row mb-2 align-items-center">
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5 col-xxl-5">
                                                            <div class="male-front">
                                                                <div class="pointer head">
                                                                    <p>
                                                                        الجمجمة
                                                                    </p>
                                                                </div>
                                                                <div class="pointer ear"></div>
                                                                <div class="pointer chin"></div>
                                                                <div class="pointer neck"></div>
                                                                <div class="pointer chest"></div>
                                                                <div class="pointer leftArm"></div>
                                                                <div class="pointer rightArm"></div>
                                                                <div class="pointer leftHand"></div>
                                                                <div class="pointer rightHand"></div>
                                                                <div class="pointer leftFoot"></div>
                                                                <div class="pointer rightFoot"></div>
                                                                <img src="{{asset('user/assets/images/male-front.png')}}" class="img-fluid robot" alt="male-front">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3 py-sm-4 text-end">
                                                            <label class="form-label dot d-xxl-block">تحديد القسم</label>
                                                            <select class="form-select body-parts"  name="parts" multiple aria-label="Default select example">
                                                                <!-- <option selected>اختيار من هنا ..</option> -->
                                                                <option value="skull">الجمجمة</option>
                                                                <option value="neck">neck</option>
                                                                <option value="backbones">العامود الفقري</option>
                                                                <option value="leftHand">LH</option>
                                                                <option value="rightHand">RH</option>
                                                                <option value="leftLeg">LL</option>
                                                                <option value="rightLeg">RL</option>
                                                                <option value="leftFoot">LF</option>
                                                                <option value="rightFoot">RF</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                            <div class="male-back">
                                                                <div class="pointer back">
                                                                    <p>
                                                                        العامود الفقري
                                                                    </p>
                                                                </div>
                                                                <div class="pointer leftHand"></div>
                                                                <div class="pointer rightHand"></div>
                                                                <div class="pointer leftLeg"></div>
                                                                <div class="pointer rightLeg"></div>
                                                                <div class="pointer leftFoot"></div>
                                                                <div class="pointer rightFoot"></div>
                                                                <img src="{{asset('user/assets/images/male-back.png')}}" class="img-fluid robot" alt="male-back">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-action">
                                                        <button class="btn btn-form disabled mx-3 with-arrow" data-bs-target="#carouselHealthIndicators" data-bs-slide="next"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="">&nbsp; التالي</button>
                                                        <p>اختيار نوع الخدمة المطلوبة</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item three carousel-blur" data-bs-interval="100000">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="row mb-2 align-items-center">
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5 col-xxl-5">
                                                            <div class="male-front">
                                                                <div class="pointer head"></div>
                                                                <div class="pointer ear"></div>
                                                                <div class="pointer chin"></div>
                                                                <div class="pointer neck"></div>
                                                                <div class="pointer chest"></div>
                                                                <div class="pointer leftArm"></div>
                                                                <div class="pointer rightArm"></div>
                                                                <div class="pointer leftHand"></div>
                                                                <div class="pointer rightHand"></div>
                                                                <div class="pointer leftFoot"></div>
                                                                <div class="pointer rightFoot"></div>
                                                                <img src="{{asset('user/assets/images/male-front.png')}}" class="img-fluid robot" alt="male-front">
                                                            </div>
                                                            <!-- <img src="{{asset('user/assets/images/male-front.png')}}" class="img-fluid robot" alt="male-front"> -->
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 col-xxl-3 text-end">
                                                            <label class="form-label dot">اختيار نوع الإجراء الطبي</label>
                                                            <select class="form-select procedure" required name="procedure" aria-label="Default select example">
                                                                <option selected>اختيار من هنا ..</option>
                                                                <option>الجمجمة</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label class="form-label dot mt-4">رفع الصور الطبية</label>
                                                            <div class="upload-btn-wrapper">
                                                                <button class="btn btn-upload health"><img src="{{asset('user/assets/icons/upload-img.svg')}}" alt="upload-img"></button>
                                                                <input type="file" id="health-file" required name="myfile" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                            <div class="male-back">
                                                                <div class="pointer back"></div>
                                                                <div class="pointer leftHand"></div>
                                                                <div class="pointer rightHand"></div>
                                                                <div class="pointer leftLeg"></div>
                                                                <div class="pointer rightLeg"></div>
                                                                <div class="pointer leftFoot"></div>
                                                                <div class="pointer rightFoot"></div>
                                                                <img src="{{asset('user/assets/images/male-back.png')}}" class="img-fluid robot" alt="male-back">
                                                            </div>
                                                            <!-- <img src="{{asset('user/assets/images/male-back.png')}}" class="img-fluid robot" alt="male-back"> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-action">
                                                        <button class="btn btn-form disabled  mx-3 with-arrow" data-bs-target="#carouselHealthIndicators" data-bs-slide="next"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="">&nbsp; التالي</button>
                                                        <p>اختيار نوع الخدمة المطلوبة</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item" data-bs-interval="100000">
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="submitted-data">
                                                        <h6>رقم الطلب</h6>
                                                        @auth
                                                        <h1>{{@$order->id+1 }}</h1>
                                                        @else<h1>244</h1>
                                                        @endauth
                                                        <div class="">
                                                            <p>تسجيل معلومات الطبيب والمريض</p>
                                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>اختيار نوع الخدمة المطلوبة</p>
                                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>اختيار نوع الاجراء الطبي</p>
                                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <img src="{{asset('user/assets/images/man-flying.png')}}" class="flying-man fly-desktop" alt="">
                                                    <img src="{{asset('user/assets/images/man-flying-mobile.png')}}" class="flying-man fly-mobile" alt="">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-action">
                                                        <!-- data-bs-toggle="modal" data-bs-target="#healthServicesFinalModal" -->
                                                        <button class="btn btn-form mx-3 with-arrow carousel-next-icon-show" type="submit">تفاصيل الطلب</button>
                                                        <p>تمت بنجاح المرحلة الأولى من الطلب</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <!-- <a class="carousel-control-prev" href="#carouselHealthIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselHealthIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> -->

                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselHealthIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>