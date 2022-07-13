<?php
$conexion=mysqli_connect('127.0.0.1', 'root', '123456789', 'registro_bd') or die (mysql_error($mysqli));
return $conexion; 

?>