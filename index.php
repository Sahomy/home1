<?php

$enlace = mysqli_connect("localhost", "root", "", "informatica 2023");

$t= $_POST['Nombre'];
$u= $_POST['Apellido'];
$c= $_POST['Cédula'];
$a= $_POST['Correo Electronico'];
$w= $_POST['Contrasena'];

mysqli_query ($enlace, "INSERT INTO formulario VALUES('', '$t', '$u', '$c', '$a', '$w')");
echo("Envio con exito")

?>

