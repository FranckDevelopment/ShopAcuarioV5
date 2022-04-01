<?php
  require 'sesioncarrito.php';
  require 'templates/header2.php';
?>
    <section class="py-5">
        <center><h1>Carrito Acuario</h1></center>
        <div class="container px-12 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php if(!empty($_SESSION['CARRITO'])) {?>
                <table class="table table-warning">
                    <thead>
                        <tr>
                            <th scope="col">Nombre de Producto</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total=0;?>
                        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
                        <tr>
                            <td><?php echo $producto['Nombre']?></td>
                            <td> <img src="assets/img/<?php echo $producto['Foto']?>" width="32%" height="32%"> </td>
                            <td><?php echo $producto['Unidades']?></td>
                            <td>$<?php echo $producto['Precio']?></td>
                            <td>$<?php echo number_format($producto['Precio']*$producto['Unidades'],2);?></td>
                            <form action="" method="post">
                            <input type="hidden" name="Id" id="Id" value="<?php echo $producto['Id']?>" >
                            <td><button type="submit" name="btnAccion" value="Eliminar" class="btn btn-primary">Eliminar</button></td>
                            </form>
                        </tr>
                        <?php $total=$total+($producto['Precio']*$producto['Unidades']);?>
                        <?php }?>
                        <tr>
                            <td colspan="4" align="right"><h3>Total</h3></td>
                            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <?php }else {?>
                    <div class="alert alert-success">
                        No tenemos ningun prodcuto en el carrito...

                    </div>
                <?php }?>

            </div>
        </div>
    </section>
<?php
    require('templates/footer.php');

?>