<?php
$error=0;
if(isset($_GET["e"])){
    $error=1;
}
if(isset($_GET["n"]) && is_numeric($_GET["n"]) && $_GET["n"]>0 && $_GET["n"]<20){
    $n=$_GET["n"];
}
else{
    header("Location:index.php?e");
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
    <h1>LECTURA DE NÚMEROS</h1>
    <div id="formulario">
        <form action="form3.php">
            <input type="hidden" name="n" id="n" value="<?=$n?>">
            <?php
            for($i=1;$i<=$n;$i++) {
                ?>
                <p><label for="n">Escriba el número <?=$i?></label></p>
                <p><input type="text" name="n<?=$i?>" id="n<?=$i?>"></p>
                <?php
            }
            ?>
            <button>Enviar</button>
        </form>
        <div id="error">
            <?php
            if($error){
                echo "<p>No todo lo que has enviado son números</p>";
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>