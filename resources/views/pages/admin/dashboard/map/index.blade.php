 @extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>صورة الخريطة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('map.index') }}">صورة الخريطة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('map.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>صورة</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($maps as $map)
                                <tr>

                                    <td><img src="{{ asset('/' . $map->map_image) }}" alt="image"
                                        class="card-img" style="width: 100px;height:100px;">
                                    </td>
                                    <td>
                                        <form action="{{ route('map.destroy',
                                            $map->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('map.edit', $map->id) }}">يحرر</a>
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
