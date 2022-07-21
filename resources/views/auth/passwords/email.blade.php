@extends('layouts.auth.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-header">إعادة تعيين كلمة المرور</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">عنوان البريد الالكترونى</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
    </div>
@endsection
