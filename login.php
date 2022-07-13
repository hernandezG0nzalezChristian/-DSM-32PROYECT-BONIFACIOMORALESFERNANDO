<?php


include("db.php"); 

if (isset($_POST['register'])) {

if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $clave = trim($_POST['clave']);
        $consulta = "INSERT INTO usuarios(nombre, email, clave) 
        VALUES ('$nombre','$email','$clave')"; 
        $resultado = mysqli_query($conexion,$consulta); 

    }
}
?>
