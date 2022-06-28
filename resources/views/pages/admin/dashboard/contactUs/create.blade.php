@extends('layouts.admin.app')
@section('content')

<div class="content-main">
  <h3>يزيد</h3>
  <div class="breadcrumb-main">
    <ol class="breadcrumb">
      <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

      <li><a href="#">صفحات الموقع</a></li>
      <li><a href="{{ route('contact.index') }}">اتصل بنا</a></li>

    </ol>
  </div>

  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-sm-12">
        <div class="card medical-card">
          <div class="card-body p-0">
            <form method="POST" action="{{route('contact.store')}}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">اسم الموقع </label>
                    <input type="text" class="form-control" name="location_name"
                      id="" aria-describedby="emailHelp" placeholder="أدخل العنوان">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">خريطة الموقع </label>
                    <input type="text" class="form-control" name="location_map"
                      id="" aria-describedby="" placeholder="أدخل العنوان الفرعي">
                    <small id="" class="form-text text-muted"></small>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">العنوان الفرعي </label>
                    <input type="text" class="form-control" name="subheading"
                      id=""
                      aria-describedby="" placeholder="أدخل العنوان الفرعي">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="form-group">
                    <label for="exampleInputEmail1"> عنوان </label>
                    <input type="text" class="form-control" name="heading" id=""
                      aria-describedby="" placeholder="أدخل العنوان الفرعي">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                

              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">نص أساسي </label>
                <textarea id="" name="body_text" placeholder="أدخل نصًا أساسيًا"
                  rows="4" cols="50" class="ckeditor form-control">

                </textarea>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">هاتف </label>
                    <input type="number" class="form-control" name="phone" id=""
                      aria-describedby="" placeholder="أدخل العنوان الفرعي">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان </label>
                    <input type="text" class="form-control" name="address" id=""
                      aria-describedby="" placeholder="أدخل نصًا أساسيًا">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">بريد الالكتروني </label>
                    <input type="email" class="form-control" name="email" id=""
                      aria-describedby="" placeholder="أدخل نصًا أساسيًا">
                    <small id="" class="form-text text-muted"></small>
                  </div>

                </div>
              </div>
              <button type="submit" class="btn btn-primary">إرسال</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
