<!doctype html>
<html lang=”es”>
<head>
    <?php
    //cálculo aleatorio dela posición left y topo
    $left=mt_rand(0,100);
    $top=mt_rand(0,100);
    ?>
    <meta charset=”UTF-8”>
    <title>Color aleatorio</title>
    <style>
        div{
            position:fixed;
            width:50px;
            height:50px;
            left:<?=$left?>%;
            top:<?=$top?>%;
            background-color: red;
        }
    </style>
</head>
<body>
<div></div>
</body>
</html>