
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
        </style>
</head>
<body>
    <div class="col-12 " style="display:table">
        <div class="col-6" style="display:table-cell">
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
        <div class="col-6 text-start p-3" style="display:table-cell">
            <h3>{{ $invoice->order_id }}</h3>
            {{-- <span>{{ $invoice->user->name }}</span><br> --}}
            <span>{{ $invoice->address }}</span><br>
            <span>{{ $invoice->city .', '. $invoice->country }}</span>

        </div>
    </div>
<div class="h5 p-3 text-center" >
    المدفوعات 
</div>


    <div class="col-6 p-3">
    
 
            
        
                
                <div class="col-12" style="display: table">
                    <div class="col-6 text-left" style="display:table-cell">
                        طريقة الدفع:
                    </div>
                    <div class="col-6" style="display:table-cell">
                        {{ $invoice->payment }}
                    </div>
                  
                </div>
                <div class="col-12" style="display: table">
                    <div class="col-6 text-left " style="display:table-cell">
                         تاريخ الدفع: 
                    </div>
                    <div class="col-6" style="display:table-cell">
                        {{ date('Y-m-d') }}
                    </div>
                   
                </div>
                @php
                $total = ($invoice->price_model*$invoice->qty_model)+($invoice->price_design*$invoice->qty_design);
                $totaltex = $total*($invoice->tax/100);
                $t = $totaltex + $total;
                @endphp
                
            
            <button class="w-100 p-3 btn bg-success"  data-bs-toggle="modal"
            data-bs-target="#convertModal" >الاجمالي {{ $t }}</button>
        </div>
 
    <div class="col-12 p-3">
        <div class="h5 pt-3 pb-3" style="text-align: end">
            المدفوعات 
        </div>
        <table class="table table-light" style="direction: ltr">
            <thead class="thead-light">
                <tr>
                    <th>فاتورة #</th>
                    <th>فاتورة تاريخ</th>
                    <th>فاتورة مبلغ</th>
                    <th>المدفوعات مبلغ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->date }}</td>
                    <td>{{ $t }}</td>
                    <td>{{ $t }}</td>
                </tr>
            </tbody>
        
        </table>
    </div>

</body>

</html>