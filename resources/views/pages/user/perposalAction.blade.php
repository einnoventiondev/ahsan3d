@extends('layouts.user.index')
@section('content')
<style>
    html{
        direction: ltr !important;
    }
    .nav-tabs .nav-link.active {
        border: none;
        background-color:rgb(245 247 251);
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #0d79e5 !important;
    }
    .nav-tabs{
        border-bottom: 0px;
    }

        .kbw-signature { width: 100%; height: 200px;}
       
    </style>
            <div class="container">
                <div class="col-12 p-5">
                    <img src="{{ asset('invoice/assets/logo.svg') }}" />
                </div>
                <div class="col-12 d-flex">
                    <div class="col-6">
                        <h1>
                            {{ $invoice->order_id }}
                        </h1>
                    </div>
                 
                    <div class="col-6 text-end">
                        <a href="{{ route('purposal',$invoice->id) }}" target="_blank"
                            class="btn btn-sm btn-light">View</a>
                        <a href="{{ route('purposal.pdf',$invoice->id) }}"
                            class="btn btn-sm btn-light">PDF</a>
                                <button class="btn btn-sm btn-light perposalNotAccepted" data-id="{{$invoice->id}}">Declined</button>     
                           
                                <button class="btn btn-sm bg-success text-light perposalAccepted" data-id="{{$invoice->id}}">
                                    @if($invoice->assigned==0)               
                                    Accept
                                    @else
                                    Accepted
                                    @endif
                                </button>
                            
                               
                    </div>
                </div>
                @include('pages.user.identityModal');
                <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body p-4">
                            
                            <p class="card-text">
                                <table class="table">
                                    <thead class="bg-dark text-light ">
                                        <tr>      
                                            <th scope="col"class="text-light">Description</th>
                                            <th scope="col"class="text-light">Quantity</th>
                                            <th scope="col"class="text-light">Rate</th>
                                            <th scope="col"class="text-light">Amount</th>
                                        </tr>invoice
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tbox1">
                                                <label>Concept Design:</label>
                                                <p class="muted"> {{ $invoice->concept_design }}</p>
                                            </td>
                                            <td>{{$invoice->qty_design}}</td>
                                            <td>{{$invoice->price_design}} SR</td>
                                            <td>{{$invoice->price_design}} SR</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"></td>
                                            <td colspan="2">Total</td>
                                            @php
                                            $total = ($invoice->price_model*$invoice->qty_model)+($invoice->price_design*$invoice->qty_design);
                                            $totaltex = $total*($invoice->tax/100);
                                            $t = $totaltex + $total;
                                            @endphp
                                            <td> {{$total}}SR</td>
                    
                                        </tr>
                                        <tr>
                                            <td colspan="2">VAT Rate</td>
                                            <td>{{$invoice->tax}}%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">VAT Amount</td>
                                            @php
                    
                                            @endphp
                                            <td>{{$totaltex}} SR</td>
                                        </tr>
                                        <tr>
                    
                                            <td colspan="2">Total Quote</td>
                                            <td class="total-amount"> {{$t}}SR</td>
                                        </tr>
                                    </tbody>
                                   
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-body col-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link text-black active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">عرض سعر</button>
                            <button class="nav-link text-black" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">التعليقات</button>
                        </div>
                    </nav>
                    <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <strong>
                                {{ $user->name }}
                            </strong><br/>
                            <span>{{ @$invoice->address }}</span><br/>
                            <span>{{ $invoice->city }}</span><br/>
                            <span>{{ $invoice->country.', '.$invoice->zip_code }}</span>
                            <hr>
                            <strong>
                                Perposal Information
                                <span>{{ $user->name }}</span><br/>
                                <span>{{ $user->email }}</span><br/>
                                <span>{{ $invoice->phone }}</span><br/>
                                <span>{{ @$invoice->address }}</span><br/>
                            <span>{{ $invoice->city }}</span><br/>
                            <span>{{ $invoice->country.', '.$invoice->zip_code }}</span>
                            </strong><br/>
                            <br/>
                            @php
                            $total = ($user->purposals->price_model*$user->purposals->qty_model)+($user->purposals->price_design*$user->purposals->qty_design);
                            $totaltex = $total*($user->purposals->tax/100);
                            $t = $totaltex + $total;
                            @endphp
                            <h5> Total {{$total}} SR</h5>
                           
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2
                            {{-- @if($invoice->comments==1) --}}
                            @livewire('chats',['user_id' =>
                            $invoice->user_id,'request_id'=>$invoice->order_id,'request_type'=>'App\Models\Medical']))
                            {{-- @endif --}}
                        </div>
    
                    </div>
                </div>
            </div>
            </div>
  
@endsection
