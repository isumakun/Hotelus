<?php

$link = conectar();

$sql = "Select * from hotel where idHotel = '{$_GET['idHotel']}'";

$query = mysql_query($sql, $link);
while ($line = mysql_fetch_array($query)) {
            echo '<input type="hidden" name="idHotel" value="'.$_GET['idHotel'].'">';
            echo '<b>Nombre del Hotel: </b>
                    <input type="text" name="nombre" id="nombre" value="'.$line['nombre'].'"/><br/>
                    <b>NIT: </b>
                    <input type="text" name="nit" id="nit" value="'.$line['nit'].'"/><br/>
                    <b>Dirección: </b>
                    <input type="text" name="direccion" id="direccion" value="'.$line['direccion'].'"/><br/>
                    <b>Telefono: </b>
                    <input type="text" name="telefono" id="telefono" value="'.$line['telefono'].'"/><br/>
                    <b>Email: </b>
                    <input type="text" name="email" id="email" value="'.$line['email'].'"/><br/>
                    <b>Pagina Web: </b>
                    <input type="text" name="paginaweb" id="paginaweb" value="'.$line['paginaweb'].'"/><br/>';
}
?>
