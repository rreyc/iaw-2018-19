<?php
if (isset($_GET["n"])) {
    $n = $_GET["n"];
} else {
    header("Location:index.php"); //si no llega n, nos vamos
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recogida de números</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div id="telon"></div>
<main>
    <h1>TUS NÚMEROS</h1>
    <div id="formulario">
        <?php
        for ($i = 1; $i <= $n; $i++) {
            //recorremos los números, por si acaso validamos que llegan los correctos
            if(isset($_GET["n$i"])){
                $num=$_GET["n$i"];
                if(is_numeric($num)){
                    echo "<p>$num</p>";
                }
                else{
                    header("Location:form2.php?e&n=$n");
                }
            }
        }
        ?>
        <a href="index.php">Volver a empezar</a>
    </div>
</main>
</body>
</html>