<?php
include("conexion.php"); 

            $eliminar= $_GET['id'];
            
           
            $consultaelim = "DELETE FROM rutas WHERE ID='$eliminar' "; 
            $resultado = mysqli_query($conn,$consultaelim); 
    
            if($resultado){
                
                header("location:adminrutas.php");
       
            } else {

            }
    
        
    
    
            ?>