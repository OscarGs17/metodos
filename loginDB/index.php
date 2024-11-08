<?php
require_once("./app/config/dependencias.php");

session_start();
/*if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS . "bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "inicio.css"; ?>">
    <link rel="stylesheet" href="<?= ICONS . "bootstrap-icons.css"; ?>">
    <title>Formulario de datos</title>
</head>

<body class="vh-100 bg-light">
    <?php
    if (isset($_REQUEST['view'])) {
        $vista = $_REQUEST['view'];
    } else {
        $vista = "inicio";
    }

    switch ($vista) {
        
            case "inicio":
                session_start();
if (isset($_SESSION['usuario'])) {
    header("location: ./inicio");
}
                require_once './views/home.php';
                break;
        
            case "registro":
                session_start();
if (isset($_SESSION['usuario'])) {
    header("location: ./registro");
}
                require_once './views/registro.php';
                break;
            case "formulario":
                session_start();
if (isset($_SESSION['usuario'])) {
    header("location: ./formulario");
}
                require_once './views/formulario.php';
                break;    
        
            case "error404":
                session_start();
if (isset($_SESSION['usuario'])) {
    header("location: ./eror404");
}
                require_once './views/error404.php';
                break;
        
            default:
                echo "error 404";
                break;
        }
        
    ?>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/registro_productos.js"></script>
    <script src="./public/js/cerrar_session.js"></script>
</body>

</html>