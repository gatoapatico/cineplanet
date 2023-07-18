<?php
    include '/xampp/htdocs/cineplanet/controller/usuariosController.php';
    $obj = new usuariosController();
    $obj->login($_POST['correo'],$_POST['password']);
?>