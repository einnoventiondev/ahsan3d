  <div class="modal fade page result-modal" id="otherStageOneModal" tabindex="-1" aria-labelledby="otherStageOneModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="modal-header border-0">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              <div>
                                  <span class="outline dot">أكثر من 13 عضو اصطناعي</span>
                                  <h1 class="modal-title right">الخدمات الطبية</h1>
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
                              <div class="row align-items-center">
                                  <div class="col-md-5">
                                      <div class="submitted-data">
                                          <h6>رقم الطلب</h6>
                                          <h1>244</h1>
                                          <div class="">
                                              <p>رفع الطلب</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>اجتماع الخطة العلاجية</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>اجتماع النموذج الأول</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>اجتماع النموذج النهائي</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-7">
                                      <img src="{{asset('user/assets/images/man-flying.png')}}" class="flying-man" alt="">
                                      <div class="left-content">
                                          <div class="">
                                              <p>الدفع</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>الطباعة ثلاثية الأبعاد</p>
                                              <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>اختبار الجودة</p>
                                              <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="">
                                          </div>
                                          <div>
                                              <p>التوصيل واتمام الطلب</p>
                                              <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="">
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="modal-footer">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-action">
                                          <button class="btn btn-form mx-3 with-arrow" type="submit" data-bs-toggle="modal" data-bs-target="#stageOneFinalModal">تفاصيل الطلب</button>
                                          <button class="btn btn-sky mx-3">الفاتورة</button>
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