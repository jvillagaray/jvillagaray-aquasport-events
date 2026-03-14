<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión | {{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/equation/html/src/assets/img/favicon.ico"/>
    
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/admin/layouts/vertical-light-menu/loader.js') }}"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/src/assets/css/dark/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="form">

    <div id="load_screen"> <div class="loader"> <div class="loader-content"> <div class="spinner-grow align-self-center"></div> </div></div></div>

    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
    
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/admin/images/logo.png') }}" alt="Logo" class="img-fluid mb-2" width="180">
                                        </div>
                                        <br>
                                        <h3 class="text-center">Iniciar Sesión</h3>
                                        <p class="text-center">Ingresa tu correo y contraseña para entrar</p>
                                        
                                        @if (session('status'))
                                            <div class="alert alert-success mb-3">{{ session('status') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input me-3" type="checkbox" name="remember" id="form-check-default">
                                                <label class="form-check-label" for="form-check-default">
                                                    Recordarme
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">ENTRAR</button>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-12 mb-4">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>O continuar con</span></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-12">
                                        <button type="button" class="btn btn-social-login w-100 ">
                                            <img src="https://designreset.com/equation/html/src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
    
                                    <div class="col-sm-4 col-12">
                                        <button type="button" class="btn btn-social-login w-100">
                                            <img src="https://designreset.com/equation/html/src/assets/img/github-icon.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
    
                                    <div class="col-sm-4 col-12">
                                        <button type="button" class="btn btn-social-login w-100">
                                            <img src="https://designreset.com/equation/html/src/assets/img/twitter.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div> -->

                                    <div class="col-12">
                                        <div class="text-center">
                                            @if (Route::has('password.request'))
                                                <p class="mb-2"><a href="{{ route('password.request') }}" class="text-info">¿Olvidaste tu contraseña?</a></p>
                                            @endif
                                            <p class="mb-0">¿No tienes cuenta? <a href="{{ route('register') }}" class="text-warning">Regístrate</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>