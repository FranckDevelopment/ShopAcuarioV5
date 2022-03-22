<?php 
    require('../global/conexion.php');

    class class_update extends Conexion{

        public function __construct(){
            parent::__construct();
        }
        public function Up_USU($datos){
            $resultado = $this->conexion_db->query("UPDATE Usuario SET RFC = '$datos[0]', Nombre = '$datos[1]',Apellidos = '$datos[2]',Email = '$datos[3]',Password = '$datos[4]',Tel = '$datos[5]' WHERE Email = '$datos[3]'");
            return $resultado;
        }
    }
?>