<html>
<head>
<?php
    require "Funciones.php";
    autenticado();
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <b>HOLA ADMIN</b>
    <a href="index.php?estado=logout"><input type="button" value="Cerrar Sesión"/></a>
    <br/>
    <div>
        <?php
             include "crudHotel/verHoteles.php";
             
        ?>
    </div>
    <br>
   
    
    <a href="agregarHotel.php"><input type="button" value="Añadir un Hotel"/></a>
   
</body>
</html>
