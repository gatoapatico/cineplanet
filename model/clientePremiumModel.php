<?php
    require_once '/xampp/htdocs/cineplanet/config/db.php';

    class clientePremiumModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($fecha,$nombre,$apellido,$dni,$edad,$telefono,$funciones){
            $statement = $this->PDO->prepare(
                "INSERT INTO clientes_premium VALUES(null,:fecha,:nombre,
                :apellido,:dni,:edad,:telefono,:funciones)");

            $statement->bindParam(":fecha",$fecha);
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":apellido",$apellido);
            $statement->bindParam(":dni",$dni);
            $statement->bindParam(":edad",$edad);
            $statement->bindParam(":telefono",$telefono);
            $statement->bindParam(":funciones",$funciones);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function getClienteById($id){
            $statement = $this->PDO->prepare("SELECT * FROM clientes_premium WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getClienteByDni($dni){
            $statement = $this->PDO->prepare("SELECT * FROM clientes_premium WHERE dni = :dni LIMIT 1");
            $statement->bindParam(":dni",$dni);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getAllClientes(){
            $statement = $this->PDO->prepare("SELECT * FROM clientes");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update($dni,$apellido,$edad,$telefono){
            $statement = $this->PDO->prepare(
                "UPDATE clientes_premium SET apellido = :apellido, edad = :edad,
                telefono = :telefono WHERE dni = :dni");

            $statement->bindParam(":dni",$dni);
            $statement->bindParam(":apellido",$apellido);
            $statement->bindParam(":edad",$edad);
            $statement->bindParam(":telefono",$telefono);
            return ($statement->execute()) ? $dni : false;
        }
        public function delete($dni){
            $statement = $this->PDO->prepare("DELETE FROM clientes_premium WHERE dni = :dni");
            $statement->bindParam(":dni",$dni);
            return ($statement->execute()) ? true : false;
        }
    }
?>