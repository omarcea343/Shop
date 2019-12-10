<?php
session_start();

//$nombre=$_SESSION['usuario']=$nombre1;

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "appchat4";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

function formatearFecha($fecha){
    return date('g:i a', strtotime($fecha));
}
?>