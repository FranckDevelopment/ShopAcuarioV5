<?php 
session_start();
    require('classes/class_read.php');
    $correo = $_SESSION['usuario'];
    if( $correo==null )
       {   
            header("location:temp/cerrarsession.php");
       }
    else{
       ob_start();   
     }
    $usu = new class_read();
    $datos = "SELECT * FROM Usuario WHERE Email='$correo'";
    $array_productos=$usu->Mostrar($datos);

    require('templates/header.php');
?>







<?php require('templates/footer.php'); ?>