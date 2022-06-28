@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>طلبات الخدمات العامة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="">طلبات الخدمات العامة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                    <!-- <a class="btn btn-primary mb-2" href="#"> جديد +</a> -->

                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>title</th>
    									<th>description</th>
    									<th>Print Technology</th>
    									<th>Color</th>
    									<th>Size</th>
    									<th>Action</th>
    	                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product_requests as $request)
                                    <tr>
                                        <td>{{$request->title}}</td>
                                        <td>{{ $request->description }}</td>
                                        <td>{{ $request->print_technology }}</td>
                                        <td>{{ $request->color }}</td>
                                        <td>{{$request->size }}</td>
                                        <td>
                                            @if($request->verify==1)
                                            <a class="btn " href="{{
                                                route('requestApprove', $request->id)
                                                }}" style="background-color: green;color:white;"> Approved </a>
                                                @else
                                                <a class="btn btn-primary" href="{{
                                                    route('requestApprove', $request->id)
                                                    }}"> Approve </a>
                                                @endif
                                                 <br>
                                                <form action="{{ route('product.destroy',
                                                $request) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn
                                                    btn-danger">حذف</button>
                                            </form>
                                            </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
