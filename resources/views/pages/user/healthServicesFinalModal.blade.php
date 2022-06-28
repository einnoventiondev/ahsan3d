<div class="modal fade page result" id="healthServicesFinalModal" tabindex="-1" aria-labelledby="healthServicesFinalModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                <h1 class="modal-title"><span class="btm-line">طلباتي<span class="inner-line"></span></span></h1>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-top">
                                        <span>رقم الطلب:</span>
                                        <span id="id" class="id">{{@$order->id}}</span>
                                        <div id="dateTime" class="dateTime">{{@$order->created_at}}</div>
                                    </div>
                                    <input type="number" id="status" class="status" name="status" hidden>
                                    <div class="row text-center mb-5 final">
                                        <div class="col-sm-12 col-lg col-xxl">

                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">

                                            <div>
                                                <p>رفع الطلب</p>
                                            </div>
                                        </div>
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( request()->input('name')>= 2 || @$order->status >= 2)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>اجتماع الخطة العلاجية</p>
                                            </div>
                                        </div>
                                        @if( request()->input('name')>= 2 ||@$order->status >= 2)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif

                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 3)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>اجتماع النموذج الأول</p>
                                            </div>
                                        </div>
                                        @if( @$order->status >= 3)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 4)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>اجتماع النموذج النهائي</p>
                                            </div>
                                        </div>
                                        @if( @$order->status >= 4)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 5)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>الدفع</p>
                                            </div>
                                        </div>
                                        @if( @$order->status >= 5)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 6)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>الطباعة ثلاثية الأبعاد</p>
                                            </div>
                                        </div>
                                        @if( @$order->status >= 6)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 7)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
                                            <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                            @endif
                                            <div>
                                                <p>اختبار الجودة</p>
                                            </div>
                                        </div>
                                        @if( @$order->status >= 7)
                                        <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                        @else
                                        <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                        @endif
                                        <div class="col-sm-12 col-lg col-xxl">
                                            <div id="date" class="dateTime small">{{@$order->created_at}}</div>
                                            @if( @$order->status >= 8)
                                            <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                            @else
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
                                                    <input type="text" class="form-control" placeholder=".. الاسم هنا" id="dr_name" value="{{@$order->dr_name}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">تخصص الطبيب</label>
                                                    <input type="text" class="form-control" placeholder=".. التخصص هنا" id="dr_spec" value="{{@$order->dr_spec}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">ايميل الطبيب</label>
                                                    <input type="text" class="form-control" placeholder=".. الايميل هنا" id="dr_email" value="{{@$order->dr_email}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">رقم هاتف الطبيب</label>
                                                    <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" id="dr_phone" value="{{@$order->dr_phone}}" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">المستشفى أو الشركة</label>
                                                    <input type="text" class="form-control" placeholder=".. الجهه هنا" id="hospital" value="{{@$order->hospital}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">اسم المريض</label>
                                                    <input type="text" class="form-control" placeholder=".. الاسم هنا" id="pa_name" value="{{@$order->pa_name}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">رقم معرف المريض</label>
                                                    <input type="text" class="form-control" placeholder=".. المعرف هنا" id="pa_id" value="{{@$order->pa_id}}" readonly>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">عمر المريض</label>
                                                    <input type="text" class="form-control" placeholder=".. المعرف هنا" id="pa_age" value="{{@$order->pa_age}}" readonly>
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
                                            <input type="text" class="form-control" placeholder="الجمجمة، العامود الفقري" id="parts" value="{{@$order->parts}}" readonly>
                                            <label class="form-label mt-4">نوع الاجراء الطبي</label>
                                            <input type="text" class="form-control mb-4" placeholder=" .. اختيار من هنا" id="procedure" value="{{@$order->procedure}}" readonly>
                                            <label class="form-label">الصور الطبية</label>
                                            <div class="upload-btn-wrapper">


                                                <a class="btn btn-upload" href="{{ asset(  @$order->myfile) }}" download=" {{ @$order->myfile }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <img src="{{asset('user/assets/images/patient-back.png')}}" class="img-fluid" alt="patient-back">
                                        </div>
                                        <div class="col-md-12 col-lg-3">
                                            <div class="form-action">
                                                <button class="btn btn-form mx-3 with-arrow" type="submit" data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</button>
                                                <p>سيتم تحديث حالة الطلب من قبل الإدارة</p>
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