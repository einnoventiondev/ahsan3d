@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>  لون المنتج </h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('color.index') }}">  لون المنتج </a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('color.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <!-- <th>Id</th> -->


                                        <th> لقب  </th>

                                        <th></th>

                                    </tr>
                                </thead>
                                @foreach ($colors as $color)
                                <tr>
                                    <!-- <td>{{ $color->id }}</td> -->

                                    <td>{{ $color->name }}</td>



                                    <td>
                                        <form action="{{ route('color.destroy',
                                            $color->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('color.edit', $color->id)
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
