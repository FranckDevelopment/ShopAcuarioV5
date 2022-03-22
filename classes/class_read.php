<?php 
    require('global/conexion.php');

    class class_read extends Conexion{

        public function __construct(){
            parent::__construct();
        }
        public function Mostrar($datos){
            $resultado = $this->conexion_db->query($datos);
            //creamos un array asociativo que contendrá toda la información que estamos demandando de la mase de datos.
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            //pedimos que nos devuelva el array
            return $productos;
        }
    }
?>