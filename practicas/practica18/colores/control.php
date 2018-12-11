<?php
/*
 * esta página simplemente mira lo que le llega vía GET
 * y supone, sin validar, que es un color y lo guarda en
 * la cookie del array de colores elegidos
 */
$elegidos=array();
//grabamos el array con los colores elegidos
if(isset($_COOKIE["elegidos"])){
    $elegidos=unserialize($_COOKIE["elegidos"]);
}
if(isset($_GET["color"])){
    array_push($elegidos,$_GET["color"]);
    if(count($elegidos)>10){
        array_shift($elegidos);
    }
    echo count($elegidos);
    setcookie("elegidos",serialize($elegidos),time()+60*60*24*7);
}
header("Location:index.php");

?>