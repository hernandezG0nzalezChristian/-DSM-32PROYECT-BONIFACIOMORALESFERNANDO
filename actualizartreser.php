<?php
include("conexion.php"); 

if (strlen($_POST['id']) >= 1 && strlen($_POST['email']) >= 1 &&  strlen($_POST['ruta']) >= 1 
&& strlen($_POST['condcutor']) >= 1 &&  strlen($_POST['fecha']) >= 1 ) {

    $id=$_POST['id'];
    $email = ($_POST['email']);
    $ruta = ($_POST['ruta']);
    $conductor = ($_POST['condcutor']);
    $fecha = ($_POST['fecha']);

            $consulta = "UPDATE reservaciones SET Email='$email', Ruta='$ruta' , Conductor='$conductor', Fecha='$fecha'
             WHERE ID='$id'";

            $resultado = mysqli_query($conn,$consulta); 

            if($resultado){
                
                header("location:adminreservacion.php");
       
            } else {

               
            }
        }