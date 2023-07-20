<?php if(isset($_SESSION['usuario'])){ $usuario = $_SESSION['usuario']; } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cineplanet</title>
        <meta name="description" content="Cineplanet">
        <meta name="author" content="Alvaro Fernandez">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                <a href="/cineplanet/view/salas/index.php">SALAS</a>
                <a href="/cineplanet/view/almacen/index.php">ALMACEN</a>
                <a href="/cineplanet/view/clientes/index.php">CLIENTES</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
    <div style="margin-top: 150px; margin-left: 100px; margin-right: 100px;">