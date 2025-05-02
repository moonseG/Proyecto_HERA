    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutorias</title>
        <link rel="stylesheet" href="tutorias.css">
        
    </head>
    <body>
        <header>
            <div class="container-hero"> <!--una clase-->
                <div class="container hero"> <!-- dos clases-->
                    <div class="customer-support">
                        <i class="fa-solid fa-headset"></i>
                        <div class="content-customer-support">
                            <span class="text">Soporte al cliente</span>
                            <span class="number">961-115-3174</span>
                        </div>
                    </div>
                    <div class="container-logo">
                        <i class="fa-solid fa-face-smile-beam"></i>
                        <h1 class="logo"><a href="tutorias.php">Tutorias</a></h1>
                    </div>
                    <div class="container-user">
                        <i class="fa-solid fa-user"></i>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="container-nabvar">
                <nav class="navbar container">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="menu">
                    <li><a href="menu_alumnas.php">Inicio</a></li> <!-- (li<a[href="#"])*6-->
                    <li><a href="tutorias.php">Tutorias STEM</a></li>
                    <li><a href="#">Proximos</a></li>
                    </ul> 
                    <form class="search-form">
                        <input type="search" placeholder="Buscar...">
                        <button class="btn-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </nav>
            </div>
        </header>

        <!-- <section class="banner"> 
            <div class="content-banner">
                <p>Proyecto HERA</p>
                <h2>Tutorias STEM</h2>
                <a href="#">Ver informacion</a>
            </div>
        </section>-->

        <main class="main-content">
            <section class="container container-feature">
                <div class="card-feature">
                    <i class="fa-solid fa-school"></i>
                    <div class="feature-content">
                        <span>Proyecto HERA</span>
                        <p>Universidad Autonoma de Chiapas</p>
                    </div>
                </div>
                <div class="card-feature">
                    <div class="feature-content">
                        <p>Siguenos en</p>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </div>
            </section>

            <section class="container top-products">
                <div class="container-options">
                    <span class="active">Anteriores</span>
                    <span>Proximos</span>
                </div>

                <div class="contenedor-card">
                    <a href="evento.php" class="card-evento">
                        <div class="card-title1">Tutoria I</div>
                        <div class="card-tittle">Clase de defensa personal</div><br>
                        <div class="card-subtitle">30 de abril de 2025</div><br>
                        <!-- <div class="card-subtitle">11 a.m. Auditorio de los constituyentes</div> -->
                    </a>

                    <a href="evento.php" class="card-evento">
                        <div class="card-title1">Tutoria II</div>
                        <div class="card-tittle">La importacia de las emociones</div><br>
                        <div class="card-subtitle">15 de mayo de 2025</div><br>
                        <!-- <div class="card-subtitle">9 a.m. Centro de Convenciones Manuel Velasco Suárez</div> -->
                    </a>

                    <a href="evento.php" class="card-evento">
                        <div class="card-title1">Tutoria III</div>
                        <div class="card-tittle">Ciberseguridad</div><br>
                        <div class="card-subtitle">20 de junio de 2025</div><br>
                        <!-- <div class="card-subtitle">12 a.m. Auditorio de la facultad</div> -->
                    </a>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <section class="tutorias1">
                <a href="evento.php" class="tutorias-evento1" title="Ir a Tutoria I">
                    <img src="https://www.pngkey.com/png/detail/436-4361094_imagenes-random-png.png" alt="Avatar" class="tutorias-img">
                    <h3 class="card-title1">Tutoria I</h3>
                    <p class="">Clase de defensa personal</p><br>
                    <p class="card-subtitle">30 de abril de 2025</p><br>
                </a>
                
                <a href="evento.php" class="tutorias-evento1" title="Ir a Tutoria II">
                    <img src="https://www.pngkey.com/png/detail/436-4361094_imagenes-random-png.png" alt="Avatar" class="tutorias-img">
                    <h3 class="card-title1">Tutoria II</h3>
                    <p class="">La importacia de las emociones</p><br>
                    <p class="card-subtitle">15 de mayo de 2025</p><br>
                </a>

                <a href="evento.php" class="tutorias-evento1" title="Ir a Tutoria III">
                    <img src="https://www.pngkey.com/png/detail/436-4361094_imagenes-random-png.png" alt="Avatar" class="tutorias-img">
                    <h3 class="card-title1">Tutoria III</h3>
                    <p class="">Ciberseguridad</p><br>
                    <p class="card-subtitle">20 de junio de 2025</p><br>
                </a>
                </section>



                <h1 class="heading-1">Tutoras STEM</h1>


                <div class="container-products">
                    <!--Tutora 1-->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="img/tutora1.jpeg" alt="Tutora1"/>
                            <!-- <span class="discount">-13%</span> -->
                            <div class="button-group">
                                <span>
                                <i class="fa-solid fa-circle-info"></i>                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                                <div class="starts">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Dra. Velazquez Ruiz Guadalupe</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-person-chalkboard"></i>
                            </span>
                            <p class="titulo">Titulo:<span><samp>LIDTS</samp>
                        </div>
                    </div>
                    <!--Tutora 2-->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="img/tutora1.jpeg" alt="Tutora1"/>
                            <div class="button-group">
                                <span>
                                    <i class="fa-solid fa-circle-info"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                                <div class="starts">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Dra. Velasco Estrada Laura De Jesus</h3>
                            <span class="add-cart">
                                 <i class="fa-solid fa-person-chalkboard"></i>
                            </span>
                            <p class="titulo">Titulo:<span>LCC</span></p>
                        </div>
                    </div>
                    <!-- Tutora 3 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="img/tutora1.jpeg" alt="Tutora1"/>
                            <div class="button-group">
                                <span>
                                    <i class="fa-solid fa-circle-info"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                                <div class="starts">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Tutoras</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-person-chalkboard"></i>
                            </span>
                            <p class="titulo">Titulo:<span>LIDTS</span></p> 
                        </div>
                    </div>
                    <!-- Tutora 4 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="img/tutora1.jpeg" alt="Tutora1"/>
                            <div class="button-group">
                                <span>
                                    <i class="fa-solid fa-circle-info"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                                <div class="starts">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Tutoras</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-person-chalkboard"></i>                            </span>
                            <p class="titulo">Titulo:<span>LIDTS</span></p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script 
            src="https://kit.fontawesome.com/3b6aa92dd8.js" crossorigin="anonymous">
        </script>

    </body>
    </html>
