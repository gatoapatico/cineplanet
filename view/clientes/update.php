<?php
    include '/xampp/htdocs/cineplanet/controller/clientePremiumController.php';
    $obj = new clientePremiumController();
    $obj->update(
        $_POST['dni'],
        $_POST['apellido'],
        $_POST['edad'],
        $_POST['telefono']
    );
?>