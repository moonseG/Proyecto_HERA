<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Proyecto Hera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
     <!-- CSS de Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- JS de Bootstrap 5  -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
 
    <header class="header">
        <div class="logo">
            <img src="./img/logo.jpg" alt="Logo"> <!-- Si HTML está dentro de 'vista' -->
        </div>
        <nav> 
            <ul class="nav-links">
                <li><a href="menu_alumnas.php">Inicio</a></li>
                <li><a href="#">Psicólogas</a></li>
                <li><a href="tutorias.php">Tutorias</a></li>
                <li><a href="calendario.html">Citas</a></li>
            </ul>
        </nav>
        <a class="btn" href="#"><button>Mensajes</button></a>
    </header>

    <div class="container-fluid p-0 m-0">
      <div id="theCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#theCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#theCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#theCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#theCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
    
        <!-- Slides -->
        <div class="carousel-inner">
    
          <div class="carousel-item active">
            <img src="https://institutoeducaccion.org/wp-content/uploads/2023/03/Foto-Blog-iadb.jpg" class="d-block w-100" alt="Ilustración">
            <div class="carousel-caption d-none d-md-block">
              <h3>Proyecto Hera</h3>
              <p>Apoyo a las mujeres</p>
            </div>
          </div> 
    
          <div class="carousel-item">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh1wLEq9SKPBVK73Ttel0D62xc9YuUlvsLPQYUUH1oS_uHfZTFLtRdoS3wqrNqbGBpW4uyF3WdmF605vydSvuk89UCAn-Gx5NGj-w07ClERvyT8syVt-E4o8NNNHOzrMldQJt21rd7qf1cz/s1600/marie-curie7.jpg" class="d-block w-100" alt="Marie Curie">
            <div class="carousel-caption d-none d-md-block">
              <h3>Marie Curie</h3>
              <p>Pionera en el campo de la radiactividad, primera y única persona con dos premios Nobel en ciencias.</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <img src="./img/Virginia.jpg" class="d-block w-100" alt="Virginia Woolf"> 
            <div class="carousel-caption d-none d-md-block">
              <h3>Virginia Woolf</h3>
              <p>Escritora británica</p> 
            </div>
          </div>
    
          <div class="carousel-item">
            <img src="./img/Frida-Kahlo.png" class="d-block w-100" alt="Frida Kahlo"> 
            <div class="carousel-caption d-none d-md-block">
              <h3>Frida Kahlo</h3>
              <p>Pintora mexicana</p>
            </div>
          </div>
    
        </div>
    
        <!-- Controles (flechas) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#theCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#theCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
    
      </div>
    </div>

    <!--Psicologas -->
    <section class="py-5 bg-light text-center">
        <div class="container"> 
          <h2 class="text-warning mb-2">Psicólogos</h2>  
          <p class="text-muted mb-5">Conoce a nuestras psicólogos profesionales</p>
   
      <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <!--rounded-circle de Bootstrap para hacer las imágenes redondas-->
            <img src="./images/psicologos.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 1">
            <!--mx-auto y d-block para centrar las imágenes--> 
            <div class="card-body">
              <h5 class="card-title">Dra. Ana López</h5> 
              <p class="card-text text-muted">ana.lopez@ejemplo.com</p>
            </div>  
          </div>
        </div>
        
        <div class="col-md-4 mb-4">
          <div class="card border-0"> 
            <img src="./images/rute-batista.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 2">
            <div class="card-body">  
              <h5 class="card-title">Dra. María Torres</h5>
              <p class="card-text text-muted">camila.torres@ejemplo.com</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/3e5f98/3e5f98def2038c442d97db0938ede03c_large.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 3">
            <div class="card-body">
              <h5 class="card-title">Dra. Carla Méndez</h5>
              <p class="card-text text-muted">camila.mendez@ejemplo.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  
</body>
</html>