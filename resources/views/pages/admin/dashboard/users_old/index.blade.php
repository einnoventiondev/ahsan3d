@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('user.list') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>لقب</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>الحالة
                                        </th>
                                        <th>عمل</th>

                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->approve == 1)
                                        <div class="flex  idad-btn-box items-center justify-center text-theme-9" data-id="{{$user->id}}" > <input type="checkbox" id="{{$user->id}}" data-id="{{$user->id}}"  data-toggle="toggle" data-on="Active" class="approved profileApproved idad-btn-box__input w-4 h-4 mr-2" checked="checked" /> <label for="{{$user->id}}" class="idad-btn-box__label"></label> <div class="text-{{$user->id}}"></div>

                                        @else
                                        <div class="flex idad-btn-box items-center justify-center text-theme-6" data-id="{{$user->id}}" > <input type="checkbox"   data-id="{{$user->id}}" data-value="{{$user->approve}}" class="approved profileApproved  idad-btn-box__input w-4 h-4 mr-2"/> <div class="text-{{$user->id}}">  <label for="{{$user->id}}" class="idad-btn-box__label"></label> </div></div>

                                        @endif
                                      
                                    </td>
                                    <td class="flex">
                                        <a href="{{route('user.userUpdate',$user->id)}}" class="edit-btn"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="" class="view-btn"><i class="fa  fa-eye"></i></a>
                                        <a href="" class="delete-btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show page -->



@endsection
