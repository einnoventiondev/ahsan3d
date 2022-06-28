@extends('layouts.auth.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="login-card">
                <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="logo-imaage">
                    <img src="{{asset('assets/images/logo/logo.svg')}}" class="mb-3" width="100" alt="logo">
                    </div>
                    <div class="login-data">
                        
                    
                    <!-- <h4>Login</h4>
                    <h6>Welcome back! Log in to your account.</h6> -->
                    <div class="form-group">
                        
                        <div class="input-group">
                            
                            <input class="form-control input-login" type="email" name='email' required="" placeholder="Test@gmail.com" />
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <div class="input-group">
                            
                            <input class="form-control input-login" type="password" name="password" required="" placeholder="*********" />
                            <!-- <div class="show-hide">
                                <span class="show"> </span>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group login-check"> 
                    <a class="link" href="{{ route('password.request') }}">  هل نسيت كلمة السر؟</a>
                        <div class="checkbox">
                            <input id="checkbox1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label class="text-muted" for="checkbox1">تذكر كلمة المرور</label>
                        </div>
                    </div>
                    <div class="form-group btan-login">
                        <button class="btn btn-blue btn-block" type="submit">
                        تسجيل الدخول
                        </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection