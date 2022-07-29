<?php
include("conexion.php"); 

            $eliminar= $_GET['id'];
            
           
            $consultaelim = "DELETE FROM reservaciones WHERE ID='$eliminar' "; 
            $resultado = mysqli_query($conn,$consultaelim); 
    
            if($resultado){
                
                header("location:adminreservacion.php");
       
            } else {

               
            }
    
        
    
    
?>