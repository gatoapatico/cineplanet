<?php
    include '/xampp/htdocs/cineplanet/model/insumoModel.php';

    class insumoController{
        private $model;
        public function __construct(){
            $this->model = new insumoModel();
        }
        public function getInsumo($id){
            return ($this->model->getInsumo($id) != false) ? $this->model->getInsumo($id) : false;
        }
    }
?>