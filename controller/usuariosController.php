<?php
    include '/xampp/htdocs/cineplanet/model/usuariosModel.php';

    class usuariosController{
        private $model;
        
        public function __construct(){
            $this->model =  new usuariosModel();
        }
        public function login($correo,$password){
            $loginUsuario = $this->model->login($correo,$password);
            if($loginUsuario != false){
                session_start();
                $_SESSION['usuario'] = $loginUsuario;
                return header("Location:/cineplanet/view/menu.php");
            } else{
                return header("Location:/cineplanet/view/login.php?id=Invalid");
            }
        }
        public function getUser($id){
            return ($this->model->getUser($id) != false) ? $this->model->getUser($id) : false;
        }
    }
?>