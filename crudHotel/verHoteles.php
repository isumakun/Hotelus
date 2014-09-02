<?php

$link = conectar();

$sql = "Select * from hotel";

$query = mysql_query($sql, $link);

        echo '<h1><center>GESTOR DE HOTELES</center></h1><br/>';
        echo '<h3>Usuarios Existentes</h3><br/><br/>';
 
        echo '<table style="text-align: center">';
        echo '<tr>
        <td>ID</td>
        <td>NOMBRE DEL HOTEL</td>
        <td>NIT</td>
        <td>EMAIL</td>
        <td>DIRECCION</td>
        <td>TELEFONO</td>
        <td>PAGINA WEB</td>
        </tr>';
        while ($line = mysql_fetch_array($query)) {
            echo '<tr>';
            echo "<td>" . $line['idHotel'] . "</td>";
            echo "<td>" . $line['nombre'] . "</td>";
            echo "<td>" . $line['nit'] . "</td>";
            echo "<td>" . $line['email'] . "</td>";
            echo "<td>" . $line['direccion'] . "</td>";
            echo "<td>" . $line['telefono'] . "</td>";
            echo "<td>" . $line['paginaweb'] . "</td>";
            echo "<td><a href='agregarHotel.php?idHotel=".$line["idHotel"]."'><input type='button' value='Editar'/></a></td>";
            echo "<td><a href='crudHotel/eliminarHotel.php?idHotel=".$line["idHotel"]."'>
                                <input type='button' value='Eliminar'/></a></td>";
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($link);
    
        
?>
