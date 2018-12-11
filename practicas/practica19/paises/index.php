<?php
session_start();
include "paises.php";

$aciertos=0;
$jugar=false;
$jugadas=0;
//si se ha enviado un pais, recogemos la accion
if(isset($_GET["pais"])){
    $paisUsuario=$_GET["pais"];
    //recogemos las variables de sesión
    if(isset($_SESSION["paisCorrecto"])){
        $paisCorrecto=$_SESSION["paisCorrecto"];
        $pais=$paisCorrecto;
    }
    if(isset($_SESSION["aciertos"]))
        $aciertos=$_SESSION["aciertos"];
    if(isset($_SESSION["jugadas"]))
        $jugadas=$_SESSION["jugadas"];
}
else {
    //elegimos un país aleatorio y le guardamos
    $pais = $listaPaises[array_rand($listaPaises)];
    $_SESSION["paisCorrecto"]=$pais;
    $jugar = true;
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Juego de los paises</h1>
<table>
    <tr>
        <td>
            <?php
            echo "<img src='imagenes/$pais.png' alt='Silueta del país'>";
            ?>
        </td>
        <td>
            <?php
            if($jugar==true){
                echo "<h2>Elija el país que representa esa silueta</h2>";
                echo "<form action='index.php'>";
                echo "<select name='pais'>";
                foreach($listaPaises as $i=>$nombrePais){
                    echo "<option value='$nombrePais'>$nombrePais</option>";
                }
                echo "</select>";
                echo "<button>Enviar</button>";
                echo "</form>";
            }
            else{
                $jugadas++;
                if($paisUsuario==$paisCorrecto){
                    $aciertos++;
                    echo "<h2>Efectivamente ¡Acertaste!</h2>";
                }
                else{
                    echo "<h2>Fallaste, era $paisCorrecto</h2>";
                }
                echo "<p>Aciertos $aciertos, fallos ".
                    ($jugadas-$aciertos)."</p>";
                echo "<p>Porcentaje de acierto ".
                    (($aciertos/$jugadas)*100)."%</p>";
                echo "<a href='index.php'>Volver a jugar</a>";
                $_SESSION["aciertos"]=$aciertos;
                $_SESSION["jugadas"]=$jugadas;
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>