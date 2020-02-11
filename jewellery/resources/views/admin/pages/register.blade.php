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
								<h1>Sign up</h1>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>

							<div class="login-register-form">
								<form action="{{ route('admin_register') }}" method="POST">
									@csrf
									<div class="row">
										
										<div class="col-12 mb-20">
											<input id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="{{ __('Name') }}"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
											@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="col-12 mb-20"><input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="User ID / Email"  name="email" value="{{ old('email') }}" required autocomplete="email">
										 @error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="col-12 mb-20"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
										<div class="col-12 mb-20"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
										</div>
										<div class="col-12">
											<div class="row justify-content-between">
												<div class="col-auto mb-15">Already have account? <a href="login">Login Now.</a></div>
											</div>
										</div>
										<div class="col-12 mt-10"><button class="button button-primary button-outline" type="submit">{{ __('Register') }}</button></div>
									</div>
								</form>

							</div>
						</div>
					</div>

					<div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
						<div class="content">
							<h1>Sign up</h1>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>

				</div>
			</div>

		</div><!-- Content Body End -->
	@endsection