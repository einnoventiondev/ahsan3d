@extends('layouts.admin.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>
                                    تحرير هنا
                                </h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" method="Post" action="{{ route('admin.update',$user->id) }}"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="role" value="admin">
                                <div class="row">
                                    <div class="mb-3 col-sm-12 col-md-6">
                                        <label class="col-form-label">الاسم</label>
                                        <input class="form-control" name="name" type="text" value="{{ $user->name }}" placeholder="الاسم..">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>

                                    <div class="mb-3 col-sm-12 col-md-6">
                                        <label class="col-form-label">الجوال</label>
                                        <input class="form-control" name="email" type="email"value="{{ $user->email }}" placeholder="الجوال..">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="mb-3 col-sm-12 col-md-6">
                                        <label class="col-form-label">البريد الالكتروني</label>
                                        <input class="form-control" name="password" type="password" value="{{ $user->password }}" placeholder="البريد الالكتروني..">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="mb-3 col-sm-12 col-md-6">
                                        <label class="col-form-label">الصورة</label>
                                        <input class="form-control admin-file" name="profile" type="file" placeholder="الاسم..">
                                        <img src="{{ asset('uploads/profile/' .$user->profile) }}" alt="image" class="dashboard-image-square" style="width:100px;height:100px">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">إرسال</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
