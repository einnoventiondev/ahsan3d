@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>الصورة الجانبية</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a  href="{{ route('side.index') }}">الصورة الجانبية</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('side.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>صورة</th>
                                        <th>عنوان</th>
                                        <th>العنوان الفرعي</th>
                                        <th ></th>
                                    </tr>
                                </thead>
                                @foreach ($sides as $side)
                                <tr>

                                    <td><img src="{{ asset('upload/' . $side->side_image) }}" alt="image"
                                        class="card-img" style="width: 100px;height:100px;">
                                    </td>
                                    <td>{{$side->heading }}
                                    </td>
                                    <td>{{$side->subheading}}
                                    </td>
                                    <td>
                                        <form action="{{ route('side.destroy',
                                            $side->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('side.edit', $side->id)
                                                }}">يحرر</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
