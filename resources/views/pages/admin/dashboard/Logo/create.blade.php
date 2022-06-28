@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>الشعارات</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('logo.index') }}">الشعارات</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('logo.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="logo1" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="logo1"
                                            id="logo1" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="logo2" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="logo2"
                                            id="logo2" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="logo3" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="logo3"
                                            id="logo3" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="logo4" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="logo4"
                                            id="logo4" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">شعار </label>
                                <input type="file" class="form-control"
                                    name="logo5" id="" accept="image/*"
                                    type="file"
                                    id="download-cv-file-name" name="logo5"
                                    id="logo5" aria-describedby=""
                                    placeholder="Enter sub heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">شعار </label>
                                <input type="file" class="form-control"
                                    name="logo6" id="" accept="image/*"
                                    type="file"
                                    id="download-cv-file-name" name="logo6"
                                    id="logo6" aria-describedby=""
                                    placeholder="Enter sub heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">شعار </label>
                                        <input type="file" class="form-control"
                                            name="logo7" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="logo7"
                                            id="logo7" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo8">شعار </label>
                                        <input type="file" class="form-control"
                                             accept="image/*"

                                            name="logo8[]"
                                            id="logo8" aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small class="form-text text-muted">
                                        </small>

                                    </div>
                                </div>
                                <div class="add-more">

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">يقدم</button>
                            <button type="button" class="btn btn-primary add-more-btn">إضافة جديد</button>
                            {{--  <div class="content add-more-btn-main">
                                <button type="button" class="btn btn-green-icon add-more-btn mt-4"><img src="{{ asset('assets/icons/plus-circle.png') }}" alt=""> إضافة جديد</button>
                            </div>  --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script>
    $(document).ready(function () {
        let count=0;
        $(".add-more-btn").click(function () {
            count++;
            var add= `<div class="col-md-6">
                <div class="form-group">
                    <label for="logo8">شعار </label>
                    <input type="file" class="form-control"
                         accept="image/*"
                        name="logo8[`+ count +` ]"
                        id="logo8" aria-describedby=""
                        placeholder="Enter sub heading">
                    <small class="form-text text-muted">
                    </small>

                </div>
            </div>`;
           $(".add-more").append(add);

         });
    });

</script>


@endsection
