let mesesNombres = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

let currentDate = new Date();
let currentDay = currentDate.getDate(); 
let monthNumber = currentDate.getMonth();
let currentAnio = currentDate.getFullYear();

let date = document.getElementById('date');
let mes = document.getElementById('mes');
let anio = document.getElementById('anio')

let backMes = document.getElementById('regresar_mes');
let nextMes = document.getElementById('avanzar_mes');

mes.textContent = mesesNombres[monthNumber];
anio.textContent = currentAnio.toString();

backMes.addEventListener('click', ultimoMes);
nextMes.addEventListener('click', siguienteMes);

escribirMes(monthNumber);

function escribirMes(mes){
    date.innerHTML = ""; // limpia contenedor antes de escribir los nuevos dias

    // Obtener cuántos días debe mostrar del mes anterior
    let start = startDay();
    let prevMonth = monthNumber - 1;
    let prevYear = currentAnio;

    if (prevMonth === -1) {
        prevMonth = 11;
        prevYear--;
    }

    let totalDiasMesAnterior = getTotalDias(prevMonth, prevYear);

    // Mostrar los días del mes anterior (en gris)
    for (let i = start; i > 0; i--) {
        date.innerHTML += `<div class="calendario_item prev">${totalDiasMesAnterior - (i - 1)}</div>`;
    }

    // Obtener la fecha de hoy para comparar
    const hoy = new Date();

    // Mostrar los días del mes actual
    for(let i = 1; i <= getTotalDias(mes, currentAnio); i++){
        let esHoy = (
            i === hoy.getDate() &&
            mes === hoy.getMonth() &&
            currentAnio === hoy.getFullYear()
        );

        if(esHoy){
            date.innerHTML += `<div class="calendario_item today">${i}</div>`;
        }else{
            date.innerHTML += `<div class="calendario_item">${i}</div>`;
        }
    }
}


/*function escribirMes(mes){
    date.innerHTML = ""; // limpia contenedor antes de escribir los nuevos dias

   for(let i = 1; i<=getTotalDias(mes); i++){
        
        if(i===currentDate){
            date.innerHTML += `<div class="calendario_item today">${i}</div>`;
        }else{
            date.innerHTML += `<div class="calendario_item">${i}</div>`;
        }
    }
}*/
function getTotalDias(mes, anio){
    if(mes === -1) mes = 11;

    if(mes === 0 || mes === 2 || mes === 4 || mes === 6 || mes === 7 || mes === 9 || mes === 11){
        return 31;
    }else if(mes === 3 || mes === 5 || mes === 8 || mes === 10){
        return 30;
    }else{
        return isleap(anio) ? 29:28;
    }
}
function isleap(anio){ /*año bisiesto */
    return((anio % 100 !== 0) && (anio % 4 === 0) || (anio % 400 === 0));
}
function startDay(){
    let start = new Date(currentAnio, monthNumber, 1);
    let day = start.getDay(); // 0 (Dom) - 6 (Sáb)
    return (day === 0) ? 6 : day - 1; // Ajusta para que Lunes sea 0
}


function ultimoMes(){
    if(monthNumber !== 0){
        monthNumber--;
    }else{
        monthNumber = 11;
        currentAnio--;
    }
    setNewDate();
}
function siguienteMes(){
    if(monthNumber!=11){
        monthNumber++;
    }else{
        monthNumber = 0;
        currentAnio ++;
    }
    setNewDate();

}
function setNewDate(){
    currentDate.setFullYear(currentAnio, monthNumber, 1);
    mes.textContent = mesesNombres[monthNumber];
    anio.textContent = currentAnio.toString();
    escribirMes(monthNumber);


}
