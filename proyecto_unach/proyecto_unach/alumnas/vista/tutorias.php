    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutorias</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="tutorias.css">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        
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
                        <i class="fa-solid fa-user" onclick="abrirModal('cerrarSesion')"></i>
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
        <main class="main-content">
            <section class="tutorias-info">
                <div class="titulo-tutorias">
                    <h2>Tutorias STEM</h2>
                </div>
            <div class="iconos">
                <img src="img/globo-terraqueo.png" class="icono" onclick="abrirModal('miModal')">
                <img src="img/strong-woman.png" class="icono" onclick="abrirModal('sesionPsicologica')">
                <img src="img/amar.png" class="icono" onclick="abrirModal('sesionPsicologica')">
                <img src="img/amistad.png" class="icono" onclick="abrirModal('miModal')">
                <img src="img/rompiendo-barreras.png" class="icono" onclick="abrirModal('miModal')">
            </div>

            <!-- Ventana emergente (modal) planetario -->
            <div id="miModal" class="modal">
                <div class="modal-contenido">
                    <span class="cerrar" onclick="cerrarModal('miModal')">&times;</span>
                    <h2>"Planetario"</h2>
                    <img src="img/planetarioSTEM.jpg" alt=""><br>
                    <p><strong>Fecha: </strong>7 de mayo de 2025</p>
                    <p><strong>Horario: </strong>11:00 am</p>
                    <p><strong>Lugar: </strong>Planetario</p>
                    <p><strong>Recomendaciones: </strong>Llevar bote de agua y ropa comoda</p>
                </div>
            </div>
            <!-- Ventana emergente (modal)  -->
            <div id="sesionPsicologica" class="modal">
                <div class="modal-contenido">
                    <span class="cerrar" onclick="cerrarModal('miModal')">&times;</span>
                    <h2>"Re-conociéndome por salud mental"</h2>
                    <img src="img/sesionPsicologica.jpg" alt=""><br>
                    <p><strong>Fecha: </strong>26 de marzo de 2025</p>
                    <p><strong>Horario: </strong>09:00 am</p>
                    <p><strong>Lugar: </strong>Sala de Proyecciones de la Biblioteca Central Universitaria</p>
                    <p><strong>Recomendaciones: </strong>Llevar colores, tapete y ropa comoda</p>
                </div>
            </div>

            <!--Ventana de cerrar sesion-->
            <div id="cerrarSesion" class="modal">
            <div class="modal-contenido">
                <span class="cerrar" onclick="cerrarModal('cerrarSesion')">&times;</span>
                <p>¿Deseas cerrar sesion?</p>
                <button class="boton-cerrar-sesion">Hasta la proxima!</button>
            </div>
            </div>

            </section>

            <section class="tutorias">
                <!--Seccion de Tutoras STEM-->
                <div class="titulo-tutorias">
                    <h2>Tutoras STEM</h2>
                </div>
                <!-- <h2 class="text-warning tutorias__seccion">Tutoras STEM</h2>  -->
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

                <!-- COPIA DE LO MISMO DE ARRIBA, en caso de querer mas de estas  -->
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
            </section>
        </main>

        <script 
            src="https://kit.fontawesome.com/3b6aa92dd8.js" crossorigin="anonymous">
        </script>
        <script>
            //funcion que muestra el modal
            function abrirModal() {
                document.getElementById("miModal").style.display = "block";
            }
            //funcion que cierra el modal
            function cerrarModal(){
                document.getElementById("miModal").style.display = "none";
            }
            //Se cierra el modal al hacer click fuera de el
            window.onclick = function(event) {
                const modal = document.getElementById("miModal");
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
        <script>
            // Abre cualquier modal, recibe el id como parámetro
            function abrirModal(idModal) {
                document.getElementById(idModal).style.display = "block";
            }

            // Cierra cualquier modal, también recibe el id como parámetro
            function cerrarModal(idModal) {
                document.getElementById(idModal).style.display = "none";
            }

            // Cierra el modal si se hace clic fuera del contenido
            window.onclick = function(event) {
                const modales = document.querySelectorAll('.modal');
                modales.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
                });
            }
        </script>
    </body>
    </html>
