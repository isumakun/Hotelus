<?php

require "../Funciones.php";

function agregarHotel($nombre, $nit, $email, $direccion, $telefono, $paginaweb) {
    
    $link = conectar();
    $sql = "INSERT INTO `hotelus`.`hotel`
            (`nombre`,
             `nit`,
             `email`,
             `direccion`,
             `telefono`,
             `paginaweb`)
              VALUES ('$nombre',
                    '$nit',
                    '$email',
                    '$direccion',
                    '$telefono',
                    '$paginaweb')";
    
    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: ../index3.php?estado=guardado");
    } else {
        header("Location: ../index3.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
    mysql_close($link);
}

function eliminar($idHotel){
    $link = conectar();
    $sql = "DELETE
            FROM hotel
            WHERE idHotel = $idHotel";
    
    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: ../index3.php");
    } else {
        header("Location: ../index3.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
    mysql_close($link);
}

function editar($idHotel, $nombre, $nit, $email, $direccion, $telefono, $paginaweb){
    $link = conectar();
    $sql = "UPDATE hotel
    SET `nombre` = '$nombre',
    `nit` = '$nit',
    `email` = '$email',
    `direccion` = '$direccion',
    `telefono` = '$telefono',
    `paginaweb` = '$paginaweb'
        WHERE idHotel = $idHotel";
    
    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: ../index3.php?estado=guardado");
    } else {
       // header("Location: ../index3.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
    mysql_close($link);
}
?>
