<div class="modal fade page result" id="publicFullReadableModal" tabindex="-1" aria-labelledby="publicServiesFinalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                <h1 class="modal-title right">طلباتي</h1>
                            </div>
                            <div class="profile">
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
                                        <span class="id">244</span>
                                        <div class="dateTime">11/01/2022 - 03:00PM</div>
                                        <!-- <div class="dateTime small">11/01/2022 - 03:00PM</div> -->
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
                                            <img src="{{asset('user/assets/icons/green-line.svg')}}" class="single" alt="green-line">
                                            <div class="col-auto">
                                                <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                                <img src="{{asset('user/assets/icons/green-circle.svg')}}" class="green-circle" alt="green-circle">
                                                <div>
                                                    <p class="color-blue">الدفع</p>
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
                                                    <input type="text" class="form-control" placeholder=".. الاسم هنا" value="">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">رقم الهاتف</label>
                                                    <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" value="">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">الايميل</label>
                                                    <input type="text" class="form-control" placeholder=".. الايميل هنا" value="">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">التخصص</label>
                                                    <input type="text" class="form-control" placeholder=".. التخصص هنا" value="">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">الجنس</label>
                                                    <input type="text" class="form-control" placeholder=".. الجنس هنا" value="">
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">صور المجسم</label>
                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                    </div>
                                                </div>
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
                                                            <input type="text" class="form-control" placeholder=".. الاسم هنا" value="">
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                            <label class="form-label">لون الطباعة</label>
                                                            <input type="text" class="form-control" placeholder=".. التخصص هنا" value="">
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                            <label class="form-label">دقة الطباعة (صورة كمثال)</label>
                                                            <input type="text" class="form-control" placeholder=".. التخصص هنا" value="">
                                                        </div>

                                                    </div>
                                                    <div class="row conditional-blur">
                                                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                            <label class="form-label">رفع ملف المجسم</label>
                                                            <div class="upload-btn-wrapper">
                                                                <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                                <span class="form-detail">STL,PNG,JPG صور بصيغة</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-action">
                                                        <button class="btn btn-form mx-3 with-arrow" type="button" data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</button>
                                                        <button class="btn btn-sky mx-3 with-arrow" type="button" data-bs-toggle="modal" data-bs-target="#requestsModal">الفاتورة</button>
                                                        <p>تمت عملية الدفع بنجاح</p>
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