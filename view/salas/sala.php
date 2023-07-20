<?php session_start() ?>
<?php include '/xampp/htdocs/cineplanet/view/_header.php' ?>

<h1>ADMINISTRACIÓN DE SALA</h1>

<div class="contenedor-principal"> 
    <div class="contenedor-informacion">
        <div class="mb-3 row">
            <label for="num_sala" class="col-sm-2 col-form-label" style="width: 180px;"># Sala</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="num_sala" value="1">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="aforo" class="col-sm-2 col-form-label" style="width: 180px;">Aforo</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="aforo" value="400">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cod_sala" class="col-sm-2 col-form-label" style="width: 180px;">Código Sala</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="cod_sala" value="codigosala1">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_butacas" class="col-sm-2 col-form-label" style="width: 180px;">Total Butacas</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="total_butacas" value="266">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="funcion" class="col-sm-2 col-form-label" style="width: 180px;">Funcion</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="funcion" value="Spiderman">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cod_qr" class="col-sm-2 col-form-label" style="width: 180px;">Codigo QR</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="cod_qr" value="qwertyuiop">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="butacas_disponibles" class="col-sm-2 col-form-label" style="width: 180px;">Butacas Disponibles</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="butacas_disponibles" value="266">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hora_entrada" class="col-sm-2 col-form-label" style="width: 180px;">Hora Entrada</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="hora_entrada" value="12:15">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hora_salida" class="col-sm-2 col-form-label" style="width: 180px;">Hora Salida</label>
            <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext text-center" id="hora_salida" value="14:40">
            </div>
        </div>

        <a href="index.php" class="btn btn-secondary" style="margin-top: 20px; padding: 10px;">Regresar</a>

        <!-- Button trigger modal -->
        <button style="padding: 10px; margin-top: 20px; margin-left: 15px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Habilitar Ingreso Libre a la SALA
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black;">Advertencia de ingreso libre</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        ¿Está seguro que desea habilitar el ingreso libre a la Sala? Esta opción no podrá deshacerse después.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Habilitar Ingreso Libre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-sala">
        <div class="screen"></div>

        <div class="row">
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
            <div class="seati"></div>
        </div>

        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        
        </div>
        <div class="row">
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
            <div class="seat sold"></div>
        </div>
    </div>
</div>

<?php include '/xampp/htdocs/cineplanet/view/_footer.php' ?>