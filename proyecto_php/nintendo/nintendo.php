<!DOCTYPE html>
<html>
<title> Videojuegos </title>
    <head>
        <title> Videojuegos </title>
        <?php require '../database.php'; ?>
        <?php require 'insertar_nintendo.php'; ?>
        <?php require 'delete_nintendo.php'; ?>
    </head>

    <body>
    <h1>Nintendo</h1>
    <div>
        <a href="../" class=""> Volver a la home </a>
    </div>
    <br><br>
        <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Edad</th>
            <th>Plataforma</th>
        </tr>
        <?php
        $sql = "SELECT * FROM nintendo";
        $resultado = $conexion -> query($sql);

        if($resultado -> num_rows > 0 ){
            while ($row = $resultado -> fetch_assoc()) {
                $id = $row["id"];
                echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titulo"] . "</td>";
                    echo "<td>" . $row["edad"] . "</td>";
                    echo "<td>" . $row["plataforma"] . "</td>";
                    echo "<td>";
                    //Botón al fichero que se modifica
                        echo "<form method ='post' action='update_nintendo.php'>";
                            echo "<input type='hidden' name='formulario' value='modificar'>";
                            echo "<input type='hidden' name='id' value='$id'>";
                            echo "<input type='submit' value='Modificar'>";
                        echo "</form>";
                    echo "</td>";

                    //Botón delete
                    echo "<td>";
                        echo "<form method ='post' action=''>";
                            echo "<input type='hidden' name='formulario' value='borrar'>";
                            echo "<input type='hidden' name='id' value='$id'>";
                            echo "<input type='submit' value='Borrar'>";
                        echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
        }else {
            echo "<tr>";
            echo "<td>No se han encontrado juegos</td>";
            echo "</tr>";
        }
    ?>
        </table>
    </body>
</html>