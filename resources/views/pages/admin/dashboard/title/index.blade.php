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
                        <a class="btn btn-primary mb-2" href="{{
                            route('title.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>

                                        <th>لقب</th>
                                        <th>وصف</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($titles as $tec)
                                <tr>
                                    <td>{{ $tec->title }}</td>
                                    <td>{{ $tec->discription }}</td>
                                    <td>
                                        <form action="{{
                                            route('title.destroy', $tec->id)
                                            }}" method="POST">
                                            <a class="btn btn-primary"
                                                href="{{ route('title.edit',
                                                $tec->id) }}">يحرر</a>

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
