<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Proyecto Hera</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../vista/STATIC/CSS/estilos.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <!-- CSS de Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- JS de Bootstrap 5  -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
  <header class="header"> 
    <div class="logo"> 
      <img src="../vista/img/LOGOUNACH-remo.png" alt="Logo" class="logo-section"> <!-- Si HTML está dentro de 'vista' --> 
      <div class="divider"></div>
      <h1 class="title">Proyecto Hera</h1> 
    </div>
    <div class="icon-buttons">
      <a href="#inicio" title="Inicio">   
        <div class="circle-icon ini"><i class="fa-solid fa-house-user"></i><span class="titulo-icono">Inicio</span></div>    
      </a>
      <a href="../vista/tutorias.php" title="tutorias">   
        <div class="circle-icon ini"><i class="fa-solid fa-people-group"></i></i><span class="titulo-icono">Tutorias</span></div>    
      </a>
      <a href="#" title="Blogs">      
        <div class="circle-icon temas"><i class="fas fa-book"></i>
        <ul class="submenu"> 
          <li><a href="#">Temas</a></li> 
          <li><a href="#">Información</a></li> 
        </ul>
        <span class="titulo-icono">Blogs</span></div>
      </a>
      <a href="psicologos.php" title="Usuario">   
        <div class="circle-icon user"><i class="fa-solid fa-user"></i><span class="titulo-icono">Usuario</span></div>
      </a>
      <div class="btn">
        <button class="font-btn">Chat</button> 
      </div> 
    </div>  
  </header>

    <div class="container-fluid p-0 m-0" id="inicio"> 
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
            <img src="../vista/img/Mujeres.jpg" class="d-block w-100" alt="Ilustración">   
            <div class="carousel-caption d-none d-md-block">
              <h3>Proyecto Hera</h3>
              <p>Apoyo a las mujeres</p>
            </div>
          </div> 
    
          <div class="carousel-item">
            <img src="../vista/img/CurieTres.jpg" class="d-block w-100" alt="Marie Curie">    
            <div class="carousel-caption d-none d-md-block">
              <h3>Marie Curie</h3>
              <p>Pionera en el campo de la radiactividad, primera y única persona con dos premios Nobel en ciencias.</p>
            </div>
          </div>
    
          <div class="carousel-item">
            <img src="../vista/img/D9AFE2.jpg" class="d-block w-100" alt="Virginia Woolf">  
            <div class="carousel-caption d-none d-md-block">
              <h3>Virginia Woolf</h3>
              <p>Escritora británica</p> 
            </div>
          </div>
    
          <div class="carousel-item">
            <img src="../vista/img/Frida.jpg" class="d-block w-100" alt="Frida Kahlo">  
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

<!--INFORMACION -->
<section class="Informacion"> 
  <div class="contenedor"> 
    <div class="bloque"> 
      <p class="p-info"> 
       Sitio web donde las mujeres en el área de sistemas computacionales y desarrollo de software puedan encontrar secciones con información  
       que les brinde esa ayuda en su desarrollo profesional y personal.
      </p>  
    </div>    
  </div>
  <div class="contenedor">
    <div class="bloque"> 
      <p class="p-info"> 
        La baja representación femenina en carreras STEM se ve agravada por factores psicológicos, sociales y académicos que impulsan la deserción. Actualmente, no existen suficientes espacios que ofrezcan apoyo emocional especializado ni centralicen la información de tutorías y eventos de acompañamiento.
        Proyecto HERA es una plataforma web que brinda apoyo psicológico y foros informativos para fortalecer el bienestar y la permanencia de mujeres en STEM.
      </p> 
    </div>    
  </div>
