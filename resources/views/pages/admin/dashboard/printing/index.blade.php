@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>    تقنية الطباعة </h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('printing.index') }}">  تقنية الطباعة   </a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('printing.create') }}"> إنشاء منتج جديد</a>
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
                                @foreach ($printings as $print)
                                <tr>
                                    <!-- <td>{{ $print->id }}</td> -->

                                    <td>{{ $print->name }}</td>



                                    <td>
                                        <form action="{{ route('printing.destroy',
                                            $print->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('printing.edit', $print->id)
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
