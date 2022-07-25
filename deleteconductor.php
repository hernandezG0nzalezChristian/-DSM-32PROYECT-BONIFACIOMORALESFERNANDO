<?php
include("conexion.php"); 

            $id= $_GET['id'];
            
           
            $consultaelim = "DELETE FROM conductores WHERE ID='$id' "; 
            $resultado = mysqli_query($conn,$consultaelim); 
    
            if($resultado){
                
                header("location:adminconductores.php");
       
            } else {

               
            }
    
        
    
    
?>