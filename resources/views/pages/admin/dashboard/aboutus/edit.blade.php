@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>يزيد</h3>
    <div class="breadcrumb-main">

        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('about.index') }}">صفحة من نحن</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('about.update',
                            $abouts->id) }}">
                            @csrf
                            @method('put')
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">العنوان
                                            الفرعي
                                        </label>
                                        <input type="text" class="form-control"
                                            name="subheading" value="{{
                                            $abouts->subheading }}" id=""
                                        aria-describedby="" placeholder="Enter
                                        sub heading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان
                                        </label>
                                        <input type="text" class="form-control"
                                            name="heading" value="{{ $abouts->heading
                                        }}" id="" aria-describedby="emailHelp"
                                        placeholder="Enterheading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">نص أساسي
                                </label>
                                <textarea id="" name="bodytext"
                                    placeholder="Enter body text" rows="4"
                                    cols="50" class="ckeditor form-control">
                                    {{$abouts->bodytext}}
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection