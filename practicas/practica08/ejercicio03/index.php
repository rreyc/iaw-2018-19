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
    <h1 class="display-3">LOGIN</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <form action="bienvenido.php">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <button class="btn btn-primary btn-block btn-lg">
                    CALCULAR
                </button>
            </form>
        </div>
    </div>
</main>
</body>
</html>