<?php
    include '/xampp/htdocs/cineplanet/controller/clientePremiumController.php';
    $obj = new clientePremiumController();
    $obj->delete($_GET['dni']);
?>