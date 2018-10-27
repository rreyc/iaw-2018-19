<?php
if(isset($_GET["usuario"]) && isset($_GET["pass"])){
    $usuario=$_GET["usuario"];
    $pass=$_GET["pass"];}
else{
    header("Location:index.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Comprobación numérica</title>
    <link rel="stylesheet" href="../../../lib/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron">
    <?php
    if( ($usuario=="pedro" && $pass=="12345")   ||
        ($usuario=="ana" && $pass=="54321")     ||
        ($usuario=="marta" && $pass=="55555")     ||
        ($usuario=="luis" && $pass=="11111")
    ){
        echo "<h1 class='display-3'>¡¡BIENVENIDO $usuario!!</h1>";
    }
    else{
        echo "<h1 class='display-3 text-danger'>¡¡USUARIO Y CONTRASEÑA INCORRECTA!!</h1>";
    }
    ?>
</header>
</body>
</html>