@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>طلبات الخدمات العامة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="">طلبات الخدمات العامة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                    <!-- <a class="btn btn-primary mb-2" href="#"> جديد +</a> -->
                    <form method="POST" action="{{route('adminSetting')}}">
                         <div class="form-group">
                    <label for="sel1">Change status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1">ON</option>
                        <option value="2">Off</option>
                    </select>
                    </div>

                     <div class="form-group">
                    <input type="submit" name="status" class="btn btn-primary" value="update">
                    </div>
                    </form>
                       
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
