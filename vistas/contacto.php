<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';

$titulo = 'Contacto';
?>


<!--.Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="content-contact flex-center wow fadeIn" data-wow-delay="0.2s">
                <h2 class="title-bannerS h2-responsive font-mosterrat-bold wow fadeInDown" data-wow-delay="0.4s">
                    CONTÁCTANOS</h2>
            </div>
            <div class="view contact_web">
                <img class="d-block w-100" src="<?php echo RUTA_IMG?>contacto/banner_C.png" alt="banner contact"
                    draggable="false" />
            </div>
            <div class="view contact_m">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/contacto_m.png" alt="banner contact"
                    draggable="false" />
            </div>
        </div>
    </div>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->



<section class="container-fluid">

    <div class="row height-contact wow fadeInDown animated" data-wow-delay="0.6s">
        <div class="col-lg-4 col-md-12 col-sm-12   back-contacto2">

        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 flex-center
         reset-spacing">
            <div class=""></div>
            <div class="">
                <!-- Default form register -->
                <form id="formulario__contact" class="form height__contact z-depth-1 p-3" role="form" action=""
                    method="POST">

                    <div class="">
                        <!-- Header -->
                        <div class="title_soli">
                            <h5 class="h5-responsive font-Montserrat-ExtraBold pb-2">Solicita más información
                            </h5>
                        </div>



                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12 entry-size">
                                <input type="text" id="emailC" name="emailC" class="form-control" placeholder="email">
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->


                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6 entry-size">
                                <input type="text" id="celularC" name="celularC" class="form-control"
                                    placeholder="Celular">
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 entry-size">
                                <input type="text" id="dniC" name="dniC" class="form-control" placeholder="RUC o DNI">
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->


                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12 entry-size">
                                <input type="text" id="empresaC" name="empresaC" class="form-control"
                                    placeholder="Empresa">
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12 entry-size mb-2">
                                <textarea id="mensajeC" name="mensajeC" class="form-control md-textarea" rows="2"
                                    placeholder="Mensaje"></textarea>

                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-2">
                                    <div class="g-recaptcha text-center"
                                        data-sitekey="6LcpKe4UAAAAAFSQ3TxZYbdy644j1x3n1XMBSEjh">
                                    </div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>


                        <div id="respuestaContact"></div>

                        <div class="text-center pt-1">
                            <button id="btnenviar"
                                class="btn btn-default btn-block waves-effect waves-light navbar-background font-weight-bold boton-v2">
                                Enviar
                            </button>
                        </div>
                        <!-- Grid row -->
                    </div>

                </form>
                <!-- Default form register -->
            </div>



        </div>

        <div class="col-lg-4 col-md-12 col-sm-12  ">
        </div>
    </div>

</section>

<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>