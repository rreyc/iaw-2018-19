<?php
$display="none";//estado inicial del botón
if (isset($_COOKIE["tareas"])) {
    $tareas = unserialize($_COOKIE["tareas"]);
    $display="block";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../lib/css/bootstrap.min.css">
</head>
<body>
<h1 class="text-center display-3">Lista de tareas</h1>
<main class="container">
    <form action="anadir.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control col-12" placeholder="Escriba una nueva tarea" id="tarea"
                   name="tarea">
            <button id="boton" class="btn col-12">Añadir</button>
        </div>
    </form>
    <div class="row">
        <div class="col" id="resultado">
            <ul id="lista">
                <?php
                if (isset($tareas)) {// hay tareas, las escribimos
                    foreach ($tareas as $tarea) {
                        echo "<li>$tarea</li>";
                    }
                }
                ?>
            </ul>
           <button class='btn btn-danger' style="display:<?=$display?>" id='borrar'>Borrar Lista</button>
        </div>

    </div>
</main>
<script src="../../../../lib/js/jquery-3.2.1.min.js"></script>
<script src="accion.js"></script>
</body>
</html>