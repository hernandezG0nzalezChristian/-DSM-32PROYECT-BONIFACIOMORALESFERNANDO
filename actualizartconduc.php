<?php
include("conexion.php"); 

if (strlen($_POST['id']) >= 1 && strlen($_POST['nombre']) >= 1 &&  strlen($_POST['edad']) >= 1 && strlen($_POST['permiso']) >= 1 
                              &&  strlen($_POST['numerocam']) >= 1 &&  strlen($_POST['numerotel']) >= 1 &&  strlen($_POST['ruta']) >= 1 ) {
    $id=$_POST['id'];
    $nombre = ($_POST['nombre']);
    $edad = ($_POST['edad']);
    $permiso = ($_POST['permiso']);
    $numerocam = ($_POST['numerocam']);
    $numerotel = ($_POST['numerotel']);
    $ruta = ($_POST['ruta']);

            $consulta = "UPDATE conductores SET Nombre='$nombre',Edad='$edad',Permiso_condu='$permiso',Numero_cam='$numerocam'
            ,Numero_tel='$numerotel',Ruta='$ruta' WHERE ID='$id'";
            $resultado = mysqli_query($conn,$consulta); 

            if($resultado){
                
                header("location:adminconductores.php");
       
            } else {

               
            }
        }
