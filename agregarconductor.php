<?php
include("conexion.php"); 

    
            $nombre = trim($_POST['nombre']);
            $edad = trim($_POST['edad']);
            $permiso = trim($_POST['permiso']);
            $numerocam = trim($_POST['numerocam']);
            $numerotel = trim($_POST['numerotel']);
            $ruta = trim($_POST['ruta']);
            
            $consulta = "INSERT INTO conductores(Nombre, Edad, Permiso_condu, Numero_cam, Numero_tel, Ruta) 
            VALUES ('$nombre','$edad','$permiso','$numerocam','$numerotel','$ruta')"; 
            $resultado = mysqli_query($conn,$consulta); 
    
            if($resultado>0){
                
                header("location:adminconductores.php");
       
            } else {

                header("location:adminconductores.php");
            }
    
            ?>
    
    