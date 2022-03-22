<?php 
session_start();
   
    
    $correo = $_SESSION['usuario'];
    if( $correo==null )
       {   
            header("location:temp/cerrarsession.php");
       }
    else{
       ob_start();   
     }
    require('templates/header.php');
    require('classes/class_read.php');
    $usu = new class_read();
    $datos = "SELECT * FROM Usuario WHERE Email='$correo'";
    $datos2 = "SELECT * FROM Direccion WHERE Email='$correo'";
    $array_productos=$usu->Mostrar($datos);

    
?>
<div class="box-profile">
<h4>&nbsp; Mi Cuenta...</h4>
</div> 
<?php 
    foreach($array_productos as $item) {?>
        <form action="temp/actualizarprofile.php" method="post">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings Advanced</h4>
                            </div>
                            <center>
                            <img class="circular--portrait" src="assets/img/IMG_Profile/<?php echo $item['Foto']?>">
                            <br>
                            <h4><?php echo $item['Nombre']?></h4>
                            <h4><?php echo $item['Email']?></h4>
                            </center>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Foto del perfil</label>
                                    <input type="file" name="Foto" class="form-control"">
                                </div>
                                <div class="col-md-12"><label class="labels">RFC</label>
                                    <input type="text" name="txtRFC" class="form-control"  value="<?php echo $item['RFC']?>">
                                </div>
                                <div class="col-md-12"><label class="labels">Email</label>
                                    <input type="email" name="txtmail" class="form-control" value="<?php echo $item['Email']?>">
                                </div>
                                <div class="col-md-12"><label class="labels">Password</label>
                                    <input type="text" name="txtpass" class="form-control" value="<?php echo $item['Password']?>">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="mt-5 text-center">
                        <button type="submit" name="submit" id="submit" class="btn btn-sm btn-block btn-primary">Acualizar Perfil</button>
                        <br>
                        <br>
                        <input type="button" class="btn btn-sm btn-primary" value="<- Página anterior" onClick="history.go(-1);">
                    </div>
                    </div>
                </div>
            </div>
        </form>
  
<?php }?>

<?php
    require('templates/footer.php');

?>