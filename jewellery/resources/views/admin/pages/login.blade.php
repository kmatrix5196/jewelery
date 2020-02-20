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
                                <h1>{{ isset($url) ? ucwords($url) : ""}} {{ __('Sign In') }}</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            
                            <div class="login-register-form">
                                @isset($url)
                                <form method="POST" action='{{ url("/$url/login") }}' aria-label="{{ __('Login') }}">
                                @else
                                <form method="POST" action='{{ url("/$url/login") }}' aria-label="{{ __('Login') }}">
                                @endisset
                                @csrf
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="User ID / Email" value="{{ old('email') }}" autocomplete="email" required autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-12 mb-20"><input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password"  autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="icon"></i>Remember.</label></div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                                                @auth("admin")
                                                <div class="col-auto mb-15">Dont have account? <a href="/{{$url}}/register">Create Now.</a></div>
                                            @endauth

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