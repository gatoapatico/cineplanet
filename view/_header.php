<?php if(isset($_SESSION['usuario'])){ $usuario = $_SESSION['usuario']; } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="description" content="Cineplanet">
        <meta name="author" content="Alvaro Fernandez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/cineplanet/assets/css/main.css">
        <style>
            body {
                background-color: #003162;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
                <div class="logo">
                    <img src="/cineplanet/assets/img/planeta.png" alt="planetas" class="logaso">
                </div>
                <nav class="menu">
                    <label>Bienvenido <?= ($usuario['tipo_id'] == 1) ? "Administrador" : "Cajero" ?>!</label>
                    <a href="/cineplanet/view/utils/cerrarSesion.php">Cerra Sesion</a>
                </nav>
            </div>
        </header>
        <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="#">SALAS</a>
                <a href="#">ALMACEN</a>
                <a href="#">CLIENTES</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>