@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>طلبات الخدمات الطبية</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('medi.index') }}">طلبات الخدمات الطبية</a></li>
        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row
                                                    justify-content-center">
                                                    @if(@$order->status == 8)
                                                    <h3>Approved</h3>
                                                    @else
                                                    <form
                                                        action="{{route('updated.status')}}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="text"
                                                            name="id"
                                                            value="{{@$order->id}}"
                                                        hidden>
                                                        <select name="status"
                                                            id="status"
                                                            class="form-control">
                                                            <option value="1">
                                                                اجتماع الخطة
                                                                العلاجية</option>
                                                            <option value="2">
                                                                اجتماع النموذج
                                                                الأول</option>
                                                            <option value="3">
                                                                اجتماع النموذج
                                                                النهائي</option>
                                                            <option value="4">
                                                                الدفع</option>
                                                            <option value="5">
                                                                الطباعة ثلاثية
                                                                الأبعاد</option>
                                                            <option value="6">
                                                                اختبار الجودة</option>
                                                            <option value="7">
                                                                التوصيل واتمام
                                                                الطلب</option>
                                                        </select>
                                                        <br>


                                                        <button class="btn
                                                            btn-primary"
                                                            type="submit"> حفظ</button>
                                                    </form>
                                                    @endif
                                                </div>
                                                <h1 class="title text-center
                                                    mb-5 no-border">
                                                    <div class="form-top">
                                                        <span>رقم الطلب:</span>
                                                        <span class="id">{{@$order->id}}</span>
                                                        <div class="dateTime">{{@$order->created_at}}</div>
                                                    </div>
                                                </h1>
                                                <div class="row
                                                    justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row mb-2">
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">اسم
                                                                    الطبيب</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الاسم هنا"
                                                                    value="{{@$order->dr_name}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">تخصص
                                                                    الطبيب</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    التخصص هنا"
                                                                    value="{{@$order->dr_spec}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">ايميل
                                                                    الطبيب</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الايميل هنا"
                                                                    value="{{@$order->dr_email}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">رقم
                                                                    هاتف الطبيب</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    رقم الهاتف
                                                                    هنا"
                                                                    value="{{@$order->dr_phone}}"
                                                                readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">المستشفى
                                                                    أو الشركة</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الجهه هنا"
                                                                    value="{{@$order->hospital}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">اسم
                                                                    المريض</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الاسم هنا"
                                                                    value="{{@$order->pa_name}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">رقم
                                                                    معرف المريض</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    المعرف هنا"
                                                                    value="{{@$order->pa_id}}"
                                                                readonly>
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">عمر
                                                                    المريض</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    المعرف هنا"
                                                                    value="{{@$order->pa_age}}"
                                                                readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            <div
                                                                class="col-md-12">
                                                                <label
                                                                    class="form-label">عموم
                                                                    الحاله
                                                                    الصحية</label>
                                                                <textarea
                                                                    class="form-control"
                                                                    id="exampleFormControlTextarea1"
                                                                    rows="4"
                                                                    placeholder="..الوصف
                                                                    هنا"
                                                                    readonly>{{@$order->discription}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row
                                                    justify-content-center
                                                    pt-5">
                                                    <div class="col-sm-12
                                                        col-md-4 col-lg-4
                                                        col-xl-4 col-xxl-4">
                                                        <img
                                                            src="{{asset('user/assets/images/patient-front.png')}}"
                                                            class="img-fluid"
                                                            alt="patient-front">
                                                    </div>
                                                    <div class="col-md-4
                                                        col-lg-3 pt-4 pt-md-0
                                                        mt-5">
                                                        <label
                                                            class="form-label">القسم</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            placeholder="الجمجمة،
                                                            العامود الفقري"
                                                            value="{{@$order->parts}}"
                                                        readonly>
                                                        <label class="form-label
                                                            mt-4">نوع الاجراء
                                                            الطبي</label>
                                                        <input type="text"
                                                            class="form-control
                                                            mb-4"
                                                            placeholder="..
                                                            اختيار من هنا"
                                                            value="{{@$order->procedure}}"
                                                        readonly>
                                                        <label
                                                            class="form-label">الصور
                                                            الطبية</label>
                                                        <div
                                                            class="upload-btn-wrapper">
                                                            <a class="btn
                                                                btn-upload"
                                                                href="{{
                                                                asset('storage/'
                                                                . @$order->myfile)
                                                                }}" download="
                                                                {{ @$order->myfile
                                                                }}"><img
                                                                    src="{{asset('user/assets/icons/uploaded-img.svg')}}"
                                                                    alt="upload-img"></a>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12
                                                        col-md-4 col-lg-4
                                                        col-xl-4 col-xxl-4">
                                                        <img
                                                            src="{{asset('user/assets/images/patient-back.png')}}"
                                                            class="img-fluid"
                                                            alt="patient-back">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            id="exampleModalLabel">إرسال الاستعلام</h5>
                                        <button type="button" class="btn-close send-query-cross"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body"

                                        method="POST">
                                        @csrf

                                            <div class="col-12">
                                                <label class="form-label">بريد الالكتروني</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="email"
                                                    value="{{$user->email}}"
                                                readonly>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">سؤال</label>
                                                <textarea class="form-control"
                                                    id="question"
                                                    name="question"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn
                                            btn-secondary"
                                            data-bs-dismiss="modal">يغلق</button>
                                        <button type="submit" class="btn
                                            btn-primary btn-submit"
                                            data-bs-dismiss="modal"
                                            aria-label="Send">إرسال</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                {{--  <div class="card medical-card">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="modal-body">

                                            <div class="row">
                                                @livewire('chats',['user_id' => $order->user_id,'request_id'=>$order->id,'request_type'=>'App\Models\Medical'])
                                            </div>



                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>  --}}



            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".btn-submit").click(function(e){
            e.preventDefault();
            var question = $('textarea#question').val();
            var email = $("input[name=email]").val();
            $.ajax({
            type:'POST',
            url:"{{ route('ask.question') }}",
            data:{ question:question, email:email},
            success:function(data){
                console.log("successful send");
            }
            });

        });
    // $('.modalBtn').change(function (){
    //     var status = $('#status').val();
    //     $('#query_status').val(status);
    //     $('#query').val(1);
    // })
    </script>
@endpush
