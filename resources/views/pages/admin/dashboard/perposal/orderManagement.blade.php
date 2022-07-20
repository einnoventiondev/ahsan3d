@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>إدارة الطلبات</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('OrderManagement') }}">إدارة الطلبات</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row" style="align-items: self-start;">
            <div class="col-12 panelwrapper">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="#"> جديد +</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>User</th>
                                        <th>Designer</th>
                                        <th>Qty</th>
                                        <th>size</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                    @foreach ($orders as $order)
                                    <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{App\Models\User::where('id',$order->user_id)->pluck('name')->first() }}</td>
                                    <td>{{App\Models\User::where('id',$order->designer_id)->pluck('name')->first() }}</td>
                                    <td>{{ $order->qty }}</td>
                                    <td>{{ $order->size }}</td>
                                    @php
                                        $order_status=App\Models\Perposal::where('order_id',$order->id)->first();
                                    @endphp
                                    <td>
                                        @if($order_status)
                                        @if($order_status->status == 0)
                                        <button class="btn btn-secondary ">Waiting</button>
                                    @endif
                                    @if($order_status->status == 1)
                                        <a class="btn btn-success" >Accept</a>
                                    @endif
                                    @if($order_status->status == 2)
                                        <a class="btn btn-danger">Reject</a>
                                    @endif
                                    @endif
                                    </td>
                                    <td class="flex">
                                        <!-- <a href="" class="edit-btn"><i class="fa fa-pencil-square-o"></i></a> -->
                                        <a href="{{route('order.management.user',$order->id)}}" class="view-btn"><i class="fa  fa-eye"></i></a>
                                        <a href="" class="delete-btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
