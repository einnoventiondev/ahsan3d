@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>صفحة تقنية الـ 3D</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('tech.index') }}">صفحة تقنية الـ 3D</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        {{--  <a class="btn btn-primary mb-2" href="{{
                            route('tech.create') }}"> إنشاء منتج جديد</a>  --}}
                        <div class="table-responsive medical-datatable enteries-d-none">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>

                                        <th>العنوان الفرعي</th>
                                        <th>عنوان</th>
                                        <th>نص</th>
                                        <th>عمل</th>
                                    </tr>
                                </thead>
                                @foreach ($tech as $tec)
                                <tr>

                                <td>{{ $tec->subheading }}</td>
                                <td>{{ $tec->heading }}</td>

                                    <td>{!! $tec->bodytext !!}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{
                                            route('tech.edit', $tec->id)
                                            }}">تعديل</a>
                                        {{--  <form action="{{ route('tech.destroy',
                                            $tec->id) }}" method="POST">


                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                        </form>  --}}
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
