<?php
    include '/xampp/htdocs/cineplanet/model/clientePremiumModel.php';

    class clientePremiumController{
        private $model;
        public function __construct(){
            $this->model = new clientePremiumModel();
        }
        public function insertar($fecha,$nombre,$apellido,$dni,$edad,$telefono,$funciones){
            return ($this->model->insertar($fecha,$nombre,$apellido,$dni,$edad,$telefono,$funciones)) ?
            header("Location:/cineplanet/view/clientes/index.php") :
            header("Location:/cineplanet/view/clientes/crearFicha.php");
        }
        public function getClienteById($id){
            return ($this->model->getClienteById($id) != false) ? $this->model->getClienteById($id) : false;
        }
        public function getClienteByDni($dni){
            return ($this->model->getClienteByDni($dni) != false) ? $this->model->getClienteByDni($dni) : false;
        }
        public function getAllClientes(){
            return ($this->model->getAllClientes() != false) ? $this->model->getAllClientes() : false;
        }
        public function update($dni,$apellido,$edad,$telefono){
            return ($this->model->update($dni,$apellido,$edad,$telefono)) ?
            header("Location:/cineplanet/view/clientes/index.php") :
            header("Location:/cineplanet/view/clientes/cliente.php?dni=".$dni);
        }
        public function delete($dni){
            return ($this->model->delete($dni)) ?
            header("Location:/cineplanet/view/clientes/index.php") :
            header("Location:/cineplanet/view/clientes/cliente.php?dni=".$dni);
        }
    }
?>