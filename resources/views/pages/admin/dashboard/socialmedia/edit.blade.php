@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>حسابات التواصل الاجتماعي</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('social.index') }}">حسابات التواصل الاجتماعي</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
    <form method="POST" action="{{ route('social.update', $socials->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
<div class="row">

        <div class="col-md-4">


        <div class="form-group">
            <label for="exampleInputEmail1">الانستغرام </label>
            <input type="url" class="form-control" name="instagram"value="{{$socials->instagram}}" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"></small>
        </div>
        </div>
        <div class="col-md-4">

        <div class="form-group">
            <label for="exampleInputEmail1">تويتر </label>
            <input type="url" class="form-control" name="twitter"value="{{$socials->twitter}}" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
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
