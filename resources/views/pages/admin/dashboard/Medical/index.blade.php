@extends('layouts.admin.app')
@section('content')


<div class="content-main">
<h3>طلبات الخدمات الطبية </h3>

    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">طلبات الخدمات الطبية</a></li>

        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <!-- <a class="btn btn-primary mb-2" href="{{route('medical.create')}}"> جديد +</a> -->
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">
                                <thead>
                                    <tr>
                                        <th> رقم الطلب</th>
                                        <th> اسم المريض</th>
                                        <th> اسم الطبيب</th>
                                        <th>التخصص</th>
                                        <th> ايميل الطبيب</th>
                                        <th> المستشفى</th>
                                        <th>المطلوب</th>
                                        <th>التاريخ</th>
                                        <th></th>
                                        <th>عمل</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($medical as $medi)
                                    @if($medi->seen == 0)
                                    <tr>
                                        <td><b><a  href="{{ route('medi.show', $medi->id) }}">{{ $medi->id }}</a></b></td>
                                        <td><b><a  href="{{ route('medi.show', $medi->id) }}">{{ $medi->pa_name}}</a></b></td>
                                        <td><b>{{ $medi->dr_name }}</b></td>
                                        <td><b>{{ $medi->dr_spec}}</b></td>
                                        <td><b>{{ $medi->dr_email }}</b></td>
                                        <td><b>{{ $medi->hospital }}</b></td>
                                        <td><b>{{ $medi->procedure }}</b></td>
                                        <td><b>{{ $medi->created_at->format('Y-m-d')
                                                }}</b></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{
                                                route('medi.show', $medi->id)
                                                }}">رأي</a>

                                        </td>
                                    </tr>
                                    @else
                                    <tr>

                                        <td><a  href="{{ route('medi.show', $medi->id) }}">{{ $medi->id }}</a></td>
                                        <td><a  href="{{ route('medi.show', $medi->id) }}">{{ $medi->pa_name}}</a></td>

                                        <td>{{ $medi->dr_name }}</td>
                                        <td>{{ $medi->dr_spec}}</td>
                                        <td>{{ $medi->dr_email }}</td>
                                        <td>{{ $medi->hospital }}</td>
                                        <td>{{ $medi->procedure }}</td>
                                        <td>{{ $medi->created_at->format('Y-m-d')
                                                }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{
                                                route('medi.show', $medi->id)
                                                }}">رأي</a>
                                        </td>
                                        <td class="flex">
                                        <!-- <a href="" class="edit-btn"><i class="fa fa-pencil-square-o"></i></a> -->
                                        <!-- <a href="" class="view-btn"><i class="fa  fa-eye"></i></a> -->
                                        <a href="{{ route('medi.destroy',$medi->id) }}" class="delete-btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>

                                    </tr>
                                    @endif
                                    @endforeach
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
@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endpush



