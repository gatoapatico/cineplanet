<?php
    include '/xampp/htdocs/cineplanet/model/clienteModel.php';

    class clienteController{
        private $model;
        public function __construct(){
            $this->model = new clienteModel();
        }
        public function getCliente($id){
            return ($this->model->getCliente($id) != false) ? $this->model->getCliente($id) : false;
        }
        public function getClienteByDni($dni){
            return ($this->model->getClienteByDni($dni) != false) ? $this->model->getClienteByDni($dni) : false;
        }
        public function getAllClientes(){
            return ($this->model->getAllClientes() != false) ? $this->model->getAllClientes() : false;
        }
    }
?>