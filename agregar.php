<?php
include("conexion.php"); 



  
    
            $nombre = trim($_POST['nombre']);
            $coreo = trim($_POST['email']);
            $clave = trim($_POST['clave']);
            $consulta = "INSERT INTO integradora_1(Nombre, Email, Contraseña) 
            VALUES ('$nombre','$coreo','$clave')"; 
            $resultado = mysqli_query($conn,$consulta); 
    
            if($resultado>0){
                
                header("location:adminusuarios.php");
       
            } else {

                header("location:adminusuarios.php");
            }
    
        
    
    
?>