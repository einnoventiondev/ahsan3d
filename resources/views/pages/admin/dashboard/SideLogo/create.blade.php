@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>الصورة الجانبية</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('side.index') }}">الصورة الجانبية</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('side.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">العنوان الفرعي
                                        </label>
                                        <input type="text" class="form-control"
                                            name="subheading" id="" aria-describedby=""
                                            placeholder="أدخل العنوان الفرعي">
                                        <small id="" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان </label>
                                        <input type="text" class="form-control"
                                            name="heading" id=""
                                            aria-describedby="emailHelp"
                                            placeholder="أدخل العنوان">
                                        <small id="" class="form-text text-muted"></small>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
 
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="side_image" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="side_image"
                                            id="side_image" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                    
                                </div>
                            </div>
                            
                          
                            <button type="submit" class="btn btn-primary">يقدم</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
