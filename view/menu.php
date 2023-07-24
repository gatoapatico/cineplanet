<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>
<link rel="stylesheet" href="/cineplanet/assets/css/menu.css">
<h1>Bienvenido al sistema de administración de Cineplanet</h1>

<div class="contenedor-menu">
    <div style="margin-left: 400px; margin-top: 50px;">
        <a href="salas/index.php" class="sala-section">
            <span class="numero">Control de Acceso a Salas de Cine</span>
        </a>
        <a href="almacen/index.php" class="sala-section">
            <span class="numero">Gestión de Abastecimiento de Insumos</span>
        </a>
        <a href="clientes/index.php" class="sala-section">
            <span class="numero">Control de Clientes Premium</span>
        </a>
    </div>
</div>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>