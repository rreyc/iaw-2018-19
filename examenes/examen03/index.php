<?php
$error=0;
if(isset($_GET["e"])){
    $error=1;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recogida de tamaño</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div id="telon"></div>
<main>
    <h1>LECTURA DE NÚMEROS</h1>
    <div id="formulario">
        <form action="form2.php">
            <p><label for="n">¿Cuántos números quieres escribir?</label></p>
            <p><input type="text" name="n" id="n"></p>
            <button>Enviar</button>
        </form>
        <div id="error">
            <?php
            if($error){
                echo "<p>Se deben enviar números positivos y además tiene que ser menor que 20</p>";
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>