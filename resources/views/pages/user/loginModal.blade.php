<div class="modal fade page login onTab animate__animated animate__fadeInLeft" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
                                    <span class="btm-line">
                                        <span class="inner-line"></span>
                                    </span>
                                    تسجيل دخول
                                </h1>
                            </div>
                            <div></div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="" data-bs-toggle="tab" data-bs-target="#userloginModal" type="button" role="tab" aria-selected="true">
                                                مستخدم
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="" data-bs-toggle="tab" data-bs-target="#designerloginModal" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                                مصمم 
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="userloginModal" role="tabpanel">
                                            <form action="{{route('login')}}" class="row gy-4 gx-5" method="post">
                                                @csrf
                                                
                                                <input type="hidden" name="role" value="12">
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <label class="form-label dot">الايميل</label>
                                                    <input type="email" name="email" class="form-control email" placeholder="الايميل هنا .." value="">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <label class="form-label dot">كلمة المرور</label>
                                                    <input type="password" name="password" class="form-control pass" placeholder="التخصص هنا .." value="">
                                                    <div class="forget-password-box">
                                                        <a href="#" class="forget-password">نسيك كلمة المرور</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 new-account-box">
                                                    <a href="#register" class="new-account" data-bs-toggle="modal" data-bs-target="#registerModal">
                                                        انشاء حساب جديد
                                                    </a>
                                                </div>
                                                <div class="form-action ahs-from-action">
                                                    <button class="btn btn-form mx-3 with-arrow disabled" type="submit">دخول</button>
                                                    <p>بيانات الدخول</p>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade designerModel" id="designerloginModal" role="tabpanel" aria-labelledby="profile-tab">
                                            <form action="{{route('login')}}" class="row gy-4 gx-5" method="post">
                                                @csrf
                                                <input type="hidden" name="role" value="3">
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <label class="form-label dot">الايميل</label>
                                                    <input type="email" name="email" class="form-control email" placeholder="الايميل هنا .." value="">
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                                                    <label class="form-label dot">كلمة المرور</label>
                                                    <input type="password" name="password" class="form-control pass" placeholder="التخصص هنا .." value="">
                                                    <div class="forget-password-box">
                                                        <a href="#" class="forget-password">نسيك كلمة المرور</a>
                                                    </div>
                                                </div>
                                                <div class="form-action">
                                                    <button class="btn btn-form mx-3 with-arrow disabled" type="submit">دخول</button>
                                                    <p>بيانات الدخول</p>
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
    </div>
</div>