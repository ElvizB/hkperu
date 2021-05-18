<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';

$titulo = 'Consultoria';
?>

<section>
    <div class="container-fluid">
        <div class="row ">
            <!-- Grid column -->
            <div class="col-lg-12 b_consult">
                <div class="col-xl-10 col-lg-12  flex-center contenedor-ext">
                    <h1 class="h1-responsive font-mosterrat-bold wow fadeInDown animated" data-wow-delay="0.4s">
                        CONSULTORÍA</h1>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="py-4 back_color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-11 contenedor-ext">
                <div class="container-fluid reset-spacing">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="container-fluid reset-spacing wow fadeIn animated" data-wow-delay="0.6s">
                                <div class="row pb-4">
                                    <div class="col-lg-10">
                                        <div class="container-fluid reset-spacing">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="flex-center view wow fadeIn animated"
                                                        data-wow-delay="0.4s">
                                                        <img src="<?php echo RUTA_IMG?>/consultoria/c_1.png"
                                                            class="img-fluid " />
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="py-3 title_consultoria">
                                                        <h4 class=" h4-responsive font-mosterrat-bold">
                                                            SMART CITIES</h4>
                                                        <p class=" font-mosterrat-regular">
                                                            Servicio de consultoría para diseñar, planificar y ejecutar
                                                            nuevos
                                                            procesos y
                                                            encaminarse a una Smart Cities. Un objetivo prioritario es
                                                            obtener el
                                                            retorno
                                                            sobre la inversión (ROI) - Smart Project.
                                                        </p>

                                                        <p class=" font-mosterrat-regular">
                                                            Realizando un análisis inicial definimos el modelo en su
                                                            conjunto,
                                                            adaptándolo a
                                                            la Hoja de Ruta, será posible poner en marcha los nuevos
                                                            procesos
                                                            adoptados y
                                                            adecuados a las necesidades de los ciudadanos.
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="container-fluid reset-spacing">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="view wow fadeIn animated flex-center"
                                                        data-wow-delay="0.4s">
                                                        <img src="<?php echo RUTA_IMG?>/consultoria/c_2.png"
                                                            class="img-fluid" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="py-3 title_consultoria">
                                                        <h4 class=" h4-responsive font-mosterrat-bold">
                                                            TRANSFORMACIÓN DIGITAL</h4>
                                                        <p class=" font-mosterrat-regular">
                                                            Todo inicia por conocer al cliente escuchándolo, ello
                                                            permite realizar
                                                            un análisis situacional que será la piedra angular, la cual
                                                            nos
                                                            permitirá conocer sus necesidades y a través de ello
                                                            desarrollar un plan
                                                            de transformación Digital que le permita desarrollar su
                                                            negocio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="container-fluid">
                                <div class="row ">
                                    <!-- Grid column -->
                                    <div class="col-lg-12 not-padding">
                                        <div class="col-xl-10 col-lg-12 col-md-9 col-sm-9  contenedor-ext not-padding">
                                            <div class="back_formula p-4 z-depth-2">
                                                <?php include_once 'plantillas/formulario_consult_form.php';  ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>
</section>

<?php
   
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>