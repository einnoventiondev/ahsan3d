@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>صفحة من نحن</h3>
    <div class="breadcrumb-main">

        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('about.index') }}">صفحة من نحن</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        {{--  <a class="btn btn-primary mb-2" href="{{
                            route('about.create') }}"> إنشاء منتج جديد</a>  --}}
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

                                    @foreach ($abouts as $about)
                                </thead>
                                <tr>
                                <td>{{ $about->subheading }}</td>
                                    <td>{{ $about->heading }}</td>

                                    <td>{!! $about->bodytext !!}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{
                                            route('about.edit', $about->id)
                                            }}">تعديل</a>
                                        {{--  <form action="{{ route('about.destroy',
                                            $about->id) }}" method="POST">


                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>  --}}
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
