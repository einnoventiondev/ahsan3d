@extends('layouts.admin.app')
@section('content')
<div class="content-main">
<h3>عروض الأسعار</h3>

    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('perposal.index') }}">عروض الأسعار</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row"style="align-items: flex-start;">
            <div class="col-12 panelwrapper">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('perposal.create') }}"> جديد +</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>عرض سعر</th>
                                        <th>العنوان</th>
                                        <th>إلى</th>
                                        <th>الاجمالي</th>
                                        <th>الحالة</th>
                                    </tr>
                                </thead>
                                @foreach ($invoices as $key => $invoice)
                                <tr>
                                    <td style="cursor: pointer" onclick="panel({{ $key }})">{{ $invoice->id ?? '' }}</td>
                                    <td style="cursor: pointer" onclick="panel({{ $key }})">{{$invoice->subject ?? ''}}</td>
                                    <td style="cursor: pointer" onclick="panel({{ $key }})">{{$invoice->user->name ?? ''}}</td>
                                    @foreach ($invoice->pdf as $key => $pdf)
                                        @php
                                        $total = 0;
                                            $total += ($pdf->rate*$pdf->quantity);
                                            $totaltex = $total*($pdf->tax/100);
                                            $t = $totaltex + $total;
                                        @endphp
                                    @endforeach
                                    <td>{{ $t }}</td>
                                    <td>
                                        <div class="invoice-btns d-flex">
                                            {{-- <form action="{{
                                            route('perposal.destroy', $invoice->id)
                                            }}" method="POST">
                                                <a class="btn btn-primary" href="{{
                                                route('perposal.edit',
                                                $invoice->id) }}">يحرر</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                            </form>
                                            <a class="btn btn-primary" href="{{
                                            route('perposal.show', $invoice->id)
                                            }}">فاتورة</a> --}}
                                            {{-- @if($invoice->assigned)
                                            <a class="btn btn-success">تم الموافقة</a>
                                            @else
                                            <a class="btn btn-secondary">مفتوح</a>
                                            @endif --}}
                                            @if($invoice->status == 0)
                                                <button class="btn btn-secondary "  >Waiting</button>
                                            @endif
                                            @if($invoice->status == 1)
                                                <a class="btn btn-success" >Accept</a>
                                            @endif
                                            @if($invoice->status == 2)
                                                <a class="btn btn-danger">Reject</a>
                                            @endif

                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($invoices as $key => $invoice)

            <div class="col-6 panel_view panel_view_{{ $key }} d-none">
                <div class="col-12 card">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link text-black active" id="nav-home-tab_{{$key}}" data-bs-toggle="tab"
                                data-bs-target="#nav-home_{{$key}}" type="button" role="tab" aria-controls="nav-home_{{$key}}"
                                aria-selected="true">عرض سعر</button>
                            <button class="nav-link text-black" id="nav-profile-tab_{{$key}}" data-bs-toggle="tab"
                                data-bs-target="#nav-profile_{{$key}}" type="button" role="tab" aria-controls="nav-profile_{{$key}}"
                                aria-selected="false">التعليقات</button>
                        </div>
                    </nav>
                    <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home_{{$key}}" role="tabpanel"
                            aria-labelledby="nav-home-tab_{{$key}}">
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <a href="{{ route('purposal',$invoice->id) }}" target="_blank"
                                        class="btn btn-sm btn-light">View</a>
                                    <a href="{{ route('purposal.pdf',$invoice->id) }}"
                                        class="btn btn-sm btn-light">PDF</a>
                                    <a class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#convertModal_{{ $key }}"
                                        >Convert</a>
                                    <a href="{{ route('sendViaMail',$invoice->order_id) }}"
                                        class="btn btn-sm btn-light">Mail</a>
                                        @include('pages.admin.dashboard.perposal.convertModel')
                                </div>

                                <div class="col-6">
                                    @if($invoice->assigned==0)
                                    <button type="button" class="btn btn-sm btn-danger">Not Accepted</button>
                                    @else
                                    <button type="button" class="btn btn-sm btn-success">Accepted</button>
                                    @endif

                                </div>

                            </div>

                            <hr>
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <div class="col-12 p-3">
                                        <strong>To</strong><br>
                                        {{--  <span class="text-primary">{{ $invoice->user->name ?? '' }}</span><br>  --}}
                                        <span>{{ $invoice->address }}</span><br>
                                        <span>{{ $invoice->city }}</span><br>
                                        <span>{{ $invoice->country }}</span><br>
                                        <span class="text-primary">{{ $invoice->phone }}</span>
                                        <span class="text-primary">{{ $invoice->email }}</span>
                                    </div>
                                </div>
                                <div class="col-6 text-start p-3">
                                    <h3>{{ $invoice->order_id }}</h3>
                                    {{--  <span>{{ $invoice->user->name }}</span><br>  --}}
                                    <span>{{ $invoice->address }}</span><br>
                                    <span>{{ $invoice->city .', '. $invoice->country }}</span>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile_{{$key}}" role="tabpanel" aria-labelledby="nav-profile-tab_{{$key}}">

                            @livewire('chats',['user_id' =>
                            $invoice->user_id,'request_id'=>$invoice->order_id,'request_type'=>'App\Models\Medical'])

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
//<meta name="csrf-token" content="{{ csrf_token() }}" />
 