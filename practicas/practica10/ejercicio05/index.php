<?php
const NUM_COLUMNAS=5;
$pagina=1;
if(isset($_GET["p"])){
    if($_GET["p"]>1) {
        $pagina = $_GET["p"];
    }
}
$tam=500;
if(isset($_GET["tam"])){
    if($_GET["tam"]>5){
        $tam=$_GET["tam"];
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        table{
            width:100%;
            border-collapse: collapse;
        }
        th{
            background-color: black;
            color:white;
        }
        th,td{
           border:1px solid black;
            text-align: center;
        }
        td:nth-of-type(odd){
            background-color: #f1ffc8;
        }
        tr:nth-of-type(even) td:nth-of-type(odd){
            background-color: #cbc88f;
        }
        tr:nth-of-type(even) td:nth-of-type(even){
            background-color: #d6d6d6;
        }
    </style>
</head>
<body>
<p>
<form action="index.php">
    <input type="hidden" id="p" name="p" value="<?=$pagina?>">
    <input type="number" id="tam" name="tam" min="5" step="5" value="<?=$tam?>">
    <button>Enviar</button>
</form>
</p>
<h1>
    <?php
    if($pagina>1) {
        ?>
        <a href="index.php?p=<?= $pagina - 1 ?>">
            <i class="fa fa-less-than"></i>
        </a>
        <?php
    }
    ?>

    Unicode
    <a href="index.php?p=<?=$pagina+1?>">
    <i class="fa fa-greater-than"></i>
    </a>
</h1>
<table>
    <thead>
    <tr>
        <th>Código</th>
        <th>Valor</th>
        <th>Código</th>
        <th>Valor</th>
        <th>Código</th>
        <th>Valor</th>
        <th>Código</th>
        <th>Valor</th>
        <th>Código</th>
        <th>Valor</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $codigo=$pagina*$tam-($tam-1);
    $filas=$tam/5;
    for ($i=1;$i<=$filas;$i++){
        echo "<tr>";
        for($j=1;$j<=NUM_COLUMNAS;$j++){
            echo "<td>$codigo</td>";
            echo "<td>&#$codigo;</td>";
            $codigo++;
        }
        echo "</tr>";
    }

    ?>
    </tbody>
</table>
</body>
</html>