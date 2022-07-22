@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>   أنواع البرامج المستخدمة  </h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('software_type.index') }}">   أنواع البرامج المستخدمة  </a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('software_type.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <!-- <th>Id</th> -->


                                        <th> لقب  </th>
                                        <th>صورة</th>

                                        <th></th>

                                    </tr>
                                </thead>
                                @foreach ($softwares as $software)
                                <tr>
                                    <!-- <td>{{ $software->id }}</td> -->

                                    <td>{{ $software->name }}</td>
                                   <td>
                                    <img src="{{ asset('upload/software/'.$software->images) }}"class="design-img img-fluid" style="width: 100px;height:100px" alt="">
                                   </td>


                                    <td>
                                        <form action="{{ route('software_type.destroy',
                                            $software->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('software_type.edit', $software->id)
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
