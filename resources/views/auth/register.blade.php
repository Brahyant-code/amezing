@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/registrar.css') }}" />
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div id="tarjeta1" class="card">
                <div class="card-body">
                    <img id="logoRegistrar" src="{{ asset('iconosLogin/logoregistrar.gif') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            <div id="tarjeta2" class="card">
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <br>
                                <div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                                    <div class="valid-feedback">Se ve bien!</div>
                                    <div class="invalid-feedback"> Por favor ingresa un nombre valido.</div>
                                </div>
                                <br>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <div class="valid-feedback">Se ve bien!</div>
                                    <div class="invalid-feedback"> Por favor ingresa un correo valido.</div>
                                </div>
                                <br>
                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">
                                    <div class="valid-feedback">Se ve bien!</div>
                                    <div class="invalid-feedback"> Por favor ingresa una contraseña valida.</div>
                                </div>
                                <br>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                                    <div class="valid-feedback">Se ve bien!</div>
                                    <div class="invalid-feedback"> Por favor ingresa una contraseña valida.</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <center> <img id="imagenresgistrar" src="{{ asset('iconosLogin/fb-avatar.png') }}" alt=""></center>
                                <br>
                                <center><span class="btn btn-secondary btn-file">
                                        Subir imagen <input type="file" accept="image/png,image/jpeg" id="subirImagen" onchange="previewImage();">
                                    </span></center>
                                <button type="submit" id="buttonCrear" class="btn btn-success btn-lg">Crear</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/visualizarPicture.js') }}"></script>
@endsection