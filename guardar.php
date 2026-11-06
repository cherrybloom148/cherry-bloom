<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre_completo"]);

    if ($nombre != "") {

        $sql = $conexion->prepare(
            "INSERT INTO integrantes (nombre_completo) VALUES (?)"
        );

        $sql->bind_param("s", $nombre);

        if ($sql->execute()) {
            echo "Integrante agregado correctamente.";
        } else {
            echo "Error al guardar el integrante.";
        }

        $sql->close();
    }
}

$conexion->close();
?>

<br></br>
<a href="index.php">Regresar</a>