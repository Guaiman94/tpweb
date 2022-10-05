<form action ="" method="post">
    <label>Título</label>
    <input type="text" name="titulo"><br><br>
    <label>Edad</label>
    <input type="text" name="edad"><br><br>
    <label>Plataforma</label>
    <input type="text" name="plataforma"><br><br>
    <input type = "hidden" name="formulario" value="insertar">
    <input type="submit" value="Insertar juego">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["formulario"] == "insertar") {
        $titulo = $_POST["titulo"];
        $edad = $_POST["edad"];
        $plataforma = $_POST["plataforma"];

        $sql = "INSERT INTO nintendo (titulo, edad, plataforma)
            VALUES ('$titulo', '$edad', '$plataforma')";

        if ($conexion -> query($sql) == TRUE) {
            echo "<p>Juego insertada</p>";
        } else {
            echo "<p>Error al insertar</p>";
        }
    }
?>