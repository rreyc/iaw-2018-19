<?php
header("Content-Type: application:json; charset=utf-8");
include "errores.php";
$error=E_SIN_ERROR;
$mysqli = new mysqli("localhost", "geografia", "geografia", "geografia");
if ($mysqli->connect_errno == true) {
    $error = E_BASE_DATOS_GENERAL;
} else {
    $sql = "SELECT id_comunidad, nombre FROM comunidades";
    $res = $mysqli->query($sql);
    if ($mysqli->errno) {
        $error = E_BASE_DATOS_EJECUCION;
    } else {
        if ($res->num_rows == 0) {
            $error = E_COMUNIDAD_NO_VALIDA;
        } else {
            echo "{\"comunidades\":[";
            $fila = $res->fetch_assoc();
            while ($fila) {
                $id_comunidad = $fila["id_comunidad"];
                $nombre = $fila["nombre"];
                echo "{";
                echo "\"id_comunidad\":$id_comunidad,";
                echo "\"nombre\":\"$nombre\"";
                echo "}";
                $fila = $res->fetch_assoc();
                if ($fila) echo ",";
                else echo "";
            }
            echo "],";  //fin de la lista de provincias
            $res->close();
        }
    }
    $mysqli->close();
}


//control de errores
echo "\"error\":{";
echo "\"codigo\":$error,";
echo "\"mensaje\":\"" . MENSAJES_ERROR[$error] . "\"";
echo "}";
echo "}";

?>