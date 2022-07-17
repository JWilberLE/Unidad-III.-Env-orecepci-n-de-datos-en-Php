<?php


$servidor="localhost";
$usuario="root";
$password="";
$base="bs_integradora";

// crear una variable para la conexión
$conn=mysqli_connect($servidor,$usuario,$password,$base);

// probar la conexión
if(!$conn)
{
    die("Error al realizar la conexión".mysqli_connect_error());
}

echo"Conexion realizada correctamente";  


?>