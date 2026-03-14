<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Registro de Evento | {{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/equation/html/src/assets/img/favicon.ico"/>
    
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/admin/layouts/vertical-light-menu/loader.js') }}"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/src/assets/css/light/authentication/auth-cover.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/src/assets/css/dark/authentication/auth-cover.css') }}" rel="stylesheet" type="text/css" />


    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/plugins/src/stepper/bsStepper.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/assets/css/light/scrollspyNav.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/assets/css/dark/scrollspyNav.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
    <!--  END CUSTOM STYLE FILE  -->

</head>
<body class="form" style="background-image: linear-gradient(-225deg, #231557 0%, #44107A 29%, rgba(255, 19, 97, 0.75) 100%);">

    <div id="load_screen"> <div class="loader"> <div class="loader-content"> <div class="spinner-grow align-self-center"></div> </div></div></div>

    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">

                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                    <div class="auth-cover">
                        <div class="position-relative">
                            <!-- <img src="{{ asset('assets/admin/images/logo.png') }}" alt="auth-img"> -->
                            <!-- <h2 class="mt-5 text-white font-weight-bolder px-2">¡Bienvenido al Evento de Natación!</h2>
                            <p class="text-white px-2">Regístrate para participar en la competencia y gestionar tus marcas.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 col-xl-6 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Registro</h2>
                                    <p>Completa todos tus datos para inscribirte</p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre Completo</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Correo Electrónico</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Distancia a nadar</label>
                                            <select name="distancia_km" class="form-select">
                                                <option value="1" {{ old('distancia_km') == '1' ? 'selected' : '' }}>1 KM</option>
                                                <option value="3" {{ old('distancia_km') == '3' ? 'selected' : '' }}>3 KM</option>
                                                <option value="5" {{ old('distancia_km') == '5' ? 'selected' : '' }}>5 KM</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label d-block">Equipo</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="aletas" id="conAleta" value="1" {{ old('aletas') == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="conAleta">Con aletas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="aletas" id="sinAleta" value="0" {{ old('aletas') == '0' || !old('aletas') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="sinAleta">Sin aletas</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Confirmar Contraseña</label>
                                            <input type="password" name="password_confirmation" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input me-3" type="checkbox" id="terms" required>
                                                <label class="form-check-label" for="terms">
                                                    Acepto los <a href="javascript:void(0);" class="text-primary">Términos y Condiciones</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">REGISTRARME AHORA</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-warning">Inicia sesión</a></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->

                    <div id="wizard_Default" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-3 mt-4">
                                         <div class="text-center">
                                            <img src="{{ asset('assets/admin/images/logo.png') }}" alt="Logo" class="img-fluid mb-2" width="180">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="bs-stepper stepper-form-one">
                                    <div class="bs-stepper-header" role="tablist">
                                        <div class="step" data-target="#defaultStep-one">
                                            <button type="button" class="step-trigger" role="tab" >
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">Usuario</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#defaultStep-two">
                                            <button type="button" class="step-trigger" role="tab"  >
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">Datos Personales</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#defaultStep-three">
                                            <button type="button" class="step-trigger" role="tab"  >
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Datos de Evento</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content">
                                        <div id="defaultStep-one" class="content" role="tabpanel">
                                            <form class="row g-3">
                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Correo Electrónico</label>
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Contraseña</label>
                                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Confirmar Contraseña</label>
                                                    <input type="password" name="password_confirmation" class="form-control" required>
                                                    @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                            </form>

                                            
                                            
                                            <div class="button-action mt-5">
                                                <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                <button class="btn btn-secondary btn-nxt">Next</button>
                                            </div>
                                        </div>
                                        <div id="defaultStep-two" class="content" role="tabpanel">
                                            <form class="row g-3">
                                                <div class="col-md-4 mb-2">
                                                    <label class="form-label">Tipo Documento</label>
                                                    <select name="document_type" class="form-select">
                                                        <option value="DNI" {{ old('document_type') == 'DNI' ? 'selected' : '' }}>DNI</option>
                                                        <option value="Pasaporte" {{ old('document_type') == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                                                        <option value="CE" {{ old('document_type') == 'CE' ? 'selected' : '' }}>CE</option>
                                                    </select>   
                                                    @error('document_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-8 mb-2">
                                                    <label class="form-label">Número Documento</label>
                                                    <input type="text" name="document_number" class="form-control @error('document_number') is-invalid @enderror" value="{{ old('document_number') }}" required autofocus>
                                                    @error('document_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Nombres</label>
                                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" required autofocus>
                                                    @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Apellidos</label>
                                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required autofocus>
                                                    @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label class="form-label">Fecha de Nacimiento</label>
                                                    <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}" required autofocus>
                                                    @error('birth_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label class="form-label">Género</label>
                                                    <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                                                        <option value="">Seleccionar género</option>
                                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculino</option>
                                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femenino</option>
                                                    </select>
                                                    @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label class="form-label">Teléfono</label>
                                                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autofocus>
                                                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                <div class="col-md-6 mb-2">
                                                    <label class="form-label">Correo Electrónico</label>
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>

                                                
                                            </form>
                                            
                                            <div class="button-action mt-5">
                                                <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                <button class="btn btn-secondary btn-nxt">Next</button>
                                            </div>
                                        </div>
                                        <div id="defaultStep-three" class="content" role="tabpanel" >
                                            <form class="row g-3">
                                                <div class="col-12  mb-2">
                                                    <label class="form-label">Club</label>
                                                    <select name="club" class="form-select @error('club') is-invalid @enderror" required>
                                                        <option value="">Seleccionar club</option>
                                                        <option value="Club A" {{ old('club') == 'Club A' ? 'selected' : '' }}>Club A</option>
                                                        <option value="Club B" {{ old('club') == 'Club B' ? 'selected' : '' }}>Club B</option>
                                                        <option value="Club C" {{ old('club') == 'Club C' ? 'selected' : '' }}>Club C</option>
                                                    </select>
                                                    @error('club') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                                <div class="col-12  mb-2">
                                                    <label class="form-label">Modalidad</label>
                                                    <select name="modalidad" class="form-select @error('modalidad') is-invalid @enderror" required>
                                                        <option value="">Seleccionar modalidad</option>
                                                        <option value="Con Aletas" {{ old('modalidad') == 'Con Aletas' ? 'selected' : '' }}>Con Aletas</option>
                                                        <option value="Sin Aletas" {{ old('modalidad') == 'Sin Aletas' ? 'selected' : '' }}>Sin Aletas</option>
                                                    </select>
                                                    @error('modalidad') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                                <div class="col-md-12  mb-2">
                                                    <label class="form-label">Talla Polo</label>
                                                    <select name="talla_polo" class="form-select @error('talla_polo') is-invalid @enderror" required>   
                                                        <option value="">Seleccionar talla</option>
                                                        <option value="S" {{ old('talla_polo') == 'S' ? 'selected' : '' }}>S</option>
                                                        <option value="M" {{ old('talla_polo') == 'M' ? 'selected' : '' }}>M</option>
                                                        <option value="L" {{ old('talla_polo') == 'L' ? 'selected' : '' }}>L</option>
                                                        <option value="XL" {{ old('talla_polo') == 'XL' ? 'selected' : '' }}>XL</option>
                                                    </select>
                                                    @error('talla_polo') <div class="invalid-feedback">{{ $message }}</div> @enderror   
                                                </div>
                                                
                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Cargar Voucher</label>
                                                    <input type="file" name="voucher" class="form-control @error('voucher') is-invalid @enderror" required>
                                                    @error('voucher') <div class="invalid-feedback">{{ $message }}</div> @enderror  
                                                </div>


                                                <div class="col-12 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                                        <label class="form-check-label" for="terms">
                                                            Acepto los <a href="javascript:void(0);" class="text-primary">Términos y Condiciones</a>
                                                        </label>
                                               
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="button-action mt-3">
                                                <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                                <button class="btn btn-success me-3">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/admin/layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ asset('assets/admin/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/admin/src/assets/js/scrollspyNav.js') }}"></script>
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/admin/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->  
</body>
</html>