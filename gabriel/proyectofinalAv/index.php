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
    <title>BD</title>
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
                        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#Smartphone" tabindex="-1">Smartphone</a>
                            <a class="dropdown-item" href="#Laptos">Laptops</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="altas.php">Altas</a>
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
        <div class="row">
            <div class="col-10">
                <table>
                    <th title="Smarthphone">Smartphone</th>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Imagen</td>
                        <td>Precios</td>
                        <td>Existencias</td>
                        <td>shop</td>
                    </tr>
                    <?php
                        $sql = "SELECT * from smartphones";
                        $result = mysqli_query($conexion,$sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar ['id'] ?></td>
                        <td><?php echo $mostrar ['nombre']?></td>
                        <td><?php echo $mostrar ['descripcion'] ?></td>
                        <td><?php echo '<img src="./img/'.$mostrar ['imagen'].'" width="100" heigth="100" alt="">'  ?></td>
                        <td><?php echo $mostrar ['precio'] ?></td>
                        <td><?php echo $mostrar ['existencias'] ?></td>
                        <td><input type="button" class="btn-outline-primary" value="shop"></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <table>
                    <th title="Laptops">Laptops</th>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Imagen</td>
                        <td>Precios</td>
                        <td>Existencias</td>
                    </tr>
                    <?php
                        $sql = "SELECT * from laptops";
                        $result = mysqli_query($conexion,$sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                            
                        
                    ?>
                    <tr>
                        <td><?php echo $mostrar ['id'] ?></td>
                        <td><?php echo $mostrar ['nombre'] ?></td>
                        <td><?php echo $mostrar ['descripcion'] ?></td>
                        <td><?php echo '<img src="./img/'.$mostrar ['imagen'].'" width="100" heigth="100" alt="">'  ?></td>
                        <td><?php echo $mostrar ['precio'] ?></td>
                        <td><?php echo $mostrar ['existencias'] ?></td>
                        <td><input type="button" class="btn-outline-primary" value="shop"></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>     