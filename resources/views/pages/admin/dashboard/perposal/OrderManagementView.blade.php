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
                            <table class="table display">
                                <thead>
                                    <tr>
                                        <th>Color Choice</th>
                                        <th>Quantity</th>
                                        <th>Size</th>
                                        <th>Print Format</th>
                                        <th>Print Tehnology</th>
                                        <th>notes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                    


                            </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection