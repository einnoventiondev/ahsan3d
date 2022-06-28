<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ public_path('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{public_path('invoice/assets/css/style2.css')}}">
    <title>3D Organs</title>
    <style>
        @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
            width: 960px;
            font-size: 0.8rem;
        }

        * {
            font-family: DejaVu Sans, sans-serif;
        }

        tbody tr:nth-child(odd) {
            background-color: #e6e6e6;

            color: rgb(75, 74, 74);

        }
    </style>
</head>

<body style="margin: 0px;size:a4; font-size:0.8rem">
    <img src="{{ public_path('invoice/assets/Quotation.png') }}" style="width:18%">
    <section style="margin-top: -100px;margin-left:60px">
        <div>
            <div class="" style="width:80%;display: table;">
                <div class="col-md-6" style=";display:table-cell">
                    <div class="heading" style="  font-size: 18px;">
                        <div style=""><span style="     color: #4d9bd2;
                            font-weight: 600;
                        }">3D+</span> <span style="color: #000">Innovative Solutions</span></div>
                        {{-- <p class="muted">شركة ثلاثة أبعاد والقيمة المضافة</p> --}}

                    </div>
                     @php
						$order=App\Models\Order::where('id',$invoice->order_id)->first();

						 $user = App\Models\User::find($order->user_id ?? '');
                         $user = App\Models\User::find($order->designer_id ?? '');
						$pdfitem=App\Models\PdfItem::where('pdf_id',$invoice->id)->first();
						@endphp
                    <div>

                        <p class="muted">3Dplus.sa | <u>Info@3Dplus.sa</u> <br> {{ $user->name ?? '' }} <br>
                            Ibn Jalawi St, St ,Riyadh 12231 <br>
                            00 (966) 555855519 <br>
                            CR 4030606386
                        </p>
                    </div>

                </div>
                <div class="col-md-6" style="display:table-cell">
                    <div class="side-logo">
                        <img src="{{public_path('invoice/assets/logo.png')}}" alt="">
                    </div>

                </div>

            </div>
            <div class="" style="width:100%;display: table;">
                <div class="col-md-4" style="display:table-cell">
                    <div class="heding">
                        <div style="     color: #4d9bd2;">Bill To</div>
                    </div>
                    <div class="text">
                        <p>{{ Auth::user()->name ?? '' }}<br>
                            {{$invoice->address ?? '' }}<br>
                            {{ $invoice->zip_code ?? '' .', '. $invoice->city ?? '' }}<br>
                            {{ $invoice->country?? '' }}
                        </p>

                    </div>
                </div>
                <div class="col-md-4" style="display:table-cell">
                    <div class="heding">
                        <div style="     color: #4d9bd2;">Ship To</div>
                    </div>
                    <div class="text">
                        <p>{{Auth::user()->name ?? '' }} <br>
                            Deliver in Person
                        </p>
                    </div>
                </div>
                <div class="col-md-4" style="display:table-cell">
                    <div class="heding">
                        <div style="     color: #4d9bd2;">Dates</div>
                    </div>
                    <div class="text">
                        <p>Quote: {{$invoice->date ?? ''}} <br>
                            Valid for: {{$invoice->validtill ?? ''}} days</p>

                    </div>
                </div>

            </div>

            <table class="table table-bordered table-striped"
                style="width: 700px;table-layout:fixed; border:1px solid #dee2e6">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col" style="width:50%">Description</th>

                        <th scope="col">Quantity</th>
                        <th scope="col" style="20%">Price/unit</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="tbox1">
                            <label>{{ Auth::user()->name ?? ''}}</label>

                        </td>

                        <td >
                            <p class="muted"> {{ $pdfitem->description ?? '' }}</p>
                        </td>
                        <td>{{$order->qty ?? ''}}</td>
                        <td>{{$invoice->price_model ?? ''}} SR</td>
                    </tr>
                    @php
                    $total=0;
                    $total += ($pdfitem->rate*$pdfitem->quantity);
                    $totaltex = $total*($pdfitem->tax/100);
                    $t = $totaltex + $total;
                    @endphp


                    <tr>
                        <td rowspan="4"></td>
                        <td colspan="2">Total</td>



                        <td> {{$total}}SR</td>

                    </tr>
                    <tr>
                        <td colspan="2">VAT Rate</td>
                        <td>{{$invoice->pdf[0]->tax}}%</td>

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

            <div style="display: table">
                <div class="terms" style="width:85%;display:table-cell">
                    <div class="col-md-6 tc">
                        <div> Terms & Conditions </div>
                    </div>
                    <p class="muted">Payment due before delivery, The timeline starts from order confirmation by the
                        customer, and it will
                        be
                        given an estimated day for delivery after design approval.
                        In the concept design phase, the client has the option to add minor modifications to the design
                        twice
                        and once approved no further modification is allowed.
                        These Revisions might impact the delivery date. We quality check every order for errors before
                        it is
                        sent to the customer to assure we haven’t missed anything,
                        If your 3D Model arrives and you notice any quality issues, product errors, or order mistakes,
                        let
                        us
                        know within 5 business days of delivery. Email Info@3dplus.sa to alert us of any issue. If it is
                        our
                        fault, we will take full responsibility and will refund or replace your goods. The information
                        contained
                        or referred to in the
                        Quotation documents is confidential and must not be disclosed or released for any other use or
                        purpose.
                    </p>

                </div>
                <div style="width: 10%;display:table-cell;padding-top:15px">
                    <img src="{{public_path('invoice/assets/Quotation2.png')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>



    {{-- <section class="footer-wrap" style="width: 90%">
        <footer>
            <div class="col-md-12">
                <img src="{{public_path('invoice/assets/Quotation2.png')}}" class="footer-img" alt="">
            </div>
        </footer> --}}

    </section>





    {{-- <script src="{{ public_path('assets/js/bootstrap/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{public_path('invoice/assets/js/jquery.min.js')}}"></script>
    <script>


    </script> --}}
</body>

</html>
