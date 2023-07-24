<?php
    require_once '/xampp/htdocs/cineplanet/config/db.php';

    class clienteModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function getCliente($id){
            $statement = $this->PDO->prepare("SELECT * FROM clientes WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getClienteByDni($dni){
            $statement = $this->PDO->prepare("SELECT * FROM clientes WHERE dni = :dni LIMIT 1");
            $statement->bindParam(":dni",$dni);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getAllClientes(){
            $statement = $this->PDO->prepare("SELECT * FROM clientes");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
    }
?>