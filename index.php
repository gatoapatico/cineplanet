<?php session_start() ?>
<?php
    if(isset($_SESSION['usuario'])){
        echo "enviar a menu";
    } else{
        header("Location:view/login.php");
    }
?>