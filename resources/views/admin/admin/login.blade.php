
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Login</title>
	<link rel="shortcut icon" href="{{ asset('mainAdmin/assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ mix('css/login.css') }}" > {{-- Webpack --}}
</head>
<body>

	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{ route('logOn') }}">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                      {{-- {{dd($errors->all())}} --}}
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
					<span class="login100-form-title p-b-34 p-t-27">
						{{ __('Login') }}
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            {{ __('Login') }}
						</button>
					</div>
					<div class="text-center ">
						<a class="txt1" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="{{ mix('js/login.js') }}"></script>
</body>

</html>
