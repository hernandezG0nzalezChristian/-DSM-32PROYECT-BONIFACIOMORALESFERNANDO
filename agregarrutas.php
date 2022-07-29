<?php
include("conexion.php"); 



  
    
            $ruta = trim($_POST['nombreruta']);
            $basesal = trim($_POST['Basesalida']);
            $baselleg = trim($_POST['Basellegada']);
            $paradas = trim($_POST['Paradasrut']);
            $numcam = trim($_POST['numerocam']);

            $consulta = "INSERT INTO rutas (Nombre_rut, Base_salida, Base_lleg, Paradas_rut, Numero_cam) 
            VALUES ('$ruta','$basesal','$baselleg','$paradas','$numcam')"; 
            $resultado = mysqli_query($conn,$consulta); 
    
            if($resultado>0){
                
                header("location:adminrutas.php");
       
            } else {

                header("location:adminrutas.php");
            }
    
        
    
    
?>