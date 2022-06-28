@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>صور البانر المتحرك</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('image.index') }}">صور البانر المتحرك</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('image.create') }}">+أضف شريط التمرير</a>
                        <div class="table-responsive medical-datatable images-table">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>صورة</th>
                                        <th>العنوان الفرعي</th>
                                        <th>عنوان</th>
                                        <th>محتوى</th>
                                        {{-- <th>slide</th> --}}
                                        <th>الحالة</th>
                                        <th>عمل</th>
                                    </tr>

                                </thead>

                                    @foreach ($sliders as $slider)
                                    <tr>
                                        <td><img src="{{ asset('/' . $slider->images) }}" alt="image"
                                            class="card-img" style="width: 100px;height:100px;"></td>
                                            <td>{{$slider->sub_heading}}</td>
                                        <td>{{$slider->heading}}</td>

                                        <td>
                                            {!!html_entity_decode($slider->body_text)!!}</td>
                                        {{-- <td>
                                            <a href="{{route('view',$slider->id)}}"
                                                class="btn btn-primary">رأي</a>
                                            </td> --}}

                                            <td>
                                                <div class="flex  idad-btn-box items-center justify-center text-theme-9" data-id="idd" > <input type="checkbox" id="idd" data-id="idd"  data-toggle="toggle" data-on="Active" class="approved profileApproved idad-btn-box__input w-4 h-4 mr-2" checked="checked" /> <label for="idd" class="idad-btn-box__label"></label> <div class="text-idd"></div>
                                            </td>
                                            <td >
                                                <div class="action-img">

                <form action="{{route('imageEdit',$slider->id)}}" method="get">
                                            @csrf
                                            <input id="edit_icon" type="submit" name="" value="Edit"
                                        class="edit-btn btn-grey fa fa-trash-o d-none">
                                            <label for="edit_icon">
                                                <i class="edit-btn btn-grey fa fa-pencil-square-o">   </i>

                                            </label>

                                     </form>

                <form action="{{route('imageDelete',$slider->id)}}" method="post" style="margin-right: 5px ">
                                            @csrf

                                         {{ method_field('DELETE') }}
                                            <input id="{{$slider->id}}" type="submit" name="" value="Delete"
                                        class="delete-btn btn-grey fa fa-trash-o d-none">
                                            <label for="{{$slider->id}}">
                                                <i class="edit-btn btn-danger fa fa-trash-o">   </i>

                                            </label>

                                     </form>

                                                </div>
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
        </div>
    </div>
</div>

@endsection
