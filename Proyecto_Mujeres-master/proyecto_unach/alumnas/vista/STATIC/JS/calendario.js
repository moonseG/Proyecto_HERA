// Seleccionamos el formulario y el contenedor donde se agregarán los datos

//------------Parte del formulario------------------
var formulario = document.querySelector('.contenedor-form form');

var motivoEvento = document.querySelector('.motivo-evento');
var horaEvento = document.querySelector('.hora-evento');

// Agregamos un evento 'submit' al formulario
if (formulario) {
    formulario.addEventListener('submit', function(event) {
        // Prevenimos el comportamiento por defecto del formulario de recargar la pagina al enviar un formulario
        event.preventDefault();

        // Obtenemos los valores de los campos del formulario y los asignamos a variables
        var hora = document.getElementById('hora').value;
        var matricula = document.getElementById('matricula').value;
        var motivo = document.getElementById('notaTexto').value;

        horaEvento.innerHTML = hora;
        motivoEvento.innerHTML = motivo; // sobreescribe el valor ingresado en el html

        formulario.reset(); // SE LIMPIA los campos del form
    });
}
//------------Fin parte del formulario------------------
//------------Parte de la fecha------------------

//------------Fin parte de la fecha------------------

// Variables para rastrear el mes y año actuales
let fechaAñoActual = new Date();
let mesActual = fechaAñoActual.getMonth();
let currentYear = fechaAñoActual.getFullYear();
let diaHoy = fechaAñoActual.getDate(); //se obtiene el dia actual
let fechaDiaHoy = document.querySelector('.contenedor__dia'); //se obtiene el elemento donde se mostrara el dia actual en la parte de eventosq
let fechaHoyActual = document.querySelector('.contenedor__fecha_hoy'); 

const botonIzquierda = document.querySelector('.calendario__boton:first-child');
const botonDerecha = document.querySelector('.calendario__boton:last-child');
const calendarioDias = document.querySelector('.calendario__dias-semana');
const fechaActual = document.getElementById('fechaActual');
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

// Centralizamos la lógica de obtención de fechas en una función reutilizable
function obtenerFechaActual() {
    const fecha = new Date();
    const diaNumerico = fecha.getDay(); //esto devuelve el dia, por ejemplo 1 para lunes, 2 para martes, etc. (eso creo) por ejemplo el 4 es jueves,
    const dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    const diaNombre = dias[diaNumerico];
    const fechaTexto = fecha.toLocaleDateString("es-MX");
    console.log(diaNumerico);

    return {
        diaNombre: diaNombre, // Nombre del día actual
        fechaTexto: fechaTexto, // Fecha en formato local que es mexico
        mes: fecha.getMonth(), //se obtiene el mes actual
        anio: fecha.getFullYear(), //se obtiene el año actual
        dia: fecha.getDate() //se obtiene el dia actual
    };
}

// Obtenemos la fecha actual una sola vez
const fechaActualInfo = obtenerFechaActual();

fechaDiaHoy.textContent = `${fechaActualInfo.diaNombre}`; // Día actual (nombre)
fechaHoyActual.textContent = `${fechaActualInfo.fechaTexto}`; // Fecha actual en formato local de Mexico

function actualizarCalendario() {
    calendarioDias.innerHTML = '';

    const primerDia = new Date(currentYear, mesActual, 1).getDay();
    const diasEnMes = new Date(currentYear, mesActual + 1, 0).getDate();
    const diasMesAnterior = new Date(currentYear, mesActual, 0).getDate();

    // Formato para mostrar el mes y año actual
    fechaActual.textContent = `${meses[mesActual]} ${currentYear}`;

    // Días del mes anterior
    for (let i = primerDia - 1; i >= 0; i--) {
        let dia = document.createElement('div');
        dia.className = 'calendario__dia calendario__dia--inicio';
        dia.textContent = diasMesAnterior - i;
        calendarioDias.appendChild(dia);
    }

    // Días del mes actual
    for (let i = 1; i <= diasEnMes; i++) {
        let dia = document.createElement('div');
        dia.className = 'calendario__dia';
        dia.textContent = i;
        calendarioDias.appendChild(dia);
    }

    // Días del mes siguiente
    const totalCuadros = 35;
    let faltan = totalCuadros - calendarioDias.children.length;
    for (let i = 1; i <= faltan; i++) {
        let dia = document.createElement('div');
        dia.className = 'calendario__dia calendario__dia--fin';
        dia.textContent = i;
        calendarioDias.appendChild(dia);
    }
}

function cambiarMes(incremento) {
    mesActual += incremento;
    if (mesActual < 0) {
        mesActual = 11;
        currentYear--;
    }
    if (mesActual > 11) {
        mesActual = 0;
        currentYear++;
    }
    actualizarCalendario();
}

botonIzquierda.addEventListener('click', function() {
    cambiarMes(-1); //pasa al   mes anterior al igual que el siguiente
});

botonDerecha.addEventListener('click', function() {
    cambiarMes(1);
});

actualizarCalendario();


//-----------------Evento de click en los días-----------------


// Seleccionamos el botón y el contenedor
var botonCancelar = document.getElementById('botonCancelar');
var botonGuardar = document.getElementById('botonGuardar');
var contenedorForm = document.querySelector('.contenedor-form');

var dia = document.querySelectorAll('.calendario__dia');

// Agregamos un evento 'click' al botón

// si un elemento de la clase calendario__dia es clicado, poner el display en flex de contenedorForm

//el event target significa que cuando se hace click en un elemento de la clase calendario__dia, se ejecuta la funcion, target es el elemento que se clicó
// y el classList contiene todas las clases de ese elemento, por lo que si contiene la clase calendario__dia, se ejecuta la funcion
calendarioDias.addEventListener('click', function(event) {
    if (event.target.classList.contains('calendario__dia')) {
        contenedorForm.style.display = 'flex';
    }
});


// Agregamos un evento 'click' al botón de cancelar contenida en contenedorForm paa que se cierre con display
if (botonCancelar) {
    botonCancelar.addEventListener('click', function() {
        contenedorForm.style.display = 'none';
    });
}
// si se hace click en guardar y es correcto, poner el contenedorForm en display none
if (botonGuardar) {
    botonGuardar.addEventListener('click', function() {
        contenedorForm.style.display = 'none';
    });
}

//-----------------Fin evento de click en los días-----------------