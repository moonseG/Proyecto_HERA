<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario Anual en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px    rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            width: 14.28%;
        }
        th {
            background-color: #e2e2e2;
        }
        .hoy {
            background-color: #90ee90;
        }
        #notaForm {
            display: none;
            position: fixed;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border: 2px solid #333;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            z-index: 10;
            width: 300px;
        }
        #overlay {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 5;
        }
        #notaForm textarea {
            width: 100%;
            height: 100px;
        }
        #notaForm button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
  <div id="overlay"></div>  Fondo semitransparente que oscurece el fondo para que el formulario resalte.

  <div id="notaForm">
    <h3 id="fechaSeleccionada"></h3>
    <form onsubmit="guardarNota(event)">
        <label for="hora">Hora:</label>
        <input type="time" id="hora" required><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" required><br>

        <label for="notaTexto">Motivo:</label><br>
        <textarea id="notaTexto" placeholder="Motivo de la cita..." required></textarea>
        <br>
        <button type="submit">Guardar</button>
        <button type="button" onclick="cerrarFormulario()">Cancelar</button>
    </form>
</div>


<?php
$anio = date("Y"); // date("Y"): función que devuelve el año actual en 4 dígitos
$diaHoy = date("j"); // date("j"): devuelve el número del día actual del mes sin ceros
$mesHoy = date("n"); // date("n"): devuelve el número del mes actual, sin ceros.

$meses = array(
    1 => "Enero", "Febrero", "Marzo", "Abril",
    "Mayo", "Junio", "Julio", "Agosto",
    "Septiembre", "Octubre", "Noviembre", "Diciembre"
);

for ($mes = 1; $mes <= 12; $mes++) {
    // Título del mes
    echo "<h2>{$meses[$mes]} $anio</h2>";//usamos la posición del mes para obtener el nombre, como $meses[4] = Abril

    // Calcular día de la semana del 1 del mes
    $primerDiaMes = mktime(0, 0, 0, $mes, 1, $anio);
    $diaSemana = date("w", $primerDiaMes); // 0=Domingo, 6=Sábado
    $diasMes = date("t", $primerDiaMes); // Cantidad de días del mes

    // Iniciar tabla
    echo "<table>";
    echo "<tr>
            <th>Dom</th><th>Lun</th><th>Mar</th>
            <th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th>
          </tr><tr>";

    // Espacios vacíos antes del primer día
    for ($i = 0; $i < $diaSemana; $i++) {
        echo "<td></td>";
    }

    $contador = $diaSemana;

    for ($dia = 1; $dia <= $diasMes; $dia++) {
        $clase = ($dia == $diaHoy && $mes == $mesHoy) ? "hoy" : "";
        $fechaCompleta = "$anio-$mes-$dia";
        echo "<td class='$clase' onclick=\"abrirFormulario('$fechaCompleta')\">$dia</td>";
                $contador++;

        if ($contador % 7 == 0) {
            echo "</tr><tr>";
        }
    }

    // Espacios vacíos al final si el mes no termina en sábado
    while ($contador % 7 != 0) {
        echo "<td></td>";
        $contador++;
    }

    echo "</tr></table>";
}
?>
<script>
function abrirFormulario(fecha) {
    document.getElementById("fechaSeleccionada").textContent = "Nota para " + fecha;
    document.getElementById("notaTexto").value = "";
    document.getElementById("notaForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function cerrarFormulario() {
    document.getElementById("notaForm").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function guardarNota(event) {
    event.preventDefault();

    const fecha = document.getElementById("fechaSeleccionada").textContent.replace("Nota para ", "");
    const hora = document.getElementById("hora").value;
    const matricula = document.getElementById("matricula").value;
    const motivo = document.getElementById("notaTexto").value;

    // Envío a consola solo por ahora
    console.log("Cita agendada:");
    console.log("Fecha:", fecha);
    console.log("Hora:", hora);
    console.log("Matrícula:", matricula);
    console.log("Motivo:", motivo);

    // Aquí podrías hacer una petición fetch() o AJAX a PHP para guardar en BD

    alert("Cita agendada (revisar consola)");

    cerrarFormulario();
}
</script>

</body>
</html>
