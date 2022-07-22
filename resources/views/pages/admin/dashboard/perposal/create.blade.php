@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>يزيد</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('perposal.index') }}">وضع اليد</a></li>

        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('perposal.store')
                            }}"enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!--
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ترتيب
                                        </label>
                                        <select class="form-select
                                            invoice-field"
                                            name="order_id" id="p_order_id" aria-label="Default
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
                                        <label for="exampleInputEmail1"> public service
                                        </label>
                                        <select class="form-select
                                            invoice-field"
                                            name="order_id_pub" id="p_order_id_pub" aria-label="Default
                                            select example">
                                            <option selected disabled>اختر طلبا</option>

                                             @foreach($publics as $public)
                                                <option value="{{$public->id}}">{{$public->id}}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
								-->
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order_id">طلبات الخدمات الطبية
                                        </label>
                                        <input type="text" class="form-control
                                        invoice-field"  id="p_order_id" name="order_id">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="order_id">طلبات الخدمات العامة
                                        </label>
                                        <input type="text" class="form-control
                                        invoice-field"  id="p_order_id_pub" name="order_id_pub">
                                    </div>
                                </div>
                                <input type="hidden" name="user" id="p_user_val">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User
                                            </label>
                                            <input type="text" class="form-control
                                            invoice-field"  disabled id="p_user">
                                        </div>
                                    </div>
                                    <input type="hidden" name="email" id="p_email_val">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">بريد الكتروني
                                            </label>
                                            <input type="text" class="form-control
                                            invoice-field"  disabled id="p_email">
                                        </div>
                                    </div>

                                     <input type="hidden" name="phone" id="p_phone_val">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">رقم جوال
                                            </label>
                                            <input type="text" class="form-control
                                            invoice-field" disabled id="p_phone">
                                        </div>
                                    </div>
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">عنوان
                                            </label>
                                            <input type="text" class="form-control
                                            invoice-field"  name="subject">
                                        </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تاريخ
                                        </label>
                                        <input type="date" class="form-control
                                            invoice-field" required
                                            name="date" id=""
                                            aria-describedby="emailHelp"
                                            placeholder="أدخل التاريخ">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">صالح لغاية</label>
                                        <input type="date" class="form-control
                                            invoice-field" required
                                            name="validtill" id=""
                                            aria-describedby=""
                                            placeholder="أدخل صالح حتى">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>

                                {{--  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الحالة
                                        </label>
                                        <select class="form-select
                                            invoice-field" required
                                            name="status" aria-label="Default
                                            select example">
                                            <option selected disabled>الحالة</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>  --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">team
                                        </label>
                                        <select class="form-select form-text
                                        text-muted
                                            invoice-field" required
                                            name="assigned" aria-label="Default
                                            select example">
                                            <option selected disabled>team</option>
                                            @foreach($admin as $user)
                                            <option value="{{ $user->id }}" name="{{ $user->name }}">{{ $user->name }}</option>

                                            @endforeach
                                        </select>
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">المدينة
                                        </label>
                                        <input type="text" class="form-control invoice-field
                                        " required name="city"
                                            id="" aria-describedby=""
                                            placeholder="">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">المنطقة
                                        </label>
                                        <input type="text" class="form-control invoice-field
                                        " required name="state"
                                            id="" aria-describedby=""
                                            placeholder="">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الدولة
                                        </label>
                                        <select class="form-select
                                            invoice-field" required
                                            name="country"  aria-label="Default
                                            select example">
                                            <option selected disabled>الدولة</option>
                                                @foreach ($country as $item )
                                                <option value="{{$item->id}}">{{ $item->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الرمز البريدي
                                        </label>
                                        <input type="text" class="form-control invoice-field
                                        " required name="zip_code"
                                            id="" aria-describedby=""
                                            placeholder="">
                                    </div>
                                </div>
                                {{--  <div class="invoice-field-12 d-flex">
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
                                </div>  --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تبوك
                                        </label>
                                        <input type="text" class="form-control zhd-addres
                                        " required name="address"
                                            id="" aria-describedby=""
                                            placeholder="">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>

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
                                        <th>الضريبة</th>

                                        <th>
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>

                                <span class='add'>عنصر +</span>

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
                                                <input type="number" class="form-control" id="exampleInput" name="rate[]"  placeholder="Rate">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="exampleInput" name="tax[]"  placeholder="Tax">
                                            </div>
                                        </td>

                                        <td>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <button type="submit" class="btn btn-primary">يقدم</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
