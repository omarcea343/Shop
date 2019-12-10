<?php
    include 'global/config.php';
    include 'global/conexion.php';
    include 'global/carrito.php';
    include 'templates/cabecera.php';
?>

<br>
<h3>Lista del carrito</h3>
<?php if(!empty($_SESSION['carrito'])){?>

<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="10%" class="text-center">Total</th>
            <th width="10%" class="text-center">Existencias</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['carrito'] as $indice=>$producto){?>

        <tr>
            <td width="40%"><?php echo $producto['nom'] ?></td>
            <td width="15%" class="text-center">
               <form action="" method="POST">
                    <input type="hidden" name="exts" id="exts" value="<?php echo $producto['existencias'];?>">
                    <input type="number" name="cantidad" id="cantidad" value="<?php echo 1;?>" min="1" max="<?php echo $producto['existencias']?>">
                    <button class="btn btn-primary" type="submit" name="btnAction" value="Agregar">Enter</button>
                </form>

                
            </td>
            <td width="20%" class="text-center">$<?php echo $producto['precio'] ?></td>
            <td width="10%" class="text-center">$<?php echo number_format($producto['precio'] * $producto['cantidad'],2);   ?></td>
            <td width="10%" class="text-center"><?php echo $producto['existencias']?></td>
            <form action="" method="POST">
                <td width="5%">
                    <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);  ?>">
                    <button class="btn btn-danger" type="submit" name="btnAction" value="Eliminar">Eliminar</button>
            </form>
        </tr>
        <?php $total=$total + ($producto['precio'] * $producto['cantidad']);?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right">
                <h3>Total</h3>
            </td>
            <td align="right">
                <h3>$<?php echo number_format($total,2);?></h3>
            </td>
            <td></td>
        </tr>
        <tr>
            <form action="" method="POST">
                <td colspan="2">
                    <button class="btn btn-success" type="submit" name="btnAction" value="Finalizar">Finalizar</button>
                </td>
            </form>
        </tr>

    </tbody>
    <?php }else{ ?>

    <div class="alert alert-success">
        No hay productos en el carrito...
    </div>
    <?php } ?>
</table>
