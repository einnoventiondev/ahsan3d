@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>حسابات التواصل الاجتماعي</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('specialization.index') }}">حسابات التواصل الاجتماعي</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('specialization.create') }}"> إنشاء منتج جديد</a>
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
                                @foreach ($specializations as $specialization)
                                <tr>
                                    <!-- <td>{{ $specialization->id }}</td> -->

                                    <td>{{ $specialization->specialization }}</td>



                                    <td>
                                        <form action="{{ route('specialization.destroy',
                                            $specialization->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('specialization.edit', $specialization->id)
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
