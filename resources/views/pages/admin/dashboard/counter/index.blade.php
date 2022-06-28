@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>عدادات</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('counter.index') }}"> عدادات</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('counter.create') }}">إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>

                                        <th>مشروع</th>
                                        <th>عميل</th>
                                        <th>مصمم</th>
                                    </tr>
                                </thead>
                                    @foreach ($counter as $tec)
                                    <tr>

                                        <td>{{ $tec->client }}</td>
                                        <td>{{ $tec->project }}</td>
                                        <td>{{ $tec->designer }}</td>
                                        <td>
                                            <form action="{{
                                                route('counter.destroy', $tec->id)
                                                }}" method="POST">
                                                <a class="btn btn-primary"
                                                    href="{{
                                                    route('counter.edit', $tec->id)
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
</div>
@endsection
