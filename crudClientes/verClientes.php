<?php

$link = conectar();

$sql = "SELECT
    `reserva`.*
    , `cliente`.`nombres`
    , `cliente`.`apellido1`
    , `cliente`.`apellido2`
    , `cliente`.`cedula`
FROM
    `hotelus`.`reserva`
    INNER JOIN `hotelus`.`cliente` 
        ON (`reserva`.`cliente_idCliente` = `cliente`.`idCliente`);";

$query = mysql_query($sql, $link);

        echo '<h1><center>GESTOR DE CLIENTES</center></h1><br/>';
        echo '<h3>RESERVACIONES Existentes</h3><br/><br/>';
 
        echo '<table style="text-align: center">';
        echo '<tr>
        <td>ID</td>
        <td>CLIENTE</td>
        <td>CEDULA</td>
        <td>FECHA RESERVA</td>
        <td>FECHA ENTRADA</td>
        <td>FECHA SALIDA</td>
        <td>ESTADO</td>
        </tr>';
        while ($line = mysql_fetch_array($query)) {
            echo '<tr>';
            echo "<td>" . $line['idreserva'] . "</td>";
            echo "<td>" . $line['nombres'] . 
                            " " . $line["apellido1"] . 
                            " " . $line["apellido2"]."</td>";
            echo "<td>" . $line['cedula'] . "</td>";
            echo "<td>" . $line['fechaReserva'] . "</td>";
            echo "<td>" . $line['entrada'] . "</td>";
            echo "<td>" . $line['salida'] . "</td>";
            echo "<td>" . $line['estado'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($link);
    
        
?>