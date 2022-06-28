@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>وضع اليد</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('invoicess.index') }}">وضع اليد</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row" style="align-items: flex-start;">
            <div class="col-12 panelwrapper">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        {{-- <a class="btn btn-primary mb-2" href="{{
                            route('invoicess.create') }}"> جديد +</a> --}}
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>فاتورة</th>
                                        <th>مبلغ</th>
                                        <th>تاريخ</th>
                                        <th>عميل</th>
                                        <th>الحالة</th>

                                    </tr>
                                </thead>
                                @foreach ($invoices as $key => $invoice)
                                <tr>
                                    <td style="cursor: pointer" onclick="panel({{ $key }})" >{{ $invoice->id }}</td>
                                    @foreach ($invoice->pdf as $pdf)
                                        @php
                                            $total = 0;
                                            $total += ($pdf->rate*$pdf->quantity);
                                            $totaltex = $total*($pdf->tax/100);
                                            $t = $totaltex + $total;
                                        @endphp
                                    @endforeach
                                    <td style="cursor: pointer" onclick="panel({{ $key }})">{{ $t }}</td>
                                    <td style="cursor: pointer" onclick="panel({{ $key }})">{{ $invoice->date }}</td>
                                    <td> {{ $invoice->user->name ?? '' }}</td>
                                    <td>
                                        <div class="invoice-btns d-flex">
                                            {{-- <form action="{{
                                            route('invoicess.destroy', $invoice->id)
                                            }}" method="POST">
                                                <a class="btn btn-primary" href="{{
                                                route('invoicess.edit',
                                                $invoice->id) }}">يحرر</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                            </form>
                                            <a class="btn btn-primary" href="{{
                                            route('invoicess.show', $invoice->id)
                                            }}">فاتورة</a> --}}
                                            <?php
                                            $payment = App\Models\Payment::where('invoice_id',$invoice->id)->exists();
                                            ?>
                                            @if($payment)
                                            <button
                                                class="btn btn-sm btn-success">مسددة</button>
                                            @else
                                            <button
                                                class="btn btn-sm btn-danger">غير مسددة</button>
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
                <div class="col-12 card payment_view_{{ $key }}">
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
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <a href="{{ route('invoice',$invoice->id) }}" target="_blank"
                                        class="btn btn-sm btn-light">View</a>
                                    <a href="{{ route('invoice.pdf',$invoice->id) }}"
                                        class="btn btn-sm btn-light">PDF</a>
                                    <a href="{{ route('sendViaMail',$invoice->order_id) }}"
                                        class="btn btn-sm btn-light">Mail</a>
                                    <button
                                        class="btn btn-sm btn-success "onclick="paymentDiv({{ $key }})">Payment</button>
                                </div>
                                <div class="col-6">
                                    <?php
                                        $payment = App\Models\Payment::where('invoice_id',$invoice->id)->exists();

                                        ?>
@if($payment)
<button
    class="btn btn-sm btn-success">مسددة</button>
@else
<button
    class="btn btn-sm btn-danger">غير مسددة</button>
@endif
                                </div>

                            </div>
                            <hr>
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <div class="col-6 p-3">
                                        <strong>To</strong><br>
                                        {{-- <span class="text-primary">{{ $invoice->user->name }}</span><br> --}}
                                        <span>{{ $invoice->address }}</span><br>
                                        <span>{{ $invoice->city }}</span><br>
                                        <span>{{ $invoice->country }}</span><br>
                                        <span class="text-primary">{{ $invoice->phone }}</span>
                                        <span class="text-primary">{{ $invoice->email }}</span>
                                    </div>
                                </div>
                                <div class="col-6 text-start p-3">
                                    <h3>{{ $invoice->order_id }}</h3>
                                    {{-- <span>{{ $invoice->user->name }}</span><br> --}}
                                    <span>{{ $invoice->address }}</span><br>
                                    <span>{{ $invoice->city .', '. $invoice->country }}</span>

                                </div>
                            </div>
                            <div class="col-12 p-3">
                                <table class="table table-light" style="direction: ltr">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>عنصر</th>
                                            <th>الوصف</th>
                                            <th>الكمية</th>
                                            <th>السعر</th>
                                            <th>
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="wrapper">
                                        @foreach($invoice->pdf as $pdf)
                                        <tr>

                                            <td>{{ $pdf->title }}</td>
                                            <td>  {{ $pdf->description }}
                                            </td>
                                            <td>{{ $pdf->quantity }}
                                            </td>
                                            <td>{{ $pdf->rate }}
                                            </td>

                                        </tr>
                                            @php
                                                $total += ($pdf->rate*$pdf->quantity);
                                                $totaltex = $total*($pdf->tax/100);
                                                $t = $totaltex + $total;
                                            @endphp

                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <th>الضريبة</th>
                                            <td>{{ @$invoice->pdf[0]->tax }}</td>
                                        </tr>
                                        <tr>

                                            <td></td>
                                            <td></td>
                                            <th>الاجمالي</th>

                                        <td>{{ $total }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <th>السعر VAT</th>
                                            <td>{{@$invoice->pdf[0]->tax}}%</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <th>مبلغ VAT</th>

                                            <td>{{$totaltex}} SR</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>الاجمالي مبلغ</td>
                                            <td class="total-amount"> {{$t}}SR</td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                            <div class="col-12 p-3" style="direction: ltr">
                                <h5>Terms and Conditions</h5>
                                <p>
                                    {{ $invoice->terms }}
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            @livewire('chats',['user_id' =>
                            $invoice->user_id,'request_id'=>$invoice->order_id,'request_type'=>'App\Models\Medical'])

                        </div>
                    </div>
                </div>
                <div class="col-12 p-3 card payment_add_{{ $key }} d-none" style="direction: ltr">
                <h5>Record Payment for Invoice {{ $invoice->id }}</h5>
                <hr>
                <form action="{{ route('paymentAdded') }}" method="post">
                    @csrf
                    <div class="col-12 d-flex">
                        <div class="col-6 p-1">
                            <div class="form-group">
                                <input type="hidden" name="invoice_id" value ="{{$invoice->id}}" >
                                <label for="exampleInput">Amount Recieved</label>
                                <input type="text" class="form-control" name="paid" id="exampleInput" placeholder="Example input placeholder">
                            </div>
                            <div class="form-group">

                                <label for="exampleInput">Payment Date</label>
                                <input type="date" class="form-control" name="payment_date" id="exampleInput" placeholder="Example input placeholder">
                            </div>

                                <input type="hidden" class="form-control" name="total_amount" value="{{$t}}" id="exampleInput" placeholder="Example input placeholder">

                            <div class="form-group">
                                <label for="my-select">Payment Mode</label>
                                <select id="my-select" class="form-control" name="payment_mode">
                                    <option value="cash on delievery">Cash On Delievery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <div class="form-group">
                                <label for="exampleInput">Transection ID</label>
                                <input type="text" class="form-control" name="transection_id" id="exampleInput" placeholder="Example input placeholder">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Leave a note</label>
                                <textarea type="text" name="note" class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
