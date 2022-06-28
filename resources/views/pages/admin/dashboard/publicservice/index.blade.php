@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>طلبات الخدمات العامة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="{{ route('publics.index') }}">طلبات الخدمات العامة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                    <!-- <a class="btn btn-primary mb-2" href="#"> جديد +</a> -->
                        
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>رقم الطلب</th>
                                        <th>اسم المريض</th>
                                        <th>التخصص</th>
                                        <th> البريد الالكتروني</th>
                                        <th>النوع</th>
                                        <th>التاريخ</th>
                                        <th></th>
                                        <th>عمل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publics as $medi)
                                    @if($medi->seen == 0)
                                    <tr>
                                        <td><b><a href="{{route('publics.show', $medi->id)}}">{{ $medi->id}}</a></b></td>
                                        <td><b><a href="{{route('publics.show', $medi->id)}}">{{ $medi->full_name}}</a></b></td>
                                        <td><b>{{ $medi->specialization }}</b></td>
                                        <td><b>{{ $medi->email }}</b></td>
                                        <td><b>{{ $medi->gender }}</b></td>
                                        <td><b>{{ $medi->created_at->format('Y-m-d')
                                                }}</b></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{
                                                route('publics.show', $medi->id)
                                                }}">عرض</a>
                                        </td>
                                        <td class="flex">
                                        <!-- <a href="" class="edit-btn"><i class="fa fa-pencil-square-o"></i></a> -->
                                        <!-- <a href="" class="view-btn"><i class="fa  fa-eye"></i></a> -->
                                        <a href="" class="delete-btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td><a href="{{route('publics.show', $medi->id)}}">{{ $medi->id}}</a></td>
                                        <td><a href="{{route('publics.show', $medi->id)}}">{{ $medi->full_name}}</a></td>
                                        <td>{{ $medi->specialization }}</td>
                                        <td>{{ $medi->email }}</td>
                                        <td>{{ $medi->gender }}</td>
                                        <td>{{ $medi->created_at->format('Y-m-d')
                                                }}</td>
                                        <td>
                                            <a class="btn btn-primary"
                                                data-artid="<?php echo
                                                $medi['id']; ?>" href="{{
                                                route('publics.show', $medi->id)
                                                }}">عرض</a>
                                        </td>
                                        
                                        <td class="flex">
                                        <!-- <a href="" class="edit-btn"><i class="fa fa-pencil-square-o"></i></a> -->
                                        <!-- <a href="" class="view-btn"><i class="fa  fa-eye"></i></a> -->
                                        <a href="" class="delete-btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
        $(function(){
            $('.link').click(function(){
                var elem = $(this);
                $.ajax({
                    type: "GET",
                    url: "{{route('mark.read')}}",
                    data: "id="+elem.attr('data-artid'),
                    dataType:"json",  
                    success: function(data) {
                        if(data.success){
                               elem.hide();
                               $('#message').html(data.message);
                        }
                    }
                });
                return false;
            });
        });
        </script>
@endpush