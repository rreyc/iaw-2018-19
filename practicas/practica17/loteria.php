<?php
$numeros=array();
for($i=1;$i<=49;$i++){
    $numeros[$i]=$i;
}
function escribeCombinacion($n){
    shuffle($n);
    echo "[";
    for($i=1;$i<=5;$i++){
        echo $n[$i].",";
    }
    echo $n[6]."]";
}

header("ContentType:application/json;charset=utf-8");
if(isset($_GET["n"]) && is_numeric($_GET["n"])){
    $n=(int)$_GET["n"];//quito decimales por si acaso
}
else{
    $n=1;
}
echo "{\"combinaciones\":[";
for($i=1;$i<$n;$i++){
    escribeCombinacion($numeros);
    echo ",";
}
escribeCombinacion($numeros); //la última combinación se escribe sin coma
echo "]}";

?>