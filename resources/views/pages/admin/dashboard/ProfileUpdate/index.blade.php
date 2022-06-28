@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>إعدادات العنوان</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="{{ route('user.list') }}">إعدادات العنوان</a></li>
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
                                        <th>وصف</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        @if($user->approve == 1)
                                        <div class="flex items-center justify-center text-theme-9" data-id="{{$user->user_id}}" > <input type="checkbox"  data-id="{{$user->user_id}}"  data-toggle="toggle" data-on="Active" class="profileApproved w-4 h-4 mr-2" checked="checked" /> <div class="text-{{$user->user_id}}"> Active</div>
                                        @else
                                        <div class="flex items-center justify-center text-theme-6" data-id="{{$user->user_id}}" > <input type="checkbox"   data-id="{{$user->user_id}}" data-value="{{$user->approve}}" class="profileApproved w-4 h-4 mr-2"/> <div class="text-{{$user->user_id}}"> InActive </div></div>
                                        @endif
                                      
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

@endsection
