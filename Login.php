<?php
session_start();
require 'Funciones.php';
$link = conectar();
    if ((isset($_POST["username"]))
            && (isset($_POST["password"]))
        ){
           
           $usuarios = mysql_query("Select * from usuarios where username='{$_POST['username']}'", $link);
           $nusuarios = mysql_num_rows($usuarios);
        
    
    if ($nusuarios != 0) {
        $sql = "select tipo from usuarios where passwordd='{$_POST["password"]}' 
                                                && username='{$_POST["username"]}'";
        $tipouser = mysql_query($sql, $link);
        $ntipo = mysql_num_rows($tipouser);

        if ($ntipo != 0) {
            
            $_SESSION['tipo'] = mysql_result($tipouser, 0, 0);
            $_SESSION['estado'] = "Autenticado";
            
            if(validarTipo()){
                header("Location: index3.php");
            } else if(!validarTipo()){
                header("Location: index2.php");
            }
        }else{
            header("Location: index.php?estado=nousuario");
        }
    }else {
        header("Location: index.php?estado=nousuario");
    }
    
        }
mysql_close($link);        
?>
