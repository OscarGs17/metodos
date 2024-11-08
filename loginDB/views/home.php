<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: inicio");
    exit();
}
?>
<link rel="stylesheet" href="<?=CSS."main.css";?>">

<body class="d-flex justify-content-center align-items-center mt-5 p-3">

    <form action="./login.php" method="post" class="w-25 p-4 ">
        <div class="text-center mb-5 c-user">
            <i class="bi bi-person-circle text-white" style="font-size: 3rem;"></i>
        </div>
        <div class="input-group mt-3">
            <i class="bi bi-person-fill input-group-text fs-3"></i>
            <input type="email" id="email-id" class="form-control" placeholder="Ingrese su email" name="email" required>
        </div>
        <div class="input-group mt-3">
            <i class="bi bi-lock-fill input-group-text fs-3"></i>
            <input type="password" id="pass-id" class="form-control" placeholder="Ingrese su contraseña" name="pass"
                required>
        </div>
        <div class="mt-5 c-button">
            <button type="submit" id="btn-saludar" class="btn w-100 text-white fs-4">Ingresar</button>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <p>¿No tienes una cuenta?</p>
            <a href="./registro_vista.php" class="text-white mx-3">Crear ahora</a>
        </div>
    </form>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>