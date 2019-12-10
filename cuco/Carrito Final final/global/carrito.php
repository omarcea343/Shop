<?php
session_start();

$mensaje="";
if(isset($_POST['btnAction'])){
    switch($_POST['btnAction']){
        case 'Agregar':
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $id=openssl_decrypt($_POST['id'],COD,KEY);
        }else{$mensaje="Lo sentimos es incorreto";break;}
        if(is_string(openssl_decrypt($_POST['nom'],COD,KEY))){
            $nom=openssl_decrypt($_POST['nom'],COD,KEY);
        }else{$mensaje="Lo sentimos es incorreto";break;}

        if(is_numeric($_POST['cantidad'])){
            $cantidad=$_POST['cantidad'];
        }else{$mensaje="Lo sentimos esincorreto cantidad de elementos";break;}

        if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
            $precio=openssl_decrypt($_POST['precio'],COD,KEY);
        }else{$mensaje="Lo sentimos es incorreto";break;}
        
        $exst=$_POST['exts'];
        $exst= $exst-$cantidad;
        if($exst == 0){
          echo "<script> alert('Lo sentimos producto agotado, no se ha agregado a su carrito'); </script>";
        break;
        }
        

        
    if(!isset($_SESSION['carrito'])){
     $producto=array(
           'id'=>$id,
           'nom'=>$nom,
           'cantidad'=>$cantidad,
           'precio'=>$precio,
           'existencias' => $exst
            
     );   
     $_SESSION['carrito'][0]=$producto;
     $tot = $exst - $cantidad;
     $mensaje="Producto agregado al carrito";
    }else{
        $numeroProductos=count($_SESSION['carrito']);
        $producto=array(
            'id'=>$id,
            'nom'=>$nom,
            'cantidad'=>$cantidad,
            'precio'=>$precio,
            'existencias' => $exst
      );
      $_SESSION['carrito'][$numeroProductos]=$producto;
      $mensaje="Producto agregado al carrito";

      include_once "conexion.php";

        $sentencia = $pdo->prepare("UPDATE `items` SET `existencias`='$exst' WHERE `id`='$id'");
        $resultado= $sentencia->execute();
    }
break;
    //$mensaje=print_r($_SESSION,true);
    $mensaje="Producto agregado al carrito";
            
            
    case "Eliminar":
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $id=openssl_decrypt($_POST['id'],COD,KEY);
            foreach($_SESSION['carrito'] as $indice => $producto){
                if($producto['id']== $id){
                    
                     include_once "conexion.php";
                    if($producto['id']==1)
                    $sentencia = $pdo->prepare("UPDATE `items` SET `existencias`='12' WHERE `id`='1'");
                    if($producto['id']==2)
                    $sentencia = $pdo->prepare("UPDATE `items` SET `existencias`='6' WHERE `id`='2'");
                    if($producto['id']==3)
                    $sentencia = $pdo->prepare("UPDATE `items` SET `existencias`='8' WHERE `id`='3'");
                    
                    $resultado= $sentencia->execute();
                    unset($_SESSION['carrito'][$indice]);
                    echo "<script> alert('Elemento borrado, regresandolo a stock...'); </script>";
                }
            }
        }
    break;

    case "Finalizar": 
        session_destroy();
        echo "<script> alert('Productos agregados a tu tarjeta, regresando a la tienda...');  
        window.location.href='index.php';</script>";    
break;   
    
}



}



?>
