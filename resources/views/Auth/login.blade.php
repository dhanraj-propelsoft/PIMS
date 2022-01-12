<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ url('/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <img src="https://www.pngfind.com/pngs/m/34-349693_circled-user-icon-transparent-background-username-icon-hd.png">
                            <div class="card-header">{{ __('User Login') }}</div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    @csrf
                                    <div class="row mb-3 mail">
                                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label> -->
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email-ID" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Email-ID'">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3 pass">
                                        <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Password'">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3 check">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label remember" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                              
                                                <a class="btn btn-link forgot-password" href="">
                                                    {{ __('Forgot Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" href="{{ url('person') }}"  class="btn btn-primary login">
                                                 <a href="{{ url('person') }}" class="signup"> {{ __('Login') }} </a>
                                            </button>
                                            <br><br>
                                            <a href="{{ url('person') }}" class="signup"> Sign Up </a>
                                            <br>
                                            <p class="copyright">Copyright @ PropelSoft.com</p>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>