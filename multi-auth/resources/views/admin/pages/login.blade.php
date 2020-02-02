    @extends('admin.layouts.account_default')
    @section('title','Jewelery Site Dashboard')
    @section('content')
  
  
        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                                <h1>Sign in</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>

                            <div class="login-register-form">
                                <form method="POST" action='{{ url("login/admin") }}' aria-label="{{ __('Login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 mb-20">
                                            <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="{{ __('User ID / Email') }}" required autocomplete="email" autofocus>
                                             @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('New Password') }}" required autocomplete="current-password" >
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="remember" class="adomx-checkbox-2">
                                                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="icon"></i> {{ __('Remember.') }}
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                 @if (Route::has('password.request'))
                                                <div class="col-auto mb-15"><a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></div>
                                                @endif
                                                <div class="col-auto mb-15">Dont have account? <a href="{{ url('/register/admin') }}">Create Now.</a></div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button class="button button-primary button-outline">sign in</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->
        @endsection