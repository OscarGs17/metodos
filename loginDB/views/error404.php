<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ./login.php");
    exit();
}
?>
 <div class="error-container text-center">
        <div class="error-icon">
            <i class="bi bi-exclamation-triangle-fill" style="font-size: 3rem; color: red;"></i>
        </div>
        <h1 class="display-4">Error 404</h1>
        <p class="lead">La página que buscas no existe.</p>
        <a href="index.php" class="btn btn-primary mt-3">Volver al inicio</a>
    </div>