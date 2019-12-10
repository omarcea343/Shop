<?php
    include "db.php";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    
    <script type="text/javascript">
        function ajax(){
            
        var req = new XMLHttpRequest();
        
        req.onreadystatechange = function(){
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        
        req.open('GET', 'chat.php', true);
        req.send();
        }
        
        setInterval(function(){ajax();}, 1000);
    </script>
    <?php 
    $destino="";
    ?>
</head>


<body onload="ajax();">
  <button type="button" class="collapsible">CHAT</button>
<div class="content">
   <div id="contenedor" >
       <div id="caja-chat">
          <div id="chat"></div>
       </div>
       <form method="POST" action="index.php">
<!--       <input type="text" name="nombre" placeholder="Ingresa tu nombre">-->
      <?php 
           
           if($destino==null || $destino==""){
    echo"<input type='text' name='destino' placeholder='Ingresa el destino'>";
} else{
    echo"destino" . $destino;
} ?>
       <input type="text" name="nombre" placeholder="Ingresa tu usuario">
       <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea> 
       <input type="submit" name="enviar" value="Enviar">
       </form>
       <?php
        if(isset($_POST['enviar'])){
            $nombre1 = $_POST['nombre'];
            $mensaje = $_POST['mensaje'];
            $destino = $_POST['destino'];
            $nombre=$_SESSION['usuario']=$nombre1;
            
            $consulta = "INSERT INTO chat (nombre, mensaje, destino) VALUES ('$nombre', '$mensaje', '$destino')";
            $ejecutar = $conexion->query($consulta);
            
            if($ejecutar){
                echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
            }
        }
       ?>
       </div>
   </div>
   
   <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
    
</body>
</html>