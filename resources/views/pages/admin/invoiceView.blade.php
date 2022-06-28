<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('invoice/assets/css/style2.css')}}">
    <title>3D Organs</title>
</head>

<body>
    <section class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h3><span>3D+</span> Innovative Solutions</h3>
                        <p class="muted">شركة ثلاثة أبعاد والقيمة المضافة</p>

                    </div>
                    <div>
                        <!-- <p>3Dplus.sa | Info@3Dplus.sa</p>
                    <p>Prince Abdulaziz Ibn Musaid </p>
                    <p>Ibn Jalawi St, St ،Riyadh 12231</p>
                    <p>00 (966) 555855519</p>
                    <p>CR 4030606386</p> -->
                        <p class="muted">3Dplus.sa | <u>Info@3Dplus.sa</u> <br> {{ $user->name }} <br>
                            Ibn Jalawi St, St ،Riyadh 12231 <br>
                            00 (966) 555855519 <br>
                            CR 4030606386
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="side-logo">
                        <img src="{{asset('invoice/assets/logo.svg')}}" alt="">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Bill To</h4>
                    </div>
                    <div class="text">
                        <p>{{ $username->name }}<br>
                            {{$invoice->address }}<br>
                            {{ $invoice->zip_code .', '. $invoice->city  }}<br>
                            {{ $invoice->country  }}
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Ship To</h4>
                    </div>
                    <div class="text">
                        <p>{{$username->name}} <br>
                            Deliver in Person
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Dates</h4>
                    </div>
                    <div class="text">
                        <p>Quote: {{$invoice->date}} <br>
                            Valid for: {{$invoice->validtill}} days</p>

                    </div>
                </div>

            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price/unit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice->pdf as $key => $pdf)
                    <tr>
                        <td class="tbox1">
                            <label>{{ $pdf->title }}</label>

                        </td>

                        <td >
                            <p class="muted"> {{ $pdf->description }}</p>
                        </td>
                        <td>{{$pdf->quantity}}</td>
                        <td>{{$pdf->rate}} SR</td>
                    </tr>

                        @php
                            $total=0;
                            $total += ($pdf->rate*$pdf->quantity);
                            $totaltex = $total*($pdf->tax/100);
                            $t = $totaltex + $total;
                        @endphp

                    @endforeach

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
            <div class="terms">
                <div class="col-md-6 tc">
                    <h4> Terms & Conditions </h4>
                </div>
                <p class="muted">Payment due before delivery, The timeline starts from order confirmation by the customer, and it will
                    be
                    given an estimated day for delivery after design approval.
                    In the concept design phase, the client has the option to add minor modifications to the design
                    twice
                    and once approved no further modification is allowed.
                    These Revisions might impact the delivery date. We quality check every order for errors before it is
                    sent to the customer to assure we haven’t missed anything,
                    If your 3D Model arrives and you notice any quality issues, product errors, or order mistakes, let
                    us
                    know within 5 business days of delivery. Email Info@3dplus.sa to alert us of any issue. If it is our
                    fault, we will take full responsibility and will refund or replace your goods. The information
                    contained
                    or referred to in the
                    Quotation documents is confidential and must not be disclosed or released for any other use or
                    purpose.
                </p>

            </div>
        </div>
    </section>
    <img src="{{asset('invoice/assets/Quotation.png')}}" class="side-imag" alt="top">



    <section class="footer-wrap">
        <footer>
            <div class="col-md-12">
                <img src="{{asset('invoice/assets/Quotation2.png')}}" class="footer-img" alt="">
            </div>
        </footer>

    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{asset('invoice/assets/js/jquery.min.js')}}"></script>
</body>

</html>
