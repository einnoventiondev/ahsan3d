@extends('layouts.admin.app')
@section('content')


<div class="content-main">
<h3>طلبات الخدمات الطبية </h3>

    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">طلبات الخدمات الطبية</a></li>

        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <!-- <a class="btn btn-primary mb-2" href="{{route('medical.create')}}"> جديد +</a> -->
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">
                                <thead>
                                    <tr>
                                        <th> Payment</th>
                                        <th> Invoice</th>
                                        <th> Payment Mode</th>
                                        <th> Transection ID</th>
                                        <th> Customer</th>
                                        <th> Amount</th>
                                        <th> Date</th>
                                    
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($payment as $pay)
                                
                                    <tr>

                                        <td>{{ $pay->id }}</td>
                                        <td>{{ $pay->invoice->id}}</td>

                                        <td>{{ $pay->payment_mode }}</td>
                                        <td>{{ @$pay->transection_id}}</td>
                                        <td>{{ $pay->invoice->user->name }}</td>
                                        <td>{{ $pay->paid }}</td>
                                        <td>{{ $pay->created_at->format('Y-m-d') }}</td>
                                        <td>  <a class="btn btn-sm btn-primary" href="{{
                                            route('payment.pdf', $pay->invoice->id)
                                            }}">Download</a></td>
                                       

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
@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endpush



