@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>قائمة المصممين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">قائمة المستخدمين</a></li>
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
                                        <th>رقم الهاتف</th>
                                        <th>3d تكنولوجيا</th>
                                        <th>طلب</th>
                                        <th>الطلب</th>

                                        <th>عمل</th>

                                    </tr>
                                </thead>
                                @foreach ($designers as $designer)


                                <tr>
                                    <td>{{ $designer->name }}</td>
                                    <td>{{ $designer->email }}</td>
                                    <td>{{ $designer->phone }}</td>
                                    <td>{{ $designers[0]->userDetail->printing_technology }}</td>
                                    <td>{{ $designers[0]->userDetail->software_type }}</td>

                                    <td>
                                        <div class="flex  idad-btn-box items-center justify-center text-theme-9" data-id="ttt" > <input type="checkbox" id="ttt" data-id="ttt"  data-toggle="toggle" data-on="Active" class="approved profileApproved idad-btn-box__input w-4 h-4 mr-2" checked="checked" /> <label for="tt" class="idad-btn-box__label"></label> <div class="text-tt"></div>
                                    </td>
                                    {{-- <td>
                                        @if($user->approve == 1)
                                        <div class="flex  idad-btn-box items-center justify-center text-theme-9" data-id="{{$user->id}}" > <input type="checkbox" id="{{$user->id}}" data-id="{{$user->id}}"  data-toggle="toggle" data-on="Active" class="approved profileApproved idad-btn-box__input w-4 h-4 mr-2" checked="checked" /> <label for="{{$user->id}}" class="idad-btn-box__label"></label> <div class="text-{{$user->id}}"></div>

                                        @else
                                        <div class="flex idad-btn-box items-center justify-center text-theme-6" data-id="{{$user->id}}" > <input type="checkbox"   data-id="{{$user->id}}" data-value="{{$user->approve}}" class="approved profileApproved  idad-btn-box__input w-4 h-4 mr-2"/> <div class="text-{{$user->id}}">  <label for="{{$user->id}}" class="idad-btn-box__label"></label> </div></div>

                                        @endif

                                    </td> --}}
                                    <td class="flex">
                                        <i class="delete-btn btn-primary fa fa-pencil">   </i>
                                        <a href="{{ route('designer.show',$designer) }}"><i class="view-btn btn-grey fa fa-eye">   </i></a>

                                        <form action="{{ route('designer.destroy',
                                        $designer) }}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-light"> <i class="delete-btn btn-danger fa fa-trash-o">   </i></button>
                                    </form>
                                                {{-- <form action="{{route('user.userUpdate',$user->id)}}" method="get">
                                                    @csrf
                                                    <input id="edit_icon" type="submit" name="" value="Edit"
                                                class="delete-btn btn-primary fa fa-trash-o d-none">
                                                    <label for="edit_icon">
                                                        <i class="delete-btn btn-primary fa fa-pencil">   </i>

                                                    </label>

                                            </form>
                                            <form action="{{route('user.userView',$user->id)}}" method="get">
                                                    @csrf
                                                    <input id="view_icon" type="submit" name="" value="View"
                                                class="delete-btn btn-grey fa fa-trash-o d-none">
                                                    <label for="view_icon">
                                                        <i class="view-btn btn-grey fa fa-eye">   </i>

                                                    </label>

                                            </form>
                                            <form  action="{{route('user.userDelete',$user->id)}}" method="post">
                                                    @csrf
                                                {{ method_field('DELETE') }}
                                                    <input id="delete-icon" type="submit" name="" value="Delete"
                                                class="delete-btn btn-danger fa fa-trash-o d-none">
                                                    <label for="delete-icon">
                                                        <i class="delete-btn btn-danger fa fa-trash-o">   </i>

                                                    </label>

                                            </form> --}}

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
