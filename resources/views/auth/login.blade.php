@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-xs-12 ">
            <div class="card" id="card">
                <img id="Logo" src="{{ asset('iconosLogin/menup.jpg') }}" alt="escaner QR">
                <div class="card-body">
                    <p class="card-text" id="texto">Que tus clientes escaneen el codigo QR para que puedan ver tus platillos disponibles y favoritos en tu empresa ¿No tienes cuenta? puedes <b><a id="btn-crear"  href="{{ route('register') }}">crear una aqui.</a></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div><img id="vertical-line" src="{{ asset('iconosLogin/linea.png') }}" alt=""></div>
        </div>
        <div class="col-md-4 col-xs-12">
            <form action="{{ route ('login') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="card" id="tarjeta">
                    <div class="card-body">
                        <center> <img id="imagenUser" src="{{ asset('iconosLogin/login.png') }}" alt=""></center>
                        <br>
                        <div> <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-lg btn-block" type="submit" id="btn-ingresar">Ingresar</button>
                            <br>

                            @if (Route::has('password.request'))
                            <center><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Has olvidado la contraseña?') }}
                            </a></center>
                            @endif
                           <center><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <small class="form-check-label" for="remember">
                                {{ __('Recordar mi cuenta') }}
                            </small>
                            </center>

                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12 col-12">
            <div class="redes-container">
                <ul>
                    <li><a class="facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="WhatsApp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection