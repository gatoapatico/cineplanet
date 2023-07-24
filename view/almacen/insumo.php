<?php include '/xampp/htdocs/cineplanet/controller/insumoController.php' ?>
<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<?php
    $obj = new insumoController();
    $insumo = $obj->getInsumo($_GET['id']);
?>

<h1>PAGINA INSUMO</h1>
<a href="index.php" class="btn btn-secondary">Regresar</a>

<div class="centered-container">
    <img src="/cineplanet/assets/img/insumos/<?= $insumo['imagen'] ?>" alt="Maíz para Palomitas" class="imagen-img">
    <div class="text-container">
        <h2><?= $insumo['nombre'] ?></h2>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label" style="width: 180px;">Id Insumo</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="id" value="<?= $insumo['id'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label" style="width: 180px;">Nombre</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="nombre" value="<?= $insumo['nombre'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precio_compra" class="col-sm-2 col-form-label" style="width: 180px;">Precio de Compra</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="precio_compra" value="S/ <?= $insumo['precio_compra'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fecha_compra" class="col-sm-2 col-form-label" style="width: 180px;">Fecha de Compra</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="fecha_compra" value="<?= $insumo['fecha_compra'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fecha_caducidad" class="col-sm-2 col-form-label" style="width: 180px;">Fecha de Caducidad</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="fecha_caducidad" value="<?= $insumo['fecha_caducidad'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cantidad" class="col-sm-2 col-form-label" style="width: 180px;">Stock Actual</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="cantidad" value="<?= $insumo['stock_actual'] ?> ">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cantidad_minima" class="col-sm-2 col-form-label" style="width: 180px;">Stock Minimo</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="cantidad_minima" value="<?= $insumo['stock_minimo'] ?> ">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="proveedor" class="col-sm-2 col-form-label" style="width: 180px;">Proveedor</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="proveedor" value="<?= $insumo['proveedor'] ?>">
            </div>
        </div>
        <button id="generar-orden-btn">Generar Orden de Compra</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

<script>
    document.getElementById("generar-orden-btn").addEventListener("click", function() {
        Swal.fire({
            icon: 'success',
            title: 'Orden de Compra Generada',
            text: '¡Tu orden de compra ha sido generada exitosamente!',
            confirmButtonText: 'Aceptar'
        });
    });
</script>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>