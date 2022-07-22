@extends('layouts.auth.app')
<div class="login-box email-admin">
<div class="login-logo">
        <a href="">
            <img src="{{ asset('upload/1647956582.jpg') }}" class="mb-3" style="width: 100px;" alt="logo">
        </a>
    </div>
            <div class="card">
            <label> إعادة تعيين كلمة المرور</label>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="  ">عنوان البريد الالكترونى</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="أدخل البريد الإلكتروني">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="row mb-0">
                            <div class=" offset-md-4">
                                <button type="submit" class="btn btn-primary btn-r-30">
                                    {{ __('إرسال رابط إعادة تعيين كلمة السر') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
