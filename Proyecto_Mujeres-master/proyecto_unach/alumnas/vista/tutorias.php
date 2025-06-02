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
    <link rel="stylesheet" href="../vista/STATIC/CSS/tutorias.css">
        
</head>
    <body>
        <header>
            <div class="container-nabvar">
                <nav class="navbar container">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="menu">
                        <div class="">
                            <a href="menu_alumnas.php" title="Inicio">  
                                <div class="circle-icon ini"><i class="fas fa-house"></i></div>  
                             </a>    
                        </div>
                    <!--<li><a href="menu_alumnas.html">Inicio</a></li>-->
                    <li><a href="tutorias.php">Tutorias STEAM</a></li> <!-- (li<a[href="#"])*6-->
                    <li><a href="#">Proximos</a></li>
                    </ul> 
                </nav>
            </div>
        </header>
        <main class="main-content">
            <section class="">
                <div class="titulo-tutorias">
                        <br><h2>Quiénes somos</h2>
                </div>                        
                <div class="contenedor">
                    <div class="quienes-somos">
                        <p class="info1"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae fuga officiis libero impedit optio enim eaque atque temporibus consectetur repudiandae explicabo reprehenderit iste nulla numquam deleniti, vel hic vero.
                        </p>
                    </div>
                    <img src="https://worldbank.scene7.com/is/image/worldbankprod/Womens-girls-empowerment-main?wid=780&hei=439&qlt=85,0&resMode=sharp" alt="Imagen STEM UNACH">
                </div>
                <div class="contenedor2">
                        <img src="https://www.infobae.com/new-resizer/VQfCUutXHFGUg30Lc8mOoP9JvYM=/arc-anglerfish-arc2-prod-infobae/public/HGCA3GX5A5C55KEVCDQ5QHM74M.jpg" alt="Imagen STEM UNACH">
                    <div class="quienes-somos">
                        <p class="info1"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae fuga officiis libero impedit optio enim eaque atque temporibus consectetur repudiandae explicabo reprehenderit iste nulla numquam deleniti, vel hic vero.
                        </p>
                    </div>
                </div>
            </section>
            <section class="tutorias-info">
                <div class="titulo-tutorias">
                    <br><h2>Tutorias STEAM</h2>
                </div>
            <div class="iconos">
                <img src="img/globo-terraqueo.png" class="icono" onclick="abrirModal('miModal')">
                <img src="img/strong-woman.png" class="icono" onclick="abrirModal('defensa')">
                <img src="img/amar.png" class="icono" onclick="abrirModal('sesionPsicologica')">
                <img src="img/amistad.png" class="icono" onclick="abrirModal('')">
                <img src="img/rompiendo-barreras.png" class="icono" onclick="abrirModal('rompiendo')">
            </div>

            <!-- Ventana emergente (modal) planetario -->
            <div id="miModal" class="modal">
                <div class="modal-contenido">
                    <span class="cerrar" onclick="cerrarModal('miModal')">&times;</span>
                    <h2>"Planetario"</h2>
                    <img src="img/planetarioo.jpg" alt=""><br>
                    <p><strong>Fecha: </strong>7 de mayo de 2025</p>
                    <p><strong>Horario: </strong>11:00 am</p>
                    <p><strong>Lugar: </strong>Planetario</p>
                    <p><strong>Recomendaciones: </strong>Llevar bote de agua y ropa comoda</p>
                </div>
            </div>
            <!-- Ventana emergente (modal) rompiendo barreras -->
            <div id="rompiendo" class="modal">
                <div class="modal-contenido">
                    <span class="cerrar" onclick="cerrarModal('miModal')">&times;</span>
                    <h2>"Rompiendo Barreras"</h2>
                    <img src="img/rompiendo.jpg" alt=""><br>
                    <p><strong>Fecha: </strong>28 de enero de 2025</p>
                    <p><strong>Horario: </strong>1:00 pm</p>
                    <p><strong>Lugar: </strong>En la Sala Audiovisual de Sistemas Computacionales y Posgrado</p>
                </div>
            </div>
            <!--Modal de Defensa Personal-->
            <div id="defensa" class="modal">
                <div class="modal-contenido">
                    <span class="cerrar" onclick="cerrarModal('miModal')">&times;</span>
                    <h2>"Autodefensa y Empoderamiento"</h2>
                    <img src="img/defensaa.jpg" alt=""><br>
                    <p><strong>Fecha: </strong>25 de febrero de 2025</p>
                    <p><strong>Horario: </strong>8:00 am</p>
                    <p><strong>Lugar: </strong>La Higuera en las instalaciones de la UNACH</p>
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
            </section>
        <section class="tarjetas-eventos">
                <div>
                    <label class="tarjeta-evento__label">
                        <input type="checkbox" class="tarjeta-evento__checkbox">
                    <div class="tarjeta-evento__contenedor">
                        <div class="tarjeta-evento__frente">
                        <img src="img/tutora_lupita.jpg" 
                            alt="Imagen del evento" 
                            class="tarjeta-evento__imagen">
                            <div class="trajeta-evento__conten-nombre">
                                <div 
                                    class="tarjeta-evento__nombre">Tutora Guadalupe
                                </div>
                            </div>
                        </div>
                        <div class="tarjeta-evento__reversaso">
                            <div class="tarjeta-evento__contenido">
                                <p class="tarjeta-evento__tutora"><strong>Dra. Guadalupe Velázquez Ruiz</strong></p>
                                <p class="tarjeta-evento__descripcion"><strong>Ingeniero industrial</strong><br> 
                                                                        
                                                                        Egresado del Instituto Tecnologico de Tuxtla Gutierrez<br>
                                                                        <strong>Doctorado en alta direccion y negocios</strong><br>
                                                                        Bajo titulacion de tesis<br>
                                                                        <strong>Docente de Asignatura</strong><br>            
                                                                        Facultad de Contaduría y Administración Campus I<br>
                                                                        Asesora en curso para personal administrativos de la UNACH<br>
                                                                        Mas de 10 años de experiencia academica
                            </p>
                            </div>
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
                            src="img/tutora_laura.jpg" 
                            alt="Imagen del evento" 
                            class="tarjeta-evento__imagen">
                            
                            <div class="trajeta-evento__conten-nombre">
                                        <div 
                                        class="tarjeta-evento__nombre">Tutora Laura
                                    </div>
                                    </div>
                        </div>
                        <div class="tarjeta-evento__reversaso">
                        <div class="tarjeta-evento__contenido">
                            <p class="tarjeta-evento__tutora"><strong>Dra. Laura de Jesús Velasco Estrada</strong></p>
                            <p class="tarjeta-evento__descripcion"><strong>Doctora en Estudios Regionales</strong><br> 
                                                                        
                                                                        Egresada de la Universidad Autonoma de Chiapas; Beca CONACYT<br>
                                                                        <strong>Maestria en Administracion</strong><br>
                                                                        Egresada de la Universidad Autonoma de Chiapas<br>
                                                                        <strong>Licenciada en Sistemas Computacionales</strong><br>            
                                                                       UAG<br>
                                                                        Docente de tiempo completo titular FCA C-I, UNACH<br>
                                                                        Miembro del Cuerpo Académico en Consolidación Estudio de las Organizaciones
                            </p>
                        </div>
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
                            src="https://images.ecestaticos.com/q3tNx7fOFDsgfOf5W3foNrg9yz4=/10x22:1500x1140/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fd1e%2F19b%2Fcca%2Fd1e19bcca7da8717d156f0d99f17ed43.jpg" 
                            alt="Imagen del evento" 
                            class="tarjeta-evento__imagen">
                            <div class="trajeta-evento__conten-nombre">
                            <div 
                                class="tarjeta-evento__nombre">Tutora María de los Ángeles
                                </div>
                            </div>
                        </div>
                        <div class="tarjeta-evento__reversaso">
                        <div class="tarjeta-evento__contenido">
                            <p class="tarjeta-evento__tutora"><strong>María de los Ángeles Polanco Enciso </strong></p>
                            <p class="tarjeta-evento__descripcion"><strong>Lic. en Informática</strong><br> 
                                                                        Egresada del Instituto Tecnológico de Puebla<br>
                                                                        <strong>Maestría en Educación</strong><br>
                                                                        Egresada de la Universidad Autónoma de Chiapas<br>
                                                                        <strong>Doctorado en Tecnología Educativa</strong><br>            
                                                                        Egresada por la UNISA<br>
                                                                        <strong>Experiencias</strong><br>
                                                                        Experiencia en docencia por mas de 15 años<br>
                                                                        Direccion de tesis en posgrado<br>                            </p>
                        </div>
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
                                        class="tarjeta-evento__nombre">Tutora Kathiane
                                    </div>
                                    </div>
                        </div>
                        <div class="tarjeta-evento__reversaso">
                        <div class="tarjeta-evento__contenido">
                            <p class="tarjeta-evento__tutora"><strong>Dra. Kathiane Toledo Valdéz</strong></p>
                            <p class="tarjeta-evento__descripcion"><strong>Doctora en Estudios Regionales</strong><br> 
                                                                        
                                                                        Egresada de la Universidad Autonoma de Chiapas; Beca CONACYT<br>
                                                                        <strong>Maestria en Administracion</strong><br>
                                                                        Egresada de la Universidad Autonoma de Chiapas<br>
                                                                        <strong>Licenciada en Sistemas Computacionales</strong><br>            
                                                                       UAG<br>
                                                                        Docente de tiempo completo titular FCA C-I, UNACH<br>
                                                                        Miembro del Cuerpo Académico en Consolidación Estudio de las Organizaciones
                            </p>
                        </div>
                        </div>
                    </div>
                    </label>
                </div>
            </section><br><br><br><br>
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