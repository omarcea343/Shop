<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO '".$_POST['categoria']."'(`id`, `nombre`, `descripcion`, `imagen`, `precio`, `existencias`) 
VALUES ('".$_POST['id']."', '".$_POST['nombre']."' , '".$_POST['descripcion']."', '".$_POST['imagen']."', '".$_POST['precio']."', '".$_POST['existencia']."')";

$conn->query($sql);

header("Location: altas.php");




?>