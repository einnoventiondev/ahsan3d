@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('client.index') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('client.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">غير نشط
                                        </label>
                                        <input type="text" class="form-control"
                                            name="inactive" id=""
                                            aria-describedby="emailHelp"
                                            placeholder="أدخل العنوان">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نشيط
                                        </label>
                                        <input type="text" class="form-control"
                                            name="active" id=""
                                            aria-describedby=""
                                            placeholder="أدخل العنوان الفرعي">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> سجل
                                        </label>
                                        <input type="text" class="form-control"
                                            name="log" id="" aria-describedby=""
                                            placeholder="أدخل السجل">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">أعضاء الفريق
                                        </label>
                                        <input type="number"
                                            class="form-control"
                                            name="team_member" id=""
                                            aria-describedby=""
                                            placeholder="أدخل عضو الفريق">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">دفع
                                        </label>
                                        <input type="number"
                                            class="form-control"
                                            name="payment" id=""
                                            aria-describedby=""
                                            placeholder="أدخل المدفوعات">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">طلب
                                        </label>
                                        <input type="text" class="form-control"
                                            name="requests" id=""
                                            aria-describedby=""
                                            placeholder="أدخل الطلب">
                                        <small id="" class="form-text
                                            text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عرض
                                        </label>
                                        <input type="file"
                                            accept="application/pdf,
                                            application/vnd.ms-excel"
                                            class="form-control" name="proposal"
                                            id=""
                                            aria-describedby="">
                                        <small id="" class="form-text
                                            text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">فاتورة
                                        </label>
                                        <input type="file"
                                            accept="application/pdf,
                                            application/vnd.ms-excel"
                                            class="form-control" name="invoice"
                                            id=""
                                            aria-describedby="">
                                        <small id="" class="form-text
                                            text-muted"><small>
                                            </div>


                                        </div>

                                    </div>
                                    <button type="submit" class="btn
                                        btn-primary">إرسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
