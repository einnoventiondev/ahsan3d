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
    <form method="POST" action="{{ route('logo.update', $logos->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-6">

        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo1" value={{ $logos->logo1 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo1" id="logo1" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo1 }} --}}
                <img src="{{ asset('upload/' . $logos->logo1) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">


            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">

        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo2" value={{ $logos->logo2 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo2" id="logo2" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo2 }} --}}
                <img src="{{ asset('upload/' . $logos->logo2) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">


        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo3" value={{ $logos->logo3 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo3" id="logo3" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo3 }} --}}
                <img src="{{ asset('upload/' . $logos->logo3) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">

        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo4" value={{ $logos->logo4 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo4" id="logo4" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo4 }} --}}
                <img src="{{ asset('upload/' . $logos->logo4) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">

        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo5" value={{ $logos->logo5 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo5" id="logo5" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo5 }} --}}
                <img src="{{ asset('upload/' . $logos->logo5) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">

        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo6" value={{ $logos->logo6 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo6" id="logo6" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo6 }} --}}
                <img src="{{ asset('upload/' . $logos->logo6) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">


        <div class="form-group">
            <label for="exampleInputEmail1">شعار </label>
            <input type="file" class="form-control" name="logo7" value={{ $logos->logo7 }} id="" accept="image/*"
                type="file" id="download-cv-file-name" name="logo7" id="logo7" aria-describedby=""
                placeholder="Enter sub heading">
                {{-- /Storage/{{ $logos->logo7 }} --}}
                <img src="{{ asset('upload/' . $logos->logo7) }}" alt="image"
                class="card-img" style="width:100px;height:100px;">
            <small id="" class="form-text text-muted"> </small>
        </div>
        </div>
        <div class="col-md-6">

@php
     $images= App\Models\Logo::all();
@endphp
            <div class="col-md-6">
                <div class="form-group">
                    <label for="logo8">شعار </label>
                    <input type="file" class="form-control"
                         accept="image/*"
                        value="{{ $logos->logo8 }}"
                        name="logo8[]"
                        id="logo8" aria-describedby=""
                        placeholder="Enter sub heading"  multiple ="multiple" >
                        @foreach ($images as $item)
                        <img src="{{ asset('upload/' . $item->logo8) }}" alt="image" class="card-img" style="width:100px; height:100px;">
                          @endforeach
                    <small class="form-text text-muted">
                    </small>

                </div>
            </div>

            <div class="add-more">

            </div>
        </div>

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
