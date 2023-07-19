<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>



<h1>PAGINA CLIENTE</h1>

<div class="mb-3 row">
    <label for="cod_cliente" class="col-sm-2 col-form-label">Codigo Cliente</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="cod_cliente" value="cli001">
    </div>
</div>
<div class="mb-3 row">
    <label for="fecha_inscripcion" class="col-sm-2 col-form-label">Fecha de Inscripción</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="fecha_inscripcion" value="27-01-95">
    </div>
</div>
<div class="mb-3 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="nombre" value="Álvaro">
    </div>
</div>
<div class="mb-3 row">
    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="apellido" value="Fernandez">
    </div>
</div>
<div class="mb-3 row">
    <label for="dni" class="col-sm-2 col-form-label">DNI</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="dni" value="48527293">
    </div>
</div>
<div class="mb-3 row">
    <label for="edad" class="col-sm-2 col-form-label">Edad</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="edad" value="27">
    </div>
</div>
<div class="mb-3 row">
    <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="telefono" value="943777528">
    </div>
</div>
<div class="mb-3 row">
    <label for="funciones" class="col-sm-2 col-form-label"># Funciones</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="funciones" value="17">
    </div>
</div>

<a href="" class="btn btn-primary">ACTUALIZAR DATOS</a>
<a href="index.php" class="btn btn-secondary">REGRESAR</a>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>