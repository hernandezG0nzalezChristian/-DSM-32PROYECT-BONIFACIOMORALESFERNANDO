<?php
include("conexion.php"); 

            $eliminar= $_GET['id'];
            
           
            $consultaelim = "DELETE FROM integradora_1 WHERE Nombre='$eliminar' "; 
            $resultado = mysqli_query($conn,$consultaelim); 
    
            if($resultado){
                
                header("location:adminusuarios.php");
       
            } else {

               
            }
    
        
    
    
?>