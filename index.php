<?php session_start() ?>
<?php
    if(isset($_SESSION['usuario'])){
        header("Location:view/menu.php");
    } else{
        header("Location:view/login.php");
    }
?>