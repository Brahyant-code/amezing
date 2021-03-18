<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('resources/css/index.css'); ?>">
    <link rel="stylesheet" href="<?php echo url('resources/css/app.css'); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Amezing | Iniciar sesión</title>
</head>

<body style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 ">
                <div class="card" id="card">
                    <img id="Logo" src="<?php echo url('resources/iconosLogin/menup.jpg'); ?>" alt="escaner QR">
                    <div class="card-body">
                        <p class="card-text" id="texto">Que tus clientes escaneen el codigo QR para que puedan ver tus platillos disponibles y favoritos en tu empresa !</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div><img id="vertical-line" src="<?php echo url('resources/iconosLogin/linea.png'); ?>" alt=""></div>
            </div>
            <div class="col-md-4 col-xs-12">
                <form action="" method="POST" class="needs-validation" novalidate>
                    <div class="card" id="tarjeta">
                        <div class="card-body">
                            <center> <img id="imagenUser" src="<?php echo url('resources/iconosLogin/login.png'); ?>" alt=""></center>
                            <br>
                            <div><input type="email" name="correo" class="form-control" placeholder="Correo" minlength="3" maxlength="25" required>
                                <div class="valid-feedback">Se ve bien!</div>
                                <div class="invalid-feedback"> Por favor ingresa un correo valido.</div>
                            </div>
                            <br>
                            <div><input type="password" name="contraseña" class="form-control" placeholder="Contraseña" minlength="8" maxlength="8" required>
                                <div class="valid-feedback">Se ve bien!</div>
                                <div class="invalid-feedback"> Por favor ingresa una contraseña valida.</div>
                            </div>
                            <br>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success btn-lg btn-block" type="submit" id="btn-ingresar">Ingresar</button>
                                <br>
                                <center><a href="#">¿Has olvidado la contraseña?</a></center>
                                <center><small>¿no tienes cuenta? <a href="{{ route('crearCuenta') }}" id="linkCrear">Crea una</a></small></center>
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
    <script src="<?php echo url('resources/js/validacionLogin.js'); ?>"></script>
</body>

</html>