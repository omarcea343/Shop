<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'global/carrito.php';
    include 'templates/cabecera.php';
?>
    <br><br>
    <div class="container">
        <br>
        <?php if($mensaje!=""){?> 
        <div class="alert alert-success">
            <?php echo($mensaje);?>
            <a href="mostarCarrito.php" class="badge badge-success">Ver carrito</a>
        </div>
        <?php } ?>
        <div class="row">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `items`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            ?>
            <?php foreach($listaProductos as $producto){?> 
                <div class="col-3">
                <div class="card">
                    <img class="card-img-top"
                     title="<?php echo $producto['nombre']?>" 
                     src="<?php echo $producto['imagen']?>" alt="<?php echo $producto['nombre']?>"
                     height="317px">
                    <div class="card-body">
                        <span><?php echo $producto['nombre']?></span>
                        <h5 class="card-title">$<?php echo $producto['precio']?></h5>
                        <span><?php echo $producto['descripcion']?></span>
                        
                        <form action="" method="POST">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY); ?>">
                        <input type="hidden" name="nom" id="nom" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                        <br>
                        Existencias :
                        <input type="hidden" name="exts" id="exts" value="<?php echo $producto['existencias'];?>">
                        <input type="number" name="cantidad" id="cantidad" value="<?php echo 1;?>" min="1" max="<?php echo $producto['existencias']?>">
                        <button class="btn btn-primary" type="submit" name="btnAction" value="Agregar">Agregar al carrito</button>

                        </form>
                        
                    </div>
                </div>
            </div>
          
                
                
            <?php } ?>
         
        </div>




    </div>
    

</body>
</html>