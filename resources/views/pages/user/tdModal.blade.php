 <div class="modal fade page" id="tdModal" tabindex="-1" aria-labelledby="tdModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-fullscreen">
         <div class="modal-content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="modal-header border-0">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             <div>
                                 @if(@$tech->subheading != null)
                                 <span class="outline dot">{{$tech->subheading}}</span>
                                 @else
                                 <span class="outline dot">اهلاً وسهلاً</span>
                                 @endif
                                 @if(@$tech->heading != null)
                                 <h1 class="modal-title right">
                                     <span class="btm-line"><span class="inner-line"></span>
                                         {{$tech->heading}}
                                     </span>
                                 </h1>
                                 @else
                                 <h1 class="modal-title right">
                                     <span class="btm-line"><span class="inner-line"></span>
                                         تقنية ثلاثية الأبعاد
                                     </span>
                                 </h1>
                                 @endif
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
                         @if(@$tech->bodytext != null)

                         <div class="modal-body">
                             <p>{!!$tech->bodytext!!}</p>
                         </div>
                         @else
                         <div class="modal-body">
                             <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                                 يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                             </p>
                             <p>إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                                 يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل
                                 فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم المو</p>
                             <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى
                                 أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                                 يليق.</p>
                             <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو
                                 حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                         </div>
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>