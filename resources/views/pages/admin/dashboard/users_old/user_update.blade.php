@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('user.list') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        
<!-- show page -->




<!-- edit page -->

<div class="content-main ">
<h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('user.list') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                      <form class="row" action="" method="">
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">لقب</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->name}}" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$data->email}}" placeholder="">
                        </div>
                        <div class="mb-3 col-md-6">

                        <label for="exampleFormControlInput1" class="form-label">الحالة</label>
                        @if($data->approve =='1')
                            <select class="form-select" aria-label="Default select example">
                                <option value="1" selected="">وافق</option>
                                <option value="2">غير مقبول</option>
                            </select>
                            @else
                            <select class="form-select" aria-label="Default select example">
                                <option value="1" selected="">وافق</option>
                                <option value="2">غير مقبول</option>
                            </select>
                           @endif 
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-3">تحديث</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
