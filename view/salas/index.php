<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>
<link rel="stylesheet" href="/cineplanet/assets/css/styles.css">
<h1>Administración de Salas de Cine</h1>

<div class="contenedor-salas">
    <div style="margin-left: 100px;">
        <a href="sala.php?id=1" class="sala-section">
            <span class="numero">Sala 1</span>
        </a>
        <a href="sala.php?id=2" class="sala-section">
            <span class="numero">Sala 2</span>
        </a>
        <a href="sala.php?id=3" class="sala-section">
            <span class="numero">Sala 3</span>
        </a>
    </div>
</div>



<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>