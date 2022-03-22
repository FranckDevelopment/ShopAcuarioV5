<?php 
    require('../global/conexion.php');

    class class_insert extends Conexion{

        public function __construct(){
            parent::__construct();
        }
        public function insert_USU($datos){
            $resultado = $this->conexion_db->query("INSERT INTO Usuario(RFC,Foto,Nombre,Apellidos,Email,Password,Tel,Id_status) VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]',2)");
            return $resultado;
        }
    }
?>