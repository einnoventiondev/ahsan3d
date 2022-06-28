@extends('layouts.admin.app')
@section('content')
<div class="content-main">
  <h3>قائمة المستخدمين</h3>
  <div class="breadcrumb-main">
    <ol class="breadcrumb">
      <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
      <li><a href="#">صفحات الموقع</a></li>
      <li><a href="{{ route('client.index') }}">قائمة المستخدمين</a></li>
    </ol>
  </div>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-sm-12">
        <div class="card medical-card">
          <div class="card-body p-0">
            <form method="POST" action="{{ route('client.update', $clients->id)
              }}">
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">غير نشط
                    </label>
                    <input type="text" class="form-control" name="inactive"
                      value="{{$clients->inactive}}"id=""
                    aria-describedby="emailHelp" placeholder="Enterheading">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">نشيط
                    </label>
                    <input type="text" class="form-control" name="active" id=""
                      value="{{$clients->active}}" aria-describedby=""
                    placeholder="Enter sub heading">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> سجل </label>
                    <input type="text" class="form-control" name="log"
                      value="{{$clients->log}}"id="" aria-describedby=""
                    placeholder="Enter sub heading">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  
              <div class="form-group">
                <label for="exampleInputEmail1">أعضاء الفريق
                </label>
                <input type="text" class="form-control" name="team_member"
                  value="{{$clients->team_member}}"id="" aria-describedby=""
                placeholder="Enter sub heading">
                <small id="" class="form-text text-muted"></small>
              </div>


                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">دفع
                    </label>
                    <input type="text" class="form-control" name="payment"
                      value="{{$clients->payment}}" id="" aria-describedby=""
                    placeholder="Enter body text">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">طلب
                    </label>
                    <input type="text" class="form-control" name="requests"
                      value="{{$clients->request}}" id="" aria-describedby=""
                    placeholder="Enter body text">
                    <small id="" class="form-text text-muted"> </small>
                  </div>
                </div>
              
                
              </div>
              
              

              

            
             
              <!-- <div class="form-group">
              <label for="exampleInputEmail1">عرض سعر </label>
              <input type="text" class="form-control" name="proposal" value="{{$clients->proposal}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"> </small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Invoice </label>
              <input type="text" class="form-control" name="invoice"value="{{$clients->invoice}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted">small>
            </div> -->
              <button type="submit" class="btn btn-primary">إرسال</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
