@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>طلبات الخدمات العامة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('publics.index') }}">طلبات الخدمات العامة</a></li>
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
                                        <form
                                            action="{{route('public.updated.status')}}"
                                            method="POST">
                                            @csrf
                                            <br>
                                            <input type="hidden" name="id" value="{{ $order->id }}">
                                            <select name="status"
                                                class="form-control">
                                                <option value="1"> رفع الطلب</option>
                                                <option value="2"> الدفع</option>
                                            </select>
                                            <br>
                                            {{-- <button type="button" class="btn
                                                btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                إرسال الاستعلام
                                            </button> --}}
                                            <button class="btn btn-primary"
                                                type="submit"> حفظ</button>
                                        </form>
                                        <div class="payment d-none"
                                            id="payment">
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="flexRadioDefault1">
                                                    <img
                                                        src="{{asset('user/assets/images/mada-logo.svg')}}"
                                                        alt="">
                                                    <p>مدى</p>
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                </label>
                                                <label class="form-check-label"
                                                    for="flexRadioDefault2">
                                                    <img
                                                        src="{{asset('user/assets/images/masterCard.svg')}}"
                                                        alt="">
                                                    <p>فيزا وماستر كارد</p>
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="flexRadioDefault"
                                                        id="flexRadioDefault2">
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label"
                                                    for="flexRadioDefault3">
                                                    <img
                                                        src="{{asset('user/assets/images/apple-pay.svg')}}"
                                                        alt="">
                                                    <p>آبل باي</p>
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="flexRadioDefault"
                                                        id="flexRadioDefault3">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="reject-reason d-none"
                                            id="reject-reason">
                                            <div class="row mt-1
                                                justify-content-center">
                                                <div class="col-md-8">
                                                    <label class="form-label
                                                        dot">سبب الرفض</label>
                                                    <textarea
                                                        class="form-control"
                                                        id="exampleFormControlTextarea1"
                                                        rows="4"
                                                        placeholder="الوصف
                                                        هنا"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- <div class="form-top">
                            <span>رقم الطلب :</span>
                            <span class="id">{{@$order->id}}</span>
                            <div class="dateTime">{{@$order->created_at}}</div>
                            <div class="dateTime small">11/01/2022 - 03:00PM</div>
                        </div> -->
                                                <!-- <div class="">
                            <div class="row final two justify-content-center text-center">
                                <div class="col-auto">
                                    <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                    <div>
                                        <p>رفع الطلب</p>
                                    </div>
                                </div>
                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                <div class="col-auto">
                                    <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                    <div>
                                        <p>الدفع</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                                                <h4 class="title text-center
                                                    no-border conditional-blur">
                                                    <div class="form-top">
                                                        <span>رقم الطلب :</span>
                                                        <span class="id">{{@$order->id}}</span>
                                                        <div class="dateTime">
                                                            <p>{{@$order->created_at}}</p>
                                                        </div>
                                                        <!-- <div class="dateTime small">11/01/2022 - 03:00PM</div> -->
                                                    </div>
                                                </h4>
                                                <div class="row
                                                    justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row p-xs-0
                                                            p-3
                                                            conditional-blur">
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">الاسم
                                                                    الكامل</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الاسم هنا"
                                                                    readonly
                                                                    value="{{$order->full_name}}">
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">رقم
                                                                    الهاتف</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    رقم الهاتف
                                                                    هنا"
                                                                    readonly
                                                                    value="{{$order->phone_num}}">
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">الايميل</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الايميل هنا"
                                                                    readonly
                                                                    value="{{$order->email}}">
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">التخصص</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    التخصص هنا"
                                                                    readonly
                                                                    value="{{$order->specialization}}">
                                                            </div>
                                                            <div
                                                                class="col-sm-12
                                                                col-md-4
                                                                col-lg-3
                                                                col-xl-3
                                                                col-xxl-3 mt-4">
                                                                <label
                                                                    class="form-label">الجنس</label>
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="..
                                                                    الجنس هنا"
                                                                    readonly
                                                                    value="{{$order->gender}}">
                                                            </div>
                                                            <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label">صور المجسم</label>
                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                    </div>
                                                </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <h4 class="title text-center
                                                        mt-5 no-border
                                                        conditional-blur">تفاصيل
                                                        الطباعة</h4>
                                                    <div class="col-md-12">
                                                        <div class="row
                                                            justify-content-center">
                                                            <div
                                                                class="col-md-12">
                                                                <div class="row
                                                                    mb-2
                                                                    justify-content-between
                                                                    conditional-blur">
                                                                    <div
                                                                        class="col-sm-12
                                                                        col-md-4
                                                                        col-lg-3
                                                                        col-xl-3
                                                                        col-xxl-3">
                                                                        <label
                                                                            class="form-label">نوع
                                                                            الطباعة</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="..
                                                                            الاسم
                                                                            هنا"
                                                                            readonly
                                                                            value="{{$order->print_type}}">
                                                                    </div>
                                                                    <div
                                                                        class="col-sm-12
                                                                        col-md-4
                                                                        col-lg-3
                                                                        col-xl-3
                                                                        col-xxl-3">
                                                                        <label
                                                                            class="form-label">لون
                                                                            الطباعة</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="..
                                                                            التخصص
                                                                            هنا"
                                                                            readonly
                                                                            value="{{$order->print_color}}">
                                                                    </div>
                                                                    <div
                                                                        class="col-sm-12
                                                                        col-md-4
                                                                        col-lg-3
                                                                        col-xl-3
                                                                        col-xxl-3">
                                                                        <label
                                                                            class="form-label">دقة
                                                                            الطباعة
                                                                            (صورة
                                                                            كمثال)</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="..
                                                                            التخصص
                                                                            هنا"
                                                                            readonly
                                                                            value="{{@$public->print_resolution}}">
                                                                    </div>
                                                                </div>
                                                                <div class="row
                                                                    conditional-blur">
                                                                    <div
                                                                        class="col-sm-12
                                                                        col-md-4
                                                                        col-lg-3
                                                                        col-xl-3
                                                                        col-xxl-3
                                                                        mt-4">
                                                                        <label
                                                                            class="form-label">رفع
                                                                            ملف
                                                                            المجسم</label>
                                                                        <div
                                                                            class="upload-btn-wrapper">
                                                                            <a
                                                                                class="btn
                                                                                btn-upload"
                                                                                href="{{
                                                                                asset('storage/'
                                                                                .
                                                                                $order->print_img)
                                                                                }}"
                                                                                download="
                                                                                {{
                                                                                $order->print_img
                                                                                }}"><img
                                                                                    src="{{asset('user/assets/icons/uploaded-img.svg')}}"
                                                                                    alt="upload-img"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-action">
                                            <button class="btn btn-form mx-3 with-arrow public-service" type="button" data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</button>
                                            <p>سيتم تحديث حالة الطلب من قبل الإدارة</p>
                                        </div> -->
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
                                    <div class="modal-body">
                                        <form>

                                            <div class="col-12">
                                                <label class="form-label">بريد الالكتروني</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="email" value=""
                                                    readonly>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Question</label>
                                                <textarea class="form-control"
                                                    id="question"
                                                    name="question"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary btn-submit"
                                            data-bs-dismiss="modal"
                                            aria-label="Send">Send</button>
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
                                                @livewire('chats',['user_id' => $order->user_id,'request_id'=>$order->id,'request_type'=>'App\Models\Medical']))
                                            </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Modal -->

                    </div>
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
