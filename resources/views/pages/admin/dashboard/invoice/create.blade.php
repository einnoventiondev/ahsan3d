@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>يزيد</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('invoicess.index') }}">فاتورة</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('invoicess.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1
                                            invoice-field">ترتيب </label>
                                        <select class="form-select
                                            invoice-field" required
                                            name="order_id" aria-label="Default
                                            select example">
                                            <option selected disabled>اختر طلبا</option>
                                            @foreach($orders as $order)
                                            <option value="{{$order->id}}">{{$order->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تاريخ
                                        </label>
                                        <input type="date" class="form-control
                                            invoice-field" required name="date"
                                            id="" aria-describedby="emailHelp"
                                            placeholder="أدخل التاريخ">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">صالح لغاية </label>
                                        <input type="number" class="form-control
                                            invoice-field" required
                                            name="أدخل صالح حتى" id=""
                                            aria-describedby=""
                                            placeholder="أدخل صالح حتى">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                            
                                <div class=" d-flex">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">صورة
                                        </label>
                                        <input type="file" class="form-control
                                            invoice-field" required name="image"
                                            id="" aria-describedby=""
                                            placeholder="">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان
                                        </label>
                                        <input type="text" class="form-control zhd-addres
                                          " required name="address"
                                            id="" aria-describedby=""
                                            placeholder="" >
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        
                            <table class="table table-light" style="direction: ltr">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>عنصر</th>
                                        <th>الوصف</th>
                                        <th>الكمية</th>
                                        <th>السعر</th>
                                        <th>Tax</th>
                                        <th>Amount</th>
                                        <th>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>

                                <span class='add'>Add Item</span>

                                <tbody>
                                    <tr class='element' id='div_1'>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInput" name="title[]"  placeholder="Description">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <textarea  class="form-control" id="exampleInput" name="description[]"  placeholder="Description">
                                                </textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="exampleInput" name="qty[]"  placeholder="Quatntity">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInput" name="rate[]"  placeholder="Rate">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInput" name="tax[]"  placeholder="Tax">
                                            </div>
                                        </td>
                                        <td>
                                            <div id="amount_0">

                                            </div>
                                        </td>
                                        <td>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>  
                            <button type="submit" class="btn btn-primary ">يقدم</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

