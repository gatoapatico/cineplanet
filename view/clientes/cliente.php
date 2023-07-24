<?php include '/xampp/htdocs/cineplanet/controller/clientePremiumController.php' ?>
<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<?php
    $cpController = new clientePremiumController();
    $cliente = $cpController->getClienteByDni($_GET['dni']);
?>

<form action="update.php" method="post">
    <h1>FICHA PREMIUM DE CLIENTE</h1>
    <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="nombre" value="<?= $cliente['nombre'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" name="apellido" class="form-control-plaintext" id="apellido" value="<?= $cliente['apellido'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dni" class="col-sm-2 col-form-label">DNI</label>
        <div class="col-sm-10">
            <input type="text" name="dni" readonly class="form-control-plaintext" id="dni" value="<?= $cliente['dni'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
        <div class="col-sm-10">
            <input type="text" name="edad" class="form-control-plaintext" id="edad" value="<?= $cliente['edad'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control-plaintext" id="telefono" value="<?= $cliente['telefono'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="fecha_inscripcion" class="col-sm-2 col-form-label">Fecha de Inscripción</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="fecha_inscripcion" value="<?= $cliente['fecha_inscripcion'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="funciones" class="col-sm-2 col-form-label"># Funciones</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="funciones" value="<?= $cliente['funciones'] ?>">
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Actualizar Datos">
    <a href="index.php" class="btn btn-secondary">REGRESAR</a>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Eliminar Registro Premium
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="color: black;">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencia de Eliminación</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ¿Estás seguro que deseas eliminar el registro Premium de este cliente? Esta opción no podrá deshacerse.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?dni=<?= $cliente['dni'] ?>" class="btn btn-danger">Eliminar Registro PREMIUM</a>
        </div>
        </div>
    </div>
    </div>
</form>


<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>