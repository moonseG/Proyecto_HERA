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
                            src="data:image/png;base64,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" 
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
                            src="data:image/png;base64,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" 
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
                            <p class="tarjeta-evento__descripcion"><strong></strong><br> 
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