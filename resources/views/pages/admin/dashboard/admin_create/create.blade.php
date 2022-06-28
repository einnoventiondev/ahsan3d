@extends('layouts.admin.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>إضافة مشرف</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" method="Post" action="{{ route('admin.store') }}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="role" value="admin">
                                    <div class="mb-3">
                                        <label class="col-form-label">الاسم</label>
                                        <input class="form-control" name="name" type="text" placeholder="الاسم..">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label">الجوال</label>
                                        <input class="form-control" name="email" type="email" placeholder="الجوال..">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">البريد الالكتروني</label>
                                        <input class="form-control" name="password" type="password" placeholder="البريد الالكتروني..">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">الاسم</label>
                                        <input class="form-control admin-file" name="profile" type="file" placeholder="الاسم..">
                                    </div>

                            </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
