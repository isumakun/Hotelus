<html>
<?php
    require "Funciones.php";
    autenticado();
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <b>HOLA hotel</b>
    <a href="index.php?estado=logout"><input type="button" value="Cerrar Sesión"/></a>
    <br/>
    <div>
        <?php
             include "crudClientes/verClientes.php";
             
        ?>
    </div>
    <br>
   
</html>