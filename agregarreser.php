<?php
include("conexion.php"); 



  
    
            $email = trim($_POST['email']);
            $ruta = trim($_POST['ruta']);
            $conductor = trim($_POST['conductor']);
            $fecha = trim($_POST['fecha']);
            $consulta = "INSERT INTO reservaciones (Email, Ruta, Conductor, Fecha) 
            VALUES ('$email','$ruta','$conductor','$fecha')"; 
            $resultado = mysqli_query($conn,$consulta); 
    
            if($resultado>0){
                
                header("location:adminreservacion.php");
       
            } else {

                header("location:adminreservacion.php");
            }
    
        
    
    
?>