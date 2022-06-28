@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3> قائمة المصممين </h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('designer.index') }}">قائمة المصممين</a></li>
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
                                <input readonly="" type="text" class="form-control" id="exampleFormControlInput1" value="{{$designer[0]->name}}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني</label>
                                <input readonly="" type="email" class="form-control" id="exampleFormControlInput1" value="{{ $designer[0]->email }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
                                <input readonly="" type="number" class="form-control" id="exampleFormControlInput1" value="{{ $designer[0]->phone}}">
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="display table table-borderless  user-table mt-4" style="width:100%">
                                <thead>
                                    <th class="border-btm-blue">3d تكنولوجيا</th>
                                    <th class="border-btm-blue">software_type</th>
                                    <th class="border-btm-blue">طلب</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $designer[0]->userDetail->printing_technology }}</td>
                                        <td>{{ $designer[0]->userDetail->software_type }}</td>
                                        <td>{{ $order }}</td>

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
