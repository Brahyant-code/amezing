<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../resources/css/registrar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Amezing | Registrar</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div id="tarjeta" class="card">
                    <div class="card-body">
                        <img id="logoRegistrar" src="../../resources/iconosLogin/logoregistrar.gif" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div  id="tarjeta"class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nombre">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Apellido">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nombre de la empresa">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Contraseña">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Confirmar contraseña">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                <center> <img id="imagenresgistrar" src="../../resources/iconosLogin/login.png" alt=""></center>
                                <br>
                                <label for="">Añadir foto de perfil</label>
                                <input  id="subirFoto" type="file">
                                <button type="submit" id="buttonCrear" class="btn btn-success btn-lg">Crear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>