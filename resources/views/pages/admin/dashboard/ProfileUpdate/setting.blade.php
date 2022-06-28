@extends('layouts.admin.app')
@section('content')
<div class="content-main">
 <h3>ملفي</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <!-- <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a  href="{{ route('contact.index') }}">اتصل بنا</a></li> -->

        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
           
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-sm-3 col-lg-3">
            </div> -->
            <div class="col-sm-6 col-lg-6">
                <div>
                    <div class="card-header pb-0">
                        <!-- <h4 class="card-title mb-0">ملفي</h4> -->
                        <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{route('profile.setting')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="media">
                                       @if(@auth()->user()->profile == null)
                                        <img class="img-70 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="">
                                        @else
                                        <img class="img-70 rounded-circle" alt="" src="{{ asset(  auth()->user()->profile) }}">
                                        @endif
                                        <!-- <p class="f-12">جائزة الأميرعبدالله الفيصل</p> -->
                                        <div class="badge-bottom"><span class="badge badge-primary"></span></div>
                                    </div>
                                    <input type="file" accept="image/*" name="profile">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">اسم</label>
                                <input class="form-control" name="name" placeholder="Admin" value="{{auth()->user()->name}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">بريد الالكتروني</label>
                                <input class="form-control" name="email" placeholder="your-email@domain.com" value="{{auth()->user()->email}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">كلمة المرور</label>
                                <input class="form-control" name="password" type="password" value="password">
                            </div>

                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">تحديث </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection
