<?php
require_once("./app/config/dependencias.php");

session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <title>Formulario de datos</title>
</head>
<body class="vh-100 bg-light">

    <!-- Contenedor de bienvenida -->
    <div class="container-fluid py-4 bg-primary text-white shadow-sm">
        <div class="row align-items-center justify-content-between">
            <div class="col text-center">
                <h1 class="display-6">Bienvenido, <strong><?= $_SESSION['usuario']['nombre']; ?></strong></h1>
            </div>
            <div class="col text-center">
                <p class="lead mb-0"><?= $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido']; ?></p>
                <p class="mb-0"><?= $_SESSION['usuario']['email']; ?></p>
            </div>
            <div class="col text-center">
                <button class="btn btn-danger" id="btn-cerrrar">
                    <i class="bi bi-box-arrow-left me-2"></i>
                    Cerrar sesión
                </button>
                <a href="./informacion_usuario.php" class="btn btn-info ms-2">Información</a>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container my-5">
        <div class="row">
            <!-- Formulario -->
            <div class="col-md-5 p-4 bg-white rounded shadow-sm">
                <h2 class="h4 mb-4 text-center">Registrar producto</h2>
                <form action="./index.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre_p">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="precio" placeholder="Precio del producto" name="precio_p">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="cantidad" placeholder="Cantidad del producto" name="cantidad_p">
                    </div>
                    <div class="d-grid">
                        <button type="button" id="btn-registrar-producto" class="btn btn-success text-white fs-5">Registrar producto</button>
                    </div>
                </form>
            </div>

            <!-- Tabla de productos -->
            <div class="col-md-7">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tabla_productos">
                            <!-- Aquí se cargarán los productos -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/registro_productos.js"></script>
    <script src="./public/js/cerrar_session.js"></script>
</body>
</html>
