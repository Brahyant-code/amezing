<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('resources/css/registrar.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('resources/css/app.css'); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Amezing | Crear cuenta</title>
</head>

<body style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div id="tarjeta1" class="card">
                    <div class="card-body">
                        <img id="logoRegistrar" src="<?php echo url('resources/iconosLogin/logoregistrar.gif'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div id="tarjeta2" class="card">
                    <div class="card-body">
                        <form action="" method="POST" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <br>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Nombre" minlength="3" maxlength="15" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa un nombre valido.</div>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Apellido" minlength="3" maxlength="15" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa un apellido valido.</div>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Nombre de la empresa" minlength="3" maxlength="15" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa un nombre de empresa valido.</div>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="email" class="form-control" placeholder="Correo" minlength="3" maxlength="25" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa un correo valido.</div>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="password" class="form-control" placeholder="Contraseña" minlength="8" maxlength="8" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa una contraseña valida.</div>
                                    </div>
                                    <br>
                                    <div>
                                        <input type="password" class="form-control" placeholder="Confirmar contraseña" minlength="8" maxlength="8" required>
                                        <div class="valid-feedback">Se ve bien!</div>
                                        <div class="invalid-feedback"> Por favor ingresa una contraseña valida.</div>
                                        <a id="linkIniciarSesion" href="{{route('home')}}">Iniciar sesión</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <center> <img id="imagenresgistrar" src="<?php echo url('resources/iconosLogin/fb-avatar.png'); ?>" alt=""></center>
                                    <br>
                                    <center><span class="btn btn-secondary btn-file">
                                            Subir imagen <input type="file" accept="image/png,image/jpeg" id="subirImagen" onchange="previewImage();" required>
                                        </span></center>
                                    <button type="submit" id="buttonCrear" class="btn btn-success btn-lg">Crear</button>
                                    <center><a id="linkIniciarSesion2" href="{{route('home')}}">Iniciar sesión</a></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo url('resources/js/visualizarPicture.js'); ?>"></script>
    <script src="<?php echo url('resources/js/validacionLogin.js'); ?>"></script>
</body>

</html>