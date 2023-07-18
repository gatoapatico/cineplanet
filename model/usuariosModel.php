<?php
    require_once('/xampp/htdocs/cineplanet/config/db.php');

    class usuariosModel{
        private $PDO;

        public function __construct(){        
            $con = new db();
            $this-> PDO = $con-> conexion();
        }
        public function login($correo,$password){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE correo = :correo AND password = :password");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            return ($statement->execute() && $statement->rowCount() > 0) ? $statement->fetch() : false;
        }
        public function getUser($id){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }
?>