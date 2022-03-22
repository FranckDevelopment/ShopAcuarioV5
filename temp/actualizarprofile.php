<?php 
    require('../classes/class_update.php');

    $rfc=$_POST['txtRFC'];
    $nom=$_POST['txtNom'];
    $ape=$_POST['txtApe'];
    $mail=$_POST['txtmail'];
    $pass=$_POST['txtpass'];
    $tel=$_POST['numtel'];

    $nombre=$_FILES['Foto']['name'];
    $guardado=$_FILES['Foto']['tmp_name'];
    
    $route = "../assets/img/IMG_Profile/".$nombre;
	
    move_uploaded_file($guardado,$route);
    

    $datos=array(
        $rfc,$nom,$ape,$mail,$pass,$tel
    );

    $obj = new class_update();

    if($obj->Up_USU($datos)==1){
        header("location:../micuenta.php");
    }
    else{
        echo "fallo al insertar";
    }

?>