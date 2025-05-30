<!DOCTYPE html>
<html lang="es-M">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro</title> 
<!--De nuevo, holap --> 
</head>
<body>
<section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="./img/figura2.jpg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form autocomplete="nope" name="fmt_inicio" class="p-3 mt-3" method="POST" action="../controlador/registrar_alumnas.php" enctype="application/x-www-form-urlencoded">
                        <!-- Correo -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="correo">
                            <label for="floatingInput">Correo</label>
                        </div>
                        <!-- Matrícula -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="matricula">
                            <label for="floatingInput">Matrícula</label>
                        </div>

                        <!-- Nombre -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" onkeyup="this.value = this.value.toUpperCase();"  name="nombre">
                            <label for="floatingInput">Nombre</label>
                        </div>

                        <!-- Apellido Paterno -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" onkeyup="this.value = this.value.toUpperCase();" name="apaterno"> <!--style='text-transform:uppercase' -->
                            <label for="floatingInput">Apellido Paterno</label>
                        </div>

                        <!-- Apellido Materno -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" onkeyup="this.value = this.value.toUpperCase();" name="amaterno"> <!--style='text-transform:uppercase' -->
                            <label for="floatingInput">Apellido Materno</label>
                        </div>
                        

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Botón enviar -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Registrar</button>
                        </div>
                    </form>
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