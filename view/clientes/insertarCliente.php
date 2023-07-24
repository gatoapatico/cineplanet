<?php
    include '/xampp/htdocs/cineplanet/controller/clientePremiumController.php';
    $obj = new clientePremiumController();
    $obj->insertar(
        date("Y-m-d"),
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['dni'],
        $_POST['edad'],
        $_POST['telefono'],
        $_POST['funciones']
    );
?>