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
                                        <th>الهاتف</th>
                                        <th>طبي</th>
                                        <th>عام</th>
                                        <th>المصممين</th>
                                        <th>الحالة</th>
                                        <th>عمل</th>

                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>phone</td>
                                    <td>medical</td>
                                    <td>general</td>
                                    <td>designers</td>
                                    <td>
                                        @if($user->approve == 1)
                                        <div class="flex  idad-btn-box items-center justify-center text-theme-9" data-id="{{$user->id}}" > <input type="checkbox" id="{{$user->id}}" data-id="{{$user->id}}"  data-toggle="toggle" data-on="Active" class="approved profileApproved idad-btn-box__input w-4 h-4 mr-2" checked="checked" /> <label for="{{$user->id}}" class="idad-btn-box__label"></label> <div class="text-{{$user->id}}"></div>

                                        @else
                                        <div class="flex idad-btn-box items-center justify-center text-theme-6" data-id="{{$user->id}}" > <input type="checkbox"   data-id="{{$user->id}}" data-value="{{$user->approve}}" class="approved profileApproved  idad-btn-box__input w-4 h-4 mr-2"/> <div class="text-{{$user->id}}">  <label for="{{$user->id}}" class="idad-btn-box__label"></label> </div></div>

                                        @endif

                                    </td>
                                    <td class="flex">
                                         <form action="{{route('user.userUpdate',$user->id)}}" method="get">
                                            @csrf
                                            <input id="edit_icon" type="submit" name="" value="Edit"
                                        class="delete-btn btn-primary fa fa-trash-o d-none">
                                            <label for="edit_icon">
                                                <i class="delete-btn btn-primary fa fa-pencil">   </i>

                                            </label>

                                     </form>

                                     <a href="{{route('user.userView',$user->id)}}"><i class="view-btn btn-grey fa fa-eye">   </i></a>
                                     <form  action="{{route('user.userDelete',$user->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>

                                            </label>

                                     </form>

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
