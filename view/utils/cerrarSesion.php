<?php
    session_start();
    unset($_SESSION['usuario']);
    header("Location:/cineplanet/view/login.php");
?>