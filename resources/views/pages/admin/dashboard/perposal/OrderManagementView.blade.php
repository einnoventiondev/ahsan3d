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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">size</label>
                                        <input class="form-control"value="{{ $order->size }}" disabled type="text" name="" id="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="">print</label>
                                        <input class="form-control" value="{{ $order->print }}" disabled type="text" name="" id="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="">notes</label>
                                        <input class="form-control" value="{{ $order->notes }}" disabled type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">quantity</label>
                                        <input class="form-control" value="{{ $order->qty }}" disabled type="text" name="" id="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="">format</label>
                                        <input class="form-control" value="{{ $order->format }}" disabled type="text" name="" id="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="">User</label>
                                        <input class="form-control" value="{{App\Models\User::where('id',$order->user_id)->pluck('name')->first() }}" disabled type="text" name="" id="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="">Designer</label>
                                        <input class="form-control" value="{{App\Models\User::where('id',$order->designer_id)->pluck('name')->first() }}" disabled type="text" name="" id="">
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
