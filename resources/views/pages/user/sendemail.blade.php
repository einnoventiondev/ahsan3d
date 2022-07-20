@extends('layouts.admin.head')

<div class="login-box">
    @include('sweetalert::alert');
    <div class="login-logo">
        <div class="login-logo">
            <a href="">

                <img src= "{{ asset('upload/1647956582.jpg') }}" class="mb-3" style="width: 100px;" alt="logo">

            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
              Reset Password
            </p>
			 <p class="login-box-msg">
				 If you've lost your password and wish to reset it,
				send us a request.
            </p>

            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
			@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

            <form method="POST" action="{{ route('send.mail.user') }}">
                @csrf
				<!--<h1>sana ramzan</h1>-->
                <div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autocomplete="email" autofocus placeholder="enter Email" value="{{ old('email') }}">

                        @if($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary btn-flat btn-block">
                            Send Email
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

