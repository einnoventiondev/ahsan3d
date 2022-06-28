@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>الشعارات</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('logo.index') }}">الشعارات</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('logo.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>صورة</th>
                                        <th>صورة1</th>
                                        <th>صورة2</th>
                                        <th>صورة3</th>
                                        <th>صورة4</th>
                                        <th>صورة5</th>
                                        <th>صورة6</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach ($logos as $logo)
                                <tr>

                                    <td><img src="{{ asset('upload/' . $logo->logo1) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo1.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo2) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo2.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo3) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo3.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo4) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo4.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo5) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo5.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo6) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo6.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>
                                    <td><img src="{{ asset('upload/' . $logo->logo7) }}" alt="image"
                                        class="card-img" style="height:60px;width:60px;">
                                        <form  action="{{route('logo7.destroy',$logo->id)}}" method="post">
                                            @csrf
                                         {{ method_field('DELETE') }}
                                            <input id="delete-icon" type="submit" name="" value="Delete"
                                        class="delete-btn btn-danger fa fa-trash-o d-none">
                                            <label for="delete-icon">
                                                <i class="delete-btn btn-danger fa fa-trash-o">   </i>
                                            </label>
                                     </form>
                                    </td>




                                    <td>
                                        <form action="{{ route('logo.destroy',
                                            $logo->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('logo.edit', $logo->id)
                                                }}">يحرر</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>
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
@endsection
