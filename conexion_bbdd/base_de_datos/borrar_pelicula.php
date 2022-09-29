<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "borrar"){
        //Istrucción delete

        $id = $_POST["id"];
        $sql = "DELETE FROM peliculas WHERE id='$id'";

        if($conexion -> query($sql) == TRUE) {
            echo "Pelicula borrada";
        }else {
            echo "No se ha podido borrar la película";
        }
        
    }
?>