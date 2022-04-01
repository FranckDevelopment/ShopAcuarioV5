<?php
session_start();

$mensaje = "";
$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$Foto = $_POST['Foto'];
$Unidades = $_POST['Unidades'];



if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
            if(!isset($_SESSION['CARRITO'])){
                $producto=array(
                    'Id'=>$Id,
                    'Nombre'=>$Nombre,
                    'Precio'=>$Precio,
                    'Foto'=>$Foto,
                    'Unidades'=>$Unidades
                );
                $_SESSION['CARRITO'][0]=$producto;
            }else{
                $nump=count($_SESSION['CARRITO']);
                $producto=array(
                    'Id'=> $Id,
                    'Nombre'=> $Nombre,
                    'Precio'=> $Precio,
                    'Foto'=>$Foto,
                    'Unidades'=>  $Unidades
                );
                $_SESSION['CARRITO'][$nump]=$producto;
            }
            
        break;
        case 'Eliminar':
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if($producto['Id']==$Id){
                    unset($_SESSION['CARRITO'][$indice]);
                    echo "<script>alert('Producto eliminado del carrito');</script>";
                }

            }
        break;
    }
}

$mensaje= print_r($_SESSION,true);


?>