<?php

    require 'database.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "modificar"){
        $id = $_POST["id"];

        //Traemos los datos y que se muestre por pantalla
        $sql = "SELECT * FROM peliculas WHERE id = '$id'";

        $resultado = $conexion -> query($sql);

        
        if($resultado -> num_rows > 0){
            while ($row = $resultado -> fetch_assoc()){
                $titulo = $row["titulo"];
                $duracion = $row["duracion"];
                $fecha_estreno = $row["fecha_estreno"];
            }
        }
        //-----------------------------------------------------------------------------//
     }

    if($_SERVER["REQUESTE_METHOD"] == "POST" && $_POST["formulario"] == "actualizar") {
        //UPDATE
    }
?>


<h2>Modificar Película <?php if (isset($id)) echo $id; ?></h2>

<form action="index.php" method="post">
     Titulo: <input type="text" name="titulo" value="<?php echo $titulo ?>">
     <br><br>
     Duracion: <input type="text" name="duracion" value="<?php echo $duracion ?>">
     <br><br>

     Fecha de estreno: <br>
     <input type="date" name="fecha_estreno" value="<?php echo $fecha_estreno ?>">
     <br><br>

     <input type="hidden" name="formulario" value="actualizar">
     <input type="submit" value="modificar">
</form>