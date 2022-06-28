@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>يوتيوب رابط</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('youtubeurl.index') }}">يوتيوب رابط</a></li>
        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">

                        <a class="btn btn-primary mb-2" href="{{
                            route('youtubeurl.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">

                                <thead>

                                    <tr>
                                        <!-- <th>Id</th> -->
                                        <th>رابط الفيديو</th>
                                        <th>رابط فيديو عام</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($youtubeurls as $youtubeurl)
                                <tr>
                                    <!-- <td>{{ $youtubeurl->id }}</td> -->
                                    <td>{{ $youtubeurl->youtubeurl }}</td>
                                    <td>{{ $youtubeurl->youtubeurlpublic }}</td>
                                    <td>
                                        <form action="{{
                                            route('youtubeurl.destroy',
                                            $youtubeurl->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('youtubeurl.edit',
                                                $youtubeurl->id) }}">يحرر</a>
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
