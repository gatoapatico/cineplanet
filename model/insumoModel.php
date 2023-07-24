<?php
    require_once '/xampp/htdocs/cineplanet/config/db.php';

    class insumoModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function getInsumo($id){
            $statement = $this->PDO->prepare("SELECT * FROM insumos WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }
?>