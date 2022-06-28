@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>اتصل بنا</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a  href="{{ route('contact.index') }}">اتصل بنا</a></li>

        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('contact.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>اسم الموقع</th>
                                        <th>خريطة الموقع</th>
                                        <th>عنوان</th>
                                        <th>العنوان الفرعي</th>
                                        <th>بريد الالكتروني</th>
                                        <th> هاتف</th>
                                        <th>عنوان</th>

                                        <th>نص</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->location_name }}</td>
                                        <td>{{ $contact->location_map }}</td>
                                        <td>{{ $contact->heading}}</td>
                                        <td>{{ $contact->subheading }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{!!$contact->body_text!!}</td>
                                        <td>
                                            <form action="{{
                                                route('contact.destroy',
                                                $contact->id) }}"
                                                method="POST">
                                                <a class="btn btn-primary"
                                                    href="{{
                                                    route('contact.edit',
                                                    $contact->id) }}">يحرر</a>
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
</div>                                 
@endsection
