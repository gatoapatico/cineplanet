<?php
    include '/xampp/htdocs/cineplanet/model/salaModel.php';

    class salaController{
        private $model;
        public function __construct(){
            $this->model = new salaModel();
        }
        public function getSala($id){
            return ($this->model->getSala($id) != false) ? $this->model->getSala($id) : false;
        }
    }
?>