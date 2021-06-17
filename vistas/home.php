<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';
    //include_once 'plantillas/modal/index.php';
    include_once 'plantillas/carousel.php';

$titulo = 'Inicio';
?>
<div class="container ">
    <div class="row padding-py">
        <div class="col-lg-12">
            <div class="pb-5 t-partners">
                <h4 class="h4-responsive">
                </h4>
            </div>
        </div>
        <div class="container-fluid">
            <div class="grid_partner">
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_1.png" class="img-fluid">
                    </div>
                </div>
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_6.png" class="img-fluid">
                    </div>
                </div>
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_2.png" class="img-fluid">
                    </div>
                </div>
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_3.png" class="img-fluid">
                    </div>
                </div>
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_4.png" class="img-fluid">
                    </div>
                </div>
                <div class="content_partner">
                    <div class="hover-img-partners">
                        <img src="<?php echo RUTA_IMG?>inicio/b_5.png" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="container">
</section>


<?php
    include_once 'plantillas/bloque.php';
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>