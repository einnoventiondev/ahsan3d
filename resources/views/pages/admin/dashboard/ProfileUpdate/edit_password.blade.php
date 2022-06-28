@extends('layouts.admin.app')
@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">تحديث كلمة المرور</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('password_updates')}}">
                            @csrf


                            <div class="mb-3">
                                <label>كلمة المرور الحالي</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">

                                </div>
                            </div>

                            <div class="mb-3">
                                <label>كلمة مرور جديدة</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="newpassword" required="" placeholder="*********">

                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">حفظ</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
            </div>
        </div>
    </div>
</div>

@endsection
