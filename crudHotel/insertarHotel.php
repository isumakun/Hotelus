<?php

require "../modelos/Hotel.php";

    if (isset($_POST['idHotel'])) {
        
        if (isset($_POST['nombre'])
                && isset($_POST['nit'])
                && isset($_POST['email'])
                && isset($_POST['direccion'])
                && isset($_POST['telefono'])
                && isset($_POST['paginaweb'])) {

            if (!empty($_POST['nombre'])
                    && !empty($_POST['nit'])
                    && !empty($_POST['email'])
                    && !empty($_POST['direccion'])
                    && !empty($_POST['telefono'])) {

                editar($_POST['idHotel'], $_POST["nombre"], $_POST["nit"], $_POST["email"], $_POST["direccion"], $_POST["telefono"], $_POST["paginaweb"]);
            } else {
                header("Location: ../agregarHotel.php?estado=sinvalores");
            }
        } else {
            echo 'error';
        }
        
    } else {
        if (isset($_POST['nombre'])
                && isset($_POST['nit'])
                && isset($_POST['email'])
                && isset($_POST['direccion'])
                && isset($_POST['telefono'])
                && isset($_POST['paginaweb'])) {

            if (!empty($_POST['nombre'])
                    && !empty($_POST['nit'])
                    && !empty($_POST['email'])
                    && !empty($_POST['direccion'])
                    && !empty($_POST['telefono'])) {

                agregarHotel($_POST["nombre"], $_POST["nit"], $_POST["email"], $_POST["direccion"], $_POST["telefono"], $_POST["paginaweb"]);
            } else {
                header("Location: ../agregarHotel.php?estado=sinvalores");
            }
        } else {
            echo 'error';
        }
    }
?>
