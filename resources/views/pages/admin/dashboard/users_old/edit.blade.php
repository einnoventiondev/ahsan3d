@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>إعدادات العنوان</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('title.index') }}">إعدادات العنوان</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">

<form method="POST" action="{{ route('title.update', $title->id) }}">
    @csrf
    @method('put')
    <div class="row">

    <div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">لقب </label>
        <input type="text" class="form-control" name="title" value="{{ $title->title }}" id="" aria-describedby="emailHelp" placeholder="Enter title">
        <small id="" class="form-text text-muted"></small>
    </div>
    
    </div>
    <div class="col-md-6">

    <div class="form-group">
        <label for="exampleInputEmail1">وصف </label>
        <input type="text" class="form-control" name="discription" value="{{ $title->discription }}" id="" aria-describedby="" placeholder="Enter discription">
        <small id="" class="form-text text-muted"></small>
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