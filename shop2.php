<?php
    require 'classes/class_read.php';
    $productos = new class_read();
    $datos3 = "SELECT * FROM Productos";
    $array_productos=$productos->Mostrar($datos3);
    require 'templates/header2.php';
?>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-12 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php 
                foreach($array_productos as $item) {?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->

                        <img 
                        class="card-img-top" 
                        src="assets/img/<?php echo $item['URL_Foto']?>" 
                            data-bs-toggle="popover" 
                        title="<?php echo $item['Nombre']?>" 
                        data-bs-trigger="hover"
                        data-bs-content="<?php echo $item['Descripcion']?>"
                        />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div clss="fw-bolder"><?php echo $item['Nombre']?></h5>
                                <!-- Product name-->
                                <h6>Catntidad:<?php echo $item['Unidades']?> </h6>
                                <h5 clauct price-->
                                $<?php echo $item['Precio']?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al Carrito</a></div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php require('templates/footer.php');?>
    </body>