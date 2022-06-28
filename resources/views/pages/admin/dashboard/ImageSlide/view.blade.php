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
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{
                                route('image.index') }}"> خلف</a><br>
                            <div class="table-responsive img-view-table">
                               
                                <table class="table table-bordered " style="width:100%"> 
                                    <thead>
                                    <tr>
                                        <th>
                                            <label>سرعة:</label>

                                        </th>
                                        <th>
                                            <label>رقم:</label>


                                        </th>
                                        <th>
                                            <label>عنوان:</label>


                                        </th>
                                        <th>
                                            <label>سرعة:</label>

                                        </th>
                                        <th>
                                            <label>نص:</label>


                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>{{ $image->speed }}</p>
    
                                            </td>
                                            <td>
                                                <p>{{ $image->number }}</p>
    
                                            </td>
                                            <td>
                                                <p>{{ $image->heading }}</p>

    
                                            </td>
                                            <td>
                                                <p>{{ $image->sub_heading }}</p>

    
                                            </td>
                                            <td>
                                                <p>{!! $image->body_text !!}</p>

    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <!-- <div class="row">
                                        <div class="col-6">
                                            <label>سرعة:</label>
                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->speed }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>رقم:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->number }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>عنوان:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>العنوان الفرعي:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading }}</p>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-6">
                                            <label>نص:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!! $image->body_text !!}</p>
                                        </div>
                                    </div>
                                    <br> -->
                                  

                                    <!-- <div class="row">
                                        <div class="col-6">
                                            <label>العنوان 2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading2 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>العنوان الفرعي 2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading2 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>نص2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!!$image->body_text2 !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>عنوان3:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading3 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>العنوان الفرعي3:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading3 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Heading4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading4 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Subheading4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading4 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Bodytext4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!! $image->body_text4 !!}</p>
                                        </div>
                                    </div>
                                    <br> -->
                                    <form action="{{ route('image.destroy',
                                        $image->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{
                                            route('image.edit', $image->id) }}">يحرر</a>
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn
                                            btn-danger">حذف</button>
                                    </form>



                                    {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
