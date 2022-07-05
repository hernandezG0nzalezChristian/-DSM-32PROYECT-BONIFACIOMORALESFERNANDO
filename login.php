<?php

include("db.php"); 

if (isset($_POST['register'])) {

if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $clave = trim($_POST['clave']);
        $fecha_reg = date("d/m/y"); 
        $consulta = "INSERT INTO usuarios(nombre, correo, clave, fecha_reg) 
        VALUES ('$nombre','$correo','$clave','$fecha_reg')"; 
        $resultado = mysqli_query($conex,$consulta); 

    }
}
?>
