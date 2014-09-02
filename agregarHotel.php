
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <b>HOLA ADMIN</b><br/>
    <form id="formHotel" method="POST" enctype="multipart/form-data" action="crudHotel/insertarHotel.php">
        <?php 
            if (isset($_GET['idHotel'])) {
                require 'Funciones.php';
                require 'crudHotel/buscarHotel.php';
            }else{
        ?>
        <b>Nombre del Hotel: </b>
        <input type="text" name="nombre" id="nombre"/><br/>
        <b>NIT: </b>
        <input type="text" name="nit" id="nit"/><br/>
        <b>Dirección: </b>
        <input type="text" name="direccion" id="direccion"/><br/>
        <b>Telefono: </b>
        <input type="text" name="telefono" id="telefono"/><br/>
        <b>Email: </b>
        <input type="text" name="email" id="email"/><br/>
        <b>Pagina Web: </b>
        <input type="text" name="paginaweb" id="paginaweb"/><br/>
        <?php 
             }
             ?>
        <input type="submit" value="Agregar"/>
    </form>
</body>