<div id="convertModal_{{ $key }}" style="direction: ltr" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Convert to Invoice</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('convertToInvoice') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="perposal_id" value="{{ $invoice->id }}">
                    <strong class="text-primary">How total is Calculated?</strong>
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="my-select">Customer</label>
                                    <select id="my-select" class="form-control" name="user">

                                        @foreach ($users as $user)

                                        <option value="{{$user->id}}">{{ $user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="my-select">Projects</label>
                                    <select id="my-select" class="form-control" name="project">
                                        @foreach ($medicals as $medical)
                                        <option value="{{ $medical->id }}" {{$invoice->order_id == $medical->id ?
                                            'selected': ''}} >{{ $medical->id }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <strong>Bill To</strong><br>
                                    <span>{{ $invoice->address }}</span><br>
                                    <span>{{ $invoice->city.', '.$invoice->country }}</span><br>
                                    <span>{{ $invoice->zip_code }}</span><br>
                                </div>
                                <div class="col-6">
                                    <strong>Ship To</strong><br>
                                    <span>--</span><br>
                                    <span>--,--</span><br>
                                    <span>--,--</span><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInput">Invoice Number</label>
                                <input type="text" class="form-control" name="invo_no" id="exampleInput"
                                    value="{{ $invoice->id }}" placeholder="Example input placeholder">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInput">Invoice Date</label>
                                    <input type="date" class="form-control" id="exampleInput"
                                        value="{{ $invoice->date }}" placeholder="Example input placeholder">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInput">Due Date</label>
                                    <input type="date" class="form-control" id="exampleInput"
                                        value="{{ $invoice->validtill }}" placeholder="Example input placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="my-select">Allowed Payment modes for this invoice</label>
                                    <select id="my-select" class="form-control" name="payment">
                                        <option value="cash on delievery">Cash on Delievery</option>
                                        <option value="cash before delievery">Cash before Delievry</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-select">Currency</label>
                                        <select id="my-select" class="form-control" name="currency">
                                            <option value="sr" selected>SR</option>
                                            <option value="usd">USD</option>
                                            <option value="pkr">PKR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-select">Sale Agent</label>
                                        <select id="my-select" class="form-control" name="sale_agent">
                                            <option value="0" selected>Noting to select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-select">Recurring Invoice</label>
                                        <select id="my-select" class="form-control" name="">
                                            <option>Text</option>
                                            <option>Text</option>
                                            <option>Text</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="my-select">Discount Type</label>
                                        <select id="my-select" class="form-control" name="discount">
                                            <option>Text</option>
                                            <option>Text</option>
                                            <option>Text</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="my-textarea">Admin Note</label>
                                    <textarea id="my-textarea" class="form-control" name="admin_note"
                                        rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
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
                        <span class='addCustom'>Add Item</span>
                        <tbody class="wrapper">
                            @foreach($invoice->pdf as $key => $pdf)
                            <tr>
                                <input type="hidden" name="tax[]" value="{{ $pdf->tax }}" >
                                <td><textarea class="form-control" name="title[]" id="" cols="30"
                                        rows="10">{{ $pdf->title }}</textarea></td>
                                <td> <textarea class="form-control" name="description[]" id="" cols="30"
                                        rows="10"> {{ $pdf->description }}</textarea>
                                </td>
                                <td><input type="number" name="qty[]" class="form-control" value="{{ $pdf->quantity }}">
                                </td>
                                <td><input type="number" name="rate[]" class="form-control" value="{{ $pdf->rate }}">
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
                                <td>Total Quote</td>
                                <td class="total-amount"> {{$t}}SR</td>
                            </tr>
                        </tbody>

                    </table>
                    <hr>


                    <div class="form-group">
                        <label for="my-textarea">Client Note</label>
                        <textarea id="my-textarea" class="form-control" name="client_note" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-textarea">Terms and Condition</label>
                        <textarea id="my-textarea" name="terms" class="form-control" rows="3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, sapiente sit, dolorum natus illo nisi quas repellendus dicta aspernatur praesentium porro dolores blanditiis velit debitis molestias, laudantium itaque. Enim, corporis?
                    </textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn bg-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/dynamic_items.js') }}"></script>
