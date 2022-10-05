<?php
    require '../database.php';

    //Muestro los datos por pantalla para comprobar que los estoy recibiendo
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "modificar"){
        $id = $_POST["id"];

        $sql = "SELECT * FROM nintendo WHERE id = '$id'";

        $resultado = $conexion -> query($sql);

        if($resultado -> num_rows > 0){
            while ($row = $resultado -> fetch_assoc()){
                $titulo = $row["titulo"];
                $edad = $row["edad"];
                $plataforma = $row["plataforma"];
            }
        }
    }

    //Una vez mostrado los datos por pantalla, los actualizamos
    //ACTUALIZAMOS LOS DATOS
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "actualizar"){
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $edad = $_POST["edad"];
        $plataforma = $_POST["plataforma"];
        $sql = "UPDATE nintendo SET titulo = '$titulo',
                edad= '$edad',
                plataforma = '$plataforma'
                WHERE id = '$id'";

        //Ejectua la actualización y comprueba si se actualiza
        if ($conexion -> query($sql) == TRUE) {
            echo "<p>Libro modificado</p>";
        } else {
            echo "<p>Error al modificar el libro</p>";
        }
    }
?>

<h2>Modificar Juegos <?php if (isset($id)) echo $id; ?></h2>

<form action="" method="post">
    Titulo: <input type="text" name="titulo" value="<?php echo $titulo ?>">
    <br><br>
    Edad: <input type="text" name="edad" value="<?php echo $edad ?>">
    <br><br>

    Plataforma: <input type="text" name="plataforma" value="<?php echo $plataforma ?>">
    <br><br>

    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="hidden" name="formulario" value="actualizar">
    <input type="submit" value="Modificar">
</form>

<a href="nintendo.php">Volver a Nintendo</a>