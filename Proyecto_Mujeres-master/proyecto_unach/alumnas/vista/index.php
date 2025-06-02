<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mujeres Universitarias</title>
    <!--Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../vista/img/inicio.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form autocomplete="nope" name="fmt_inicio" class="p-3 mt-3" method="POST" action="../modelo/conexion.php" enctype="application/x-www-form-urlencoded">
                        <!-- Usuario -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">Correo Unach</label>
                        </div>

                        <!-- Password -->
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword">
                            <label for="floatingPassword">Clave</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <a href="#">¿Has olvidado tu contraseña?</a>
                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Botón enviar -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                            <a href="./alumnas/vista/registro_alumnas.php">¿No tienes una cuenta? Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Bootstrap 5 JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
