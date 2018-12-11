<?php
$elegidos=array();
if(isset($_COOKIE["elegidos"])){
    $elegidos=unserialize($_COOKIE["elegidos"]);
    print_r($elegidos);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selección de tonos</title>
    <?php
    function tonoAleatorio(){
        $rojo=mt_rand(0,255);
        $verde=mt_rand(0,255);
        $azul=mt_rand(0,255);
        return "rgb($rojo,$verde,$azul)";
    }
    ?>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div id="barraSeleccion">
    <div id="titulo">
        <h1>Colores Seleccionados</h1>
    </div>
    <div id="coloresElegidos">
        <?php
        foreach($elegidos as $color){
            echo "<div class='cuadrado' style='background-color:$color'></div>";
        }
        ?>
    </div>
</div>
<div id="principal">
    <?php
    for($i=1;$i<=24;$i++){
        echo "<div class='cuadrado' style='background-color:".
            tonoAleatorio().";'></div>";
    }

    ?>
</div>
<script src="../../../lib/js/jquery-3.2.1.min.js"></script>
<script>
    $(function(e){
        $(".cuadrado").on("click",function(e){
            location="control.php?color="+$(this).css("background-color");
        })
    });
</script>
</body>
</html>