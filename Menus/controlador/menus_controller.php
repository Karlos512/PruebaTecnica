<?php 
    require_once('modelo/menus_model.php');

    class menus_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new menus_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }
        function addMenu(){
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/addMenu.php');
            include_once('vistas/footer.php');
        }


        function updateMenu(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_e->get_id($_REQUEST['id']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/updateMenu.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){

            $data['menu_padre']=$_REQUEST['txt_padre'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['descripcion']=$_REQUEST['text_descrp'];
            
                $this->model_e->create($data);
            
            header("Location:index.php");

        }

        function get_datosAct(){
            
            $data['menu_padre']=$_REQUEST['txt_padre'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['descripcion']=$_REQUEST['text_descrp'];


            if($_REQUEST['id']!=""){
                $date=$_REQUEST['id'];
                $this->model_e->update($data,$date);
            }
            
            header("Location:index.php");

        }

        function confirmarDelete(){
                $date['id']=$_REQUEST['id'];
                $this->model_e->delete($date['id']);
                 header("Location:index.php");
        }


    }
?>