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
                                    عرض المشرف
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="col-form-label">الاسم</label>
                                        <input class="form-control" name="name" value="{{ $user->name }}" type="text" placeholder="الاسم.." readonly>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="col-form-label">الجوال</label>
                                        <input class="form-control" name="email"value="{{ $user->email }}" type="email" placeholder="الجوال.."readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="col-form-label">البريد الالكتروني</label>
                                        <input class="form-control" name="password" value="{{ $user->password }}"type="password" readonly placeholder="البريد الالكتروني..">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="col-form-label">
                                            صورة الملف الشخصي
                                        </label>
                                        <img src="{{ asset('uploads/profile/' .$user->profile) }}" alt="image" style="width:150px;height:150px">
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <label class="col-form-label">
                                            صورة الملف الشخصي
                                        </label>
                                        <img src="{{ asset('uploads/profile/' .$user->profile_image) }}" alt="image" style="width:150px;height:150px">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
