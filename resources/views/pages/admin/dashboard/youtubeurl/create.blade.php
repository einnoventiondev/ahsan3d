@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>يوتيوب رابط</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('youtubeurl.index') }}">يوتيوب رابط</a></li>
        </ol>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">

                        <form method="POST" action="{{ route('youtubeurl.store')
                            }}">
                            @csrf
                              <div class="row">
                                
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Medical Video</label>
                                    <input type="url" class="form-control" name="youtubeurl"
                                        value="{{$youtubeurls[0]->youtubeurl}}" id="" aria-describedby="emailHelp"
                                        placeholder="Enter URL">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Public Video</label>
                                <input type="url" class="form-control" name="youtubeurlpublic"
                                    value="{{$youtubeurls[0]->youtubeurlpublic}}" id="" aria-describedby="emailHelp"
                                    placeholder="Enter URL">
                                <small id="" class="form-text text-muted"></small>
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Designer 1</label>
                                <input type="url" class="form-control" name="youtubeurld1"
                                    value="{{$youtubeurls[0]->youtubeurld1}}" id="" aria-describedby="emailHelp"
                                    placeholder="Enter URL">
                                <small id="" class="form-text text-muted"></small>
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Designer 2</label>
                                <input type="url" class="form-control" name="youtubeurld2"
                                    value="{{$youtubeurls[0]->youtubeurld2}}" id="" aria-describedby="emailHelp"
                                    placeholder="Enter URL">
                                <small id="" class="form-text text-muted"></small>
                            </div>
                        </div>

                    </div>
                            

                            <button type="submit" class="btn btn-primary">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
