<?php
include("conexion.php"); 

if (strlen($_POST['id']) >= 1 && strlen($_POST['nombreruta']) >= 1 &&  strlen($_POST['Basesalida']) >= 1 
&& strlen($_POST['Basellegada']) >= 1 &&  strlen($_POST['Paradasrut']) >= 1 &&  strlen($_POST['numerocam']) >= 1 ) {

    $id=$_POST['id'];
    $nomruta = ($_POST['nombreruta']);
    $basesal = ($_POST['Basesalida']);
    $baselleg = ($_POST['Basellegada']);
    $paradas = ($_POST['Paradasrut']);
    $numerocam = ($_POST['numerocam']);

            $consulta = "UPDATE rutas SET Nombre_rut='$nomruta', Base_salida='$basesal', Base_lleg='$baselleg',
            Paradas_rut='$paradas' , Numero_cam='$numerocam' WHERE ID='$id'";

            $resultado = mysqli_query($conn,$consulta); 

            if($resultado){
                
                header("location:adminrutas.php");
       
            } else {

               
            }
        }