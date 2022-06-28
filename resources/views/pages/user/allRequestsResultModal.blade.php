   <div class="modal fade page result pay" id="allRequestsResultModal" tabindex="-1" aria-labelledby="allRequestsResultModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-fullscreen">
           <div class="modal-content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="modal-header border-0">
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                               <div>
                                   <span class="outline dot">اهلاً وسهلاً بكم</span>
                                   <h1 class="modal-title">طلباتي
                               </div>
                               </h1>
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

                       </div>
                       <div class="modal-body">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-top">
                                       <span>رقم الطلب:</span>
                                       <span id="ids" class="id">{{@$ss->id}}</span>
                                       <div id="dateTime" class="dateTime">{{@$ss->created_at}}</div>
                                   </div>
                                   <input type="number" id="status" class="status" name="status" hidden>
                                   <div class="row text-center mb-5 final">
                                       <div class="col-sm-12 col-lg col-xxl">

                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">

                                           <div>
                                               <p>رفع الطلب</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       <input type="text" id="status" name="status" hidden>
                                       <div class="col-sm-12 col-lg col-xxl">
                                           
                                           @if( request()->input('status')>= 2 || @$ss->status >= 2)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>اجتماع الخطة العلاجية</p>
                                           </div>
                                       </div>
                                       @if( request()->input('status')>= 2 ||@$ss->status >= 2)
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif

                                       <div class="col-sm-12 col-lg col-xxl">
                                       
                                           @if( @$ss->status >= 3)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>اجتماع النموذج الأول</p>
                                           </div>
                                       </div>
                                       @if( @$ss->status >= 3)
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif
                                       <div class="col-sm-12 col-lg col-xxl">
                                           
                                           @if( @$ss->status >= 4)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>اجتماع النموذج النهائي</p>
                                           </div>
                                       </div>
                                       @if( @$ss->status >= 4)
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif
                                       <div class="col-sm-12 col-lg col-xxl">
                                        
                                           @if( @$ss->status >= 5)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>الدفع</p>
                                           </div>
                                       </div>
                                       @if( @$ss->status >= 5)
                                       <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif
                                       <div class="col-sm-12 col-lg col-xxl">
                                           
                                           @if( @$ss->status >= 6)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>الطباعة ثلاثية الأبعاد</p>
                                           </div>
                                       </div>
                                       @if( @$ss->status >= 6)
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif
                                       <div class="col-sm-12 col-lg col-xxl">
                                     
                                           @if( @$ss->status >= 7)
                                           <div id="date" class="dateTime small">{{@$ss->created_at}}</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           @else
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           @endif
                                           <div>
                                               <p>اختبار الجودة</p>
                                           </div>
                                       </div>
                                       @if( @$ss->status >= 7)
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       @else
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       @endif
                                       <div class="col-sm-12 col-lg col-xxl">
                                         
                                           @if( @$ss->status >= 8)
                                           <div id="dateTime" class="dateTime small">{{@$ss->created_at}}</div>
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
                                                   <input type="text" class="form-control" placeholder=".. الاسم هنا" id="dr_name" value="{{@$ss->dr_name}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">تخصص الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. التخصص هنا" id="dr_spec" value="{{@$ss->dr_spec}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">ايميل الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. الايميل هنا" id="dr_email" value="{{@$ss->dr_email}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">رقم هاتف الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" id="dr_phone" value="{{@$ss->dr_phone}}" readonly>
                                               </div>
                                           </div>
                                           <div class="row mb-2">
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">المستشفى أو الشركة</label>
                                                   <input type="text" class="form-control" placeholder=".. الجهه هنا" id="hospital" value="{{@$ss->hospital}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">اسم المريض</label>
                                                   <input type="text" class="form-control" placeholder=".. الاسم هنا" id="pa_name" value="{{@$ss->pa_name}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">رقم معرف المريض</label>
                                                   <input type="text" class="form-control" placeholder=".. المعرف هنا" id="pa_id" value="{{@$ss->pa_id}}" readonly>
                                               </div>
                                               <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">عمر المريض</label>
                                                   <input type="text" class="form-control" placeholder=".. المعرف هنا" id="pa_age" value="{{@$ss->pa_age}}" readonly>
                                               </div>
                                           </div>
                                           <div class="row mt-5">
                                               <div class="col-md-12">
                                                   <label class="form-label">عموم الحاله الصحية</label>
                                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$ss->discription}}</textarea>
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
                                           <input type="text" class="form-control" placeholder="الجمجمة، العامود الفقري" id="parts" value="{{@$ss->parts}}" readonly>
                                           <label class="form-label mt-4">نوع الاجراء الطبي</label>
                                           <input type="text" class="form-control mb-4" placeholder=" .. اختيار من هنا" id="procedure" value="{{@$ss->procedure}}" readonly>
                                           <label class="form-label">الصور الطبية</label>
                                           <div class="upload-btn-wrapper">

                                               <input type="text" name="myfile" id="myfile" hidden>
                                               <a class="btn btn-upload" href="{{ asset(  @$ss->myfile) }}" download=" {{ @$ss->myfile }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                           </div>

                                       </div>

                                       <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                           <img src="{{asset('user/assets/images/patient-back.png')}}" class="img-fluid" alt="patient-back">
                                       </div>
                                       <div class="col-md-12 col-lg-3">
                                           <div class="form-action">
                                               <button class="btn btn-form mx-3 with-arrow" type="submit" data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي sss</button>
                                               <p>سيتم تحديث حالة الطلب من قبل الإدارة</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
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
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </div>