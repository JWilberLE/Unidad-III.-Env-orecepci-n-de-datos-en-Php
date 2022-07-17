<?php

    echo "<h2>Recibiendo El Formulario de Registro</h2>";

    $codigo=$_GET['Codigo_de_Calzado'];
    echo "El codigo del producto escrito es: ".$codigo. "<hr>";
    $descripcion=$_GET['Descripcion'];
    echo "La descripcion es: ".$descripcion. "<hr>";
    $talla=$_GET['Talla'];
    echo "La talla del producto es: ".$talla. "<hr>";
    $precio=$_GET['Precio'];
    echo "El precio del producto es: ".$precio; "<hr>";
    $id_cliente="123456789";

    include ("conexion.php");

    $sql="INSERT INTO registrodcalzado VALUES ('$codigo','$descripcion','$talla','$precio',10101)";

    // conexion para evaluar si se registro correctamente el calzado
     
    if(mysqli_query($conn,$sql))
    {
        echo "Calzado registrado exitosamente";
    }
    else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }

?>

    <hr>
    <a href="registro.php"><button type="button">R E G R E S A R</button></a>