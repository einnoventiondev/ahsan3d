@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>  User List </h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('user.list') }}">قائمة المصممين</a></li>
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
                                <input readonly="" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->name}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني</label>
                                <input readonly="" type="email" class="form-control" id="exampleFormControlInput1" value="{{ $data->email }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
                                <input readonly="" type="number" class="form-control" id="exampleFormControlInput1" value="{{ $data->phone}}">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="display table table-borderless  user-table mt-4" style="width:100%">
                                <thead>
                                    <th class="border-btm-blue">Public Request</th>
                                    <th class="border-btm-blue">Medical Request</th>
                                    <th class="border-btm-blue">Designer Request</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$public_request }}</td>
                                        <td>{{$medical_request }}</td>
                                        <td>{{$designer_request }}</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
