<?php include '/xampp/htdocs/cineplanet/controller/clienteController.php' ?>
<?php include '/xampp/htdocs/cineplanet/controller/clientePremiumController.php' ?>
<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<?php

    $obj = new clienteController();
    $clientes = array();
    
    if(isset($_POST['dni'])){
        $clientes[] = $obj->getClienteByDni($_POST['dni']);
    } else{
        $clientes = $obj->getAllClientes();
    }

    $cpController = new clientePremiumController();
?>


<h1>Administración de Clientes</h1>

<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DNI de cliente</label>
    <input type="text" name="dni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
  <a href="index.php" class="btn btn-secondary">Limpiar Filtro</a>
</form>

<table class="table container-fluid mt-2 table-striped">
    <thead class="table-warning">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">DNI</th>
            <th scope="col"># Funciones</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($clientes): ?>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td scope="row"><?= $cliente['nombre']?></td>
                    <td scope="row"><?= $cliente['dni']?></td>
                    <td scope="row"><?= $cliente['funciones']?></td>
                    <td scope="row">
                        <?php if($cpController->getClienteByDni($cliente['dni'])){ ?>
                            <a href="cliente.php?dni=<?= $cliente['dni'] ?>" class="btn btn-secondary" style="margin-top: -3px; margin-bottom: -3px">Ver Ficha</a>
                        <?php } else{ ?>
                            <a href="crearFicha.php?id=<?= $cliente['id'] ?>" class="btn btn-success" style="margin-top: -3px; margin-bottom: -3px">Generar Ficha Premium</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay registros en la tabla de usuarios</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>