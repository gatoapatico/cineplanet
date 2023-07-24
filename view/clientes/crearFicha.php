<?php include '/xampp/htdocs/cineplanet/controller/clienteController.php' ?>
<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<?php
    $obj = new clienteController();
    $cliente = $obj->getCliente($_GET['id']);
?>

<h1>REGISTRO DE CLIENTE PREMIUM</h1>
<form action="insertarCliente.php" method="post">
    <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" required readonly class="form-control-plaintext" id="nombre" value="<?= $cliente['nombre'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" required class="form-control-plaintext" id="apellido" value="">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dni" class="col-sm-2 col-form-label">DNI</label>
        <div class="col-sm-10">
            <input type="text" name="dni" required readonly class="form-control-plaintext" id="dni" value="<?= $cliente['dni'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
        <div class="col-sm-10">
            <input type="text" pattern="[0-9]+" name="edad" required class="form-control-plaintext" id="edad" value="">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" pattern="[0-9]+" name="telefono" required class="form-control-plaintext" id="telefono" value="">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="funciones" class="col-sm-2 col-form-label"># Funciones</label>
        <div class="col-sm-10">
            <input type="text" name="funciones" required readonly class="form-control-plaintext" id="funciones" value="<?= $cliente['funciones'] ?>">
        </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Crear Ficha">
    <a href="index.php" class="btn btn-secondary">REGRESAR</a>
</form>


<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>