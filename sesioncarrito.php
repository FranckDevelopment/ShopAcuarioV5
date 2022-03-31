<?php
session_start();

$mensaje = "";
$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$Unidades = $_POST['Unidades'];



if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
            if(!isset($_SESSION['CARRITO'])){
                $producto=array(
                    'Id'=>$Id,
                    'Nombre'=>$Nombre,
                    'Precio'=>$Precio,
                    'Unidades'=>$Unidades
                );
                $_SESSION['CARRITO'][0]=$producto;
            }else{
                $nump=count($_SESSION['CARRITO']);
                $producto=array(
                    'Id'=> $Id,
                    'Nombre'=> $Nombre,
                    'Precio'=> $Precio,
                    'Unidades'=>  $Unidades
                );
                $_SESSION['CARRITO'][$nump]=$producto;
            }
            
        break;
    }
}

$mensaje= print_r($_SESSION,true);


?>