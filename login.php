<?php


include("db.php"); 

if (isset($_POST['register'])) {

if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $coreo = trim($_POST['email']);
        $clave = trim($_POST['clave']);
        $consulta = "INSERT INTO integradora_1(Nombre, Email, Contraseña) 
        VALUES ('$nombre','$coreo','$clave')"; 
        $resultado = mysqli_query($conn,$consulta); 

        if($resultado){
            ?>
            <h3 class="ok"> Te has inscrito correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> Error</h3>
            <?php
            # code...
        }

    }
}
?>
