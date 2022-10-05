<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "borrar"){

        $id = $_POST["id"];
        $sql = "DELETE FROM nintendo WHERE id = '$id'";

        if ($conexion -> query($sql) == TRUE) {
            echo "<p>Juego borrado</p>";
        } else {
            echo "<p>Error al borrar</p>";
        }
    }

?>