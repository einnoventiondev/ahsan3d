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
                        <form method="POST" action="{{
                            route('public.update',$publics->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name
                                        </label>
                                        <input type="text" class="form-control"
                                            name="full_name" value="{{$publics->full_name}}"id=""
                                        aria-describedby="emailHelp"
                                        placeholder="Enterheading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone
                                            Number </label>
                                        <input type="number"
                                            class="form-control"
                                            name="phone_num" value="{{$publics->phone_num}}"
                                        id="" aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Email
                                        </label>
                                        <input type="email" class="form-control"
                                            name="email" value="{{$publics->email}}"
                                        id="" aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Specialization
                                        </label>
                                        <input type="text" class="form-control"
                                            name="specialization"
                                            value="{{$publics->specialization}}"
                                        id="" aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="gender">Choose a gender:</label>
                                        <select name="gender"
                                            class="form-control" id="gender">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="Other">Others</option>
                                        </select>
                                        {{-- <label for="exampleInputEmail1">Gender
                                        </label>
                                        <input type="text" class="form-control"
                                            name="gender" id=""
                                            aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted">Describe your bodytext
                                        </small> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Print
                                            type </label>
                                        <input type="text" class="form-control"
                                            name="print_type"
                                            value="{{$publics->print_type}}"
                                        id="" aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted">Describe your bodytext
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Print
                                            color</label>
                                        <input type="text" class="form-control"
                                            value="{{$publics->print_color}}"
                                        name="print_color" id=""
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted">Describe your bodytext
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Print
                                            Resolution</label>
                                        <input type="number"
                                            class="form-control"
                                            name="print_resolution"
                                            value="{{$publics->print_resolution}}"
                                        id="" aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted">Describe your bodytext
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images
                                        </label>
                                        <input type="file" class="form-control"
                                            name="print_img" value="{{$publics->print_img}}"
                                        id="" accept="image/*" type="file"
                                        id="download-cv-file-name"
                                        name="print_img" id="print_img"
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted"> </small>
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
