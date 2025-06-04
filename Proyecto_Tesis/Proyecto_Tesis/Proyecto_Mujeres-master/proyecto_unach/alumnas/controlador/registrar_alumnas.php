<?php
//Hola monsi2 
    try{
        //Conexión a la Base de Datos
        require "../modelo/conexion.php";
        
        // Asignar los valores del front-end al back-end
        $correo = $_POST['correo'];
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $nombre = strtoupper($nombre);
        $apaterno = $_POST['apaterno'];
        $apaterno = strtoupper($apaterno);
        $amaterno = $_POST['amaterno'];
        $amaterno = strtoupper($amaterno);

        // Crear y preparar la consulta SQL
        $sql = "INSERT INTO alumnas (correo,matricula, nombre, apaterno, amaterno) VALUES (:correo, :matricula, :nombre, :apaterno, :amaterno)";
        $stmt = $pdo->prepare($sql);

        // Asociar parámetros y ejecutar
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apaterno', $apaterno);
        $stmt->bindParam(':amaterno', $amaterno);
        $stmt->execute();
        echo "¡Registro exitoso!";
        //Ejecutar la sentencia SQL para insertar los datos
    }catch (PDOException $e) {
        echo "Error en la inserción: " . $e->getMessage();
    }

    //Redirecciona la página al menú principal
    header('Location: ../vista/menu_alumnas.php');

?>
