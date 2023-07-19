<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<h1>Administración de Clientes</h1>


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
        <tr>
            <td scope="row">Alvaro</td>
            <td scope="row">48527293</td>
            <td scope="row">17</td>
            <td scope="row">
                <a href="cliente.php" class="btn btn-secondary" style="margin-top: -3px; margin-bottom: -3px">VER FICHA</a>
                <a href="cliente.php" class="btn btn-success" style="margin-top: -3px; margin-bottom: -3px">GENERAR FICHA PREMIUM</a>
            </td>
        </tr>
        <!-- <?php /*if($rows): ?>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td scope="row"><?= $row['id']?></td>
                    <td scope="row"><?= $row['nombre']?></td>
                    <td scope="row"><?= $row['correo']?></td>
                    <td scope="row">
                        <a href="show.php?id=<?= $row['id']?>" class="btn btn-success" style="margin-top: -3px; margin-bottom: -3px">Detalles</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay registros en la tabla de usuarios</td>
            </tr>
        <?php endif; */?> -->
    </tbody>
</table>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>