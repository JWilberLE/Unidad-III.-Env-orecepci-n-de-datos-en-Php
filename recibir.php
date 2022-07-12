<?php

    echo "<h1>Recibiendo El Formulario de Registro</h1>";

    $codigo=$_GET['Codigo_de_Calzado'];
    echo "El codigo del producto escrito es: ".$codigo. "<hr>";
    $descripcion=$_GET['Descripcion'];
    echo "La descripcion es: ".$descripcion. "<hr>";
    $talla=$_GET['Talla'];
    echo "La talla del producto es: ".$talla. "<hr>";
    $precio=$_GET['Precio'];
    echo "El precio del producto es: ".$precio; "<hr>";

?>

    echo <hr>
    <a href="registro.php"><button type="button">R E G R E S A R</button></a>