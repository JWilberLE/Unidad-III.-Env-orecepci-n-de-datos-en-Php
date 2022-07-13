<?php
$servidor="localhost";
$usuario="root";
$password="";

// crear una variable para la conexión
$conn=mysqli_connect($servidor,$usuario,$password);

// probar la conexión
if(!$conn)
{
    die("Error al realizar la conexión".mysqli_connect_error());
}

echo"Conexion realizada correctamente";  
?>