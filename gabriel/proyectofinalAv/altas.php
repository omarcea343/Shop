<?php
$conexion = mysqli_connect('localhost','root','','productos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Altas</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">MobileZone</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php#Smartphone" tabindex="-1">Smartphone</a>
                            <a class="dropdown-item" href="index.php#Laptops">Laptops</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Altas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"  href="bajas.php">Bajas</a>
                    </li>
                </ul>
                <a class="btn btn-outline-primary" href="login.php">Sign up</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <form action="BDU.php" method="post" name="form">
            <fieldset>
                <table>
                    <tr>
                        <td><label for="Categoria">Categoria: </label></td>
                        <td><input type="text" name="categoria" require></td>
                    </tr>
                    <tr>
                        <td><label for="Id">ID: </label></td>
                        <td><input type="text" name="id" require></td>
                    </tr>
                    <tr>
                        <td><label for="Nombre">Nombre: </label></td>
                        <td><input type="text" name="nombre" require></td>
                    </tr>
                    <tr>
                        <td><label for="Descripcion">Descripcion: </label></td>
                        <td><input type="text" name="descripcion" require></td>
                    </tr>
                    <tr>
                        <td><label for="Imagen">Imagen: </label></td>
                        <td><input type="text" name="imagen" require></td>
                    </tr>
                    <tr>
                        <td><label for="Precio">Precio: </label></td>
                        <td><input type="text" name="precio" require></td>
                    </tr>
                    <tr>
                        <td><label for="Existencias">Existencias: </label></td>
                        <td><input type="text" name="existencias" require></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Insertar datos">
        </form>
        <script src="BDU.php"></script>
    </main>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>