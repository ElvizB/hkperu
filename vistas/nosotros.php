<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';

$titulo = 'Nosotros';
?>


<!--.Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">

            <div class="background-services flex-center wow fadeIn" data-wow-delay="0.2s">
                <h2 class="title-bannerS h3-responsive font-mosterrat-bold wow fadeInDown" data-wow-delay="0.4s">
                    SOLUCIÓN Y OPTIMIZACIÓN DE
                    <br />PROCESOS A TU ALCANCE</h2>
            </div>
            <div class="view nosotros_web">
                <img class="d-block w-100" src="<?php echo RUTA_IMG?>nosotros/banner_N.png" alt="banner about"
                    draggable="false" />
            </div>
            <div class="view nosotros_m">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>nosotros/nosotros-m.png" alt="banner about"
                    draggable="false" />
            </div>
        </div>
    </div>
    <!--/.Controls-->
</div>

<section class="container-fluid">
    <!--Section: Content-->
    <!--First row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-lg-12 col-md-12 back-bannerN2">
            <div class="content-about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-4"></div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="row">
                                <div class="col-lg-2 col-md-3"></div>
                                <div class="col-lg-10 col-md-9">
                                    <div class="title-about">
                                        <h2 class="h2-responsive">Nosotros</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">
                                    <div class="img-about">
                                        <img src="images/inicio/flecha.png" alt="" draggable="false"
                                            class="imgNo_flecha wow fadeInDown" data-wow-delay="0.1s">
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-9 col-md-9">
                                    <div class="list-info-about wow fadeIn" data-wow-delay="0.2s">
                                        <p>
                                        HK PERÚ S.A.C, es una organización dedicada en atender a los sectores público y privado en Consultoría y 
                                        Formación Especializada en, IPV6, LPM (Legal Project Management), Gestión de Procesos, Gestión del Cambio, Transformación Digital, Agilidad, PMO, SAP y otros.
                                        </p>
                                        <p>
                                        Nos basamos en buenas
                                        prácticas y la experiencia de
                                        nuestros socios de negocios,
                                        para asegurar con éxito la
                                        implementación estratégica,
                                        táctica y operativa de todos
                                        sus proyectos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Grid column-->
    </div>
    <!--First row-->
</section>

<section class=" container-fluid">
    <!--Section: Content-->
    <div class="dark-grey-text text-center">

        <!--First row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 col-sm-12 reset-spacing mision">

                <!-- Card -->
                <div class="b-transparent">

                    <div class="flex-center title-MV ">
                        <div class="ground-titleMV pb-0 pb-md-0 pb-lg-5">
                            <h2 class="text-white pb-2 pb-md-3 pb-lg-5 h2-responsive font-mosterrat-semiBold wow fadeInDown"
                                data-wow-delay="0.2s">Misión
                            </h2>
                            <h6 class="pb-0 pb-md-0 pb-lg-5 font-mosterrat-light h5-responsive text-left wow fadeIn"
                                data-wow-delay="0.4s">
                                La misión de HK PERÚ es proveer consultoría y formación especializada para
                                aquellos clientes del sector público o privado que aspiran a la mejor optimización de
                                sus organizaciones con el objetivo de incrementar su competitividad y productividad. Nos
                                basamos en las necesidades de nuestros clientes y proporcionamos las soluciones
                                demandadas con la finalidad de contribuir de manera óptima hacia la calidad de gestión y
                                de innovación tecnológica.
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 col-sm-12 reset-spacing vision">

                <!-- Card -->
                <div class="b-transparent">

                    <div class="flex-center title-MV ">
                        <div class="ground-titleMV pb-0 pb-md-0 pb-lg-5">
                            <h2 class="text-white pb-2 pb-md-3 pb-lg-5 h2-responsive font-mosterrat-semiBold wow fadeInDown"
                                data-wow-delay="0.2s">Visión
                            </h2>
                            <h6 class="pb-0 pb-md-0 pb-lg-5 font-mosterrat-light h5-responsive text-left wow fadeIn"
                                data-wow-delay="0.4s">
                                HK PERÚ aspira ser una empresa referente en el Perú, que además se adapta a los
                                cambios de la tecnología y la sociedad, ser reconocida por las especialidades formativas
                                y en consultoría.
                                Somos una empresa con visión de futuro y tenemos como objetivo cultivar la confianza con
                                nuestros clientes, desempeñando las actividades de forma ética y satisfactoria para con
                                nuestros socios de negocios, nuestros clientes y la sociedad

                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!--First row-->

    </div>
</section>

<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>