<?php

function conectar(){
    $link = mysql_connect("localhost", "root", "1234") or die("Error al conectar" . mysql_error());
    mysql_select_db("hotelus") or die("No se pudo conectar a NotiUCC");
    return $link;
}

function validarTipo(){
    //SuperAdministrador true
    //Administrador hotel false
    if($_SESSION['tipo'] == 'hotel'){
            $_SESSION['valido'] = false;
           }
            elseif ($_SESSION['tipo'] == 'admin') {
            $_SESSION['valido'] = true;
        }
        return $_SESSION['valido'];
}

function autenticado(){
session_start();
if(isset($_SESSION['estado'])){
    if ($_SESSION['estado'] == "Autenticado") {
    }  else {
        header('Location: index.php?estado=debeaut');
    }
}else {
        header('Location: index.php?estado=debeaut');
    }
}
?>