</section>

    <!--Seccion de Tutoras STEM-->
  <!-- <h2 class="text-warning tutorias__seccion">Tutoras STEM</h2>
  <section class="tarjetas-eventos">
  <div>
    <label class="tarjeta-evento__label">
        <input type="checkbox" class="tarjeta-evento__checkbox">
      <div class="tarjeta-evento__contenedor">
        <div class="tarjeta-evento__frente">
          <img 
            src="https://www.warriorsbarcelona.com/wp-content/uploads/2021/09/como-aprendo-defensa-personal-1000x600-1.jpg" 
            alt="Imagen del evento" 
            class="tarjeta-evento__imagen">
            <div class="trajeta-evento__conten-nombre">
              <div 
                  class="tarjeta-evento__nombre">Defensa personal
                </div>
            </div>
        </div>
        <div class="tarjeta-evento__reversaso">
          <div class="tarjeta-evento__contenido">
            <p class="tarjeta-evento__fecha"><strong>Fecha:</strong> 12 de mayo de 2025</p>
            <h2 class="tarjeta-evento__titulo">Defensa personalo</h2>
            <p class="tarjeta-evento__descripcion">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
            </p>
          </div>
          <button class="tarjeta-evento__boton">Ver más</button>
        </div>
      </div>
    </label>
  </div>

   COPIA DE LO MISMO DE ARRIBA, en caso de querer mas de estas  
  <div class="tarjeta-evento__caja">
    <label class="tarjeta-evento__label">
      <input type="checkbox" class="tarjeta-evento__checkbox">
      <div class="tarjeta-evento__contenedor">
        <div class="tarjeta-evento__frente">
          <img 
            src="https://media.timeout.com/images/105999684/750/562/image.jpg" 
            alt="Imagen del evento" 
            class="tarjeta-evento__imagen">
            
            <div class="trajeta-evento__conten-nombre">
                        <div 
                        class="tarjeta-evento__nombre">Planetario
                      </div>
                    </div>
        </div>
        <div class="tarjeta-evento__reversaso">
          <div class="tarjeta-evento__contenido">
            <p class="tarjeta-evento__fecha"><strong>Fecha:</strong> 12 de mayo de 2025</p>
            <h2 class="tarjeta-evento__titulo">Planetario</h2>
            <p class="tarjeta-evento__descripcion">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
            </p>
          </div>
          <button class="tarjeta-evento__boton">Ver más</button>
        </div>
      </div>
    </label>
  </div>

  <div class="tarjeta-evento__caja">
    <label class="tarjeta-evento__label">
      <input type="checkbox" class="tarjeta-evento__checkbox">
      <div class="tarjeta-evento__contenedor">
        <div class="tarjeta-evento__frente">
          <img 
            src="https://www.shutterstock.com/image-photo/happy-teenage-girl-on-consultation-600nw-2048866667.jpg" 
            alt="Imagen del evento" 
            class="tarjeta-evento__imagen">
            <div class="trajeta-evento__conten-nombre">
                        <div 
                        class="tarjeta-evento__nombre">Sesion psicologica
                      </div>
                    </div>
        </div>
        <div class="tarjeta-evento__reversaso">
          <div class="tarjeta-evento__contenido">
            <p class="tarjeta-evento__fecha"><strong>Fecha:</strong> 12 de mayo de 2025</p>
            <h2 class="tarjeta-evento__titulo">Psicologia grupal</h2>
            <p class="tarjeta-evento__descripcion">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
            </p>
          </div>
          <button class="tarjeta-evento__boton">Ver más</button>
        </div>
      </div>
    </label>
  </div>
  </section> -->


    <!--Psicologas -->
    <section class="text-center" id="psicologas">     
        <div class="container"> 
          <h2 class="titulo mb-2">Psicólogos</h2>    
          <p class="text-muted mb-4">Conoce a nuestros psicólogos profesionales</p>  
   
      <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <!--rounded-circle de Bootstrap para hacer las imágenes redondas-->
            <img src="../vista/img/rute-batista.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 1">
            <!--mx-auto y d-block para centrar las imágenes--> 
            <div class="card-body">
              <h5 class="card-title">Dra. Anabel López</h5>   
              <p class="card-text text-muted">ana.lopez@gmail.com</p>
            </div>  
          </div>
        </div>
        
        <div class="col-md-4 mb-4"> 
          <div class="card border-0"> 
            <img src="https://rachelwatsondelucchi.com/wp-content/uploads/2022/07/luis-mio.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 2">
            <div class="card-body">    
              <h5 class="card-title">Dr. Saul Pérez</h5>      
              <p class="card-text text-muted">Alj.Moguel@gmail.com</p> 
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4">      
          <div class="card border-0">
            <img src="https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/3e5f98/3e5f98def2038c442d97db0938ede03c_large.jpg" class="rounded-circle mx-auto d-block mt-3" width="200" height="200" alt="Psicóloga 3">
            <div class="card-body">
              <h5 class="card-title">Dra. Carla Méndez</h5>
              <p class="card-text text-muted">carla.mendez@gmail.com</p>  
            </div>
          </div>
        </div>
      </div>
    </div>

<!--FOOTER --> 
    </section>
    <footer class="footer">
    <div class="footer__contenedor">
    <div class="footer__nosotros footer--nosotros">
      <h3>Sobre nosotros</h3>
      <p>UNIVERSIDAD AUTONOMA DE CHIAPAS</p> 
      <p class="txt-just">Proyecto Hera es una iniciativa dedicada por estudiantes de la universidad UNACH que busca brindar apoyo y recursos a mujeres en diversas áreas, incluyendo salud mental y educación</p>	

 
    </div>
    <div class="footer__enlaces footer--enlaces">




    <div></div>
      <h3>Contenido</h3>
      <ul>
        <li><a href="#inicio">Inicio</a></li> 
        <li><a href="#psicologas">Psicólogos</a></li> 
        <li><a href="tutorias.php">Tutorías</a></li> 
        <li><a href="calendario.html">Citas</a></li>
      </ul>

    </div>
    <div class="footer__soporte footer--soporte">
      <h3>Soporte</h3>   
      <p><strong>Teléfono:</strong> 961-115-3174</p>
      <p><strong>Email: Usuario@unach.mx</strong>  
    </div>

    <div class="footer__redes footer--redes">
      <h3>Siguenos en nuestras redes sociales</h3> 
      <div class="footer__redes-contenedor">
        <a href=""> <img src="../vista/img/logotipoinstagram.png" alt=""></a>  
        <a href=""><img src="../vista/img/facebook.png" alt=""></a> 
        <a href=""><img src="../vista/img/twitter-icon.png" alt=""></a> 
      </div>

    </div>  

    </div>

  <div class="footer__bottom">
    <p>&copy; 2025. Todos los derechos reservados a UNACH</p>
  </div>
    </footer>

  
</body>
</html>