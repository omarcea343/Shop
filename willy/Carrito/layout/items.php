<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
    <div class="imagen"><img src="img/<?php echo $item['imagen']; ?>" alt=""></div>
    <div class="titulo"><?php echo $item['nombre']; ?></div>
    <div class="precio"><?php echo $item['precio']; ?></div>
    <div class="botones">
        <button>Agregar al carrito</button>
    </div>
</div>
