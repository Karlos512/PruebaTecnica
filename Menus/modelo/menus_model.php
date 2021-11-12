<?php
    
    class menus_model{
        private $DB;
        private $menus;

        function __construct(){
            $this->DB=Database::connect();
        }

        function get(){
            $sql= 'SELECT * FROM menu';
            $fila=$this->DB->query($sql);
            $this->menus=$fila;
            return  $this->menus;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO menu(menu_padre,nombre,descripcion)VALUES (?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['menu_padre'],$data['nombre'],$data['descripcion']));
            Database::disconnect();       

        }
        function get_id($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM menu where id = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE menu  set  menu_padre=?, nombre =?, descripcion=? WHERE id = ? ";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['menu_padre'],$data['nombre'],$data['descripcion'],$date));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM menu where id=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }
    }
?>

