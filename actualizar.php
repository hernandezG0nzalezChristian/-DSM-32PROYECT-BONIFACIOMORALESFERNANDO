<?php
include("conexion.php"); 

if (strlen($_POST['id']) >= 1 && strlen($_POST['nombre']) >= 1 &&  strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {
            $id=$_POST['id'];
            $nombres=$_POST['nombre'];
            $coreo = $_POST['email'];
            $clave = $_POST['clave'];

            $consulta = "UPDATE integradora_1 SET Nombre='$nombres' , Email='$coreo' , Contraseña='$clave'
             WHERE ID='$id'";
            $resultado = mysqli_query($conn,$consulta); 

            if($resultado){
                
                header("location:adminusuarios.php");
       
            } else {

               
            }
        }

           
    
        
    
    
?>