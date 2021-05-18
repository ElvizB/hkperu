<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';

$titulo = 'Servicios';
?>


<!--.Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">

            <div class="background-services flex-center wow fadeIn" data-wow-delay="0.2s">
                <h2 class="title-bannerS h3-responsive font-mosterrat-bold wow fadeInDown" data-wow-delay="0.4s">
                    Soluciones y optimización de
                    <br />procesos
                    a tu alcance</h2>
            </div>
            <div class="view serv_web">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>servicios/banner_s.png" alt="banner services"
                    draggable="false" />
            </div>
            <div class="view serv_m">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>servicios/servicio_m.png" alt="banner services"
                    draggable="false" />
            </div>

        </div>
    </div>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->



<div class="flex-center">

    <div class="objmidle-titleS pt-5">
        <div class="pt-5">
            <div class="pt-0 pt-md-0 pt-lg-5 wow fadeInDown" data-wow-delay="0.2s">
                <h1 class="font-mosterrat-semiBold pt-5  h1-responsive">Servicios</h1>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">


    <!--Section: Content-->
    <section class="dark-grey-text text-center">

        <!--First row-->
        <div class="row">

            <!--Grid column-->
            <div class=" col-md-12 reset-spacing creacion height-S">

                <!-- Card -->
                <div class="b-transparent">

                    <div class="flex-center back-position">
                        <h2 class="pt-0 pt-md-0 pt-lg-5 font-mosterrat-semiBold text-white h2-responsive wow fadeInDown"
                            data-wow-delay="0.2s">
                            Proyectos de innovación para <br />
                            Smart Cities
                        </h2>
                    </div>
                    <div class="flex-center back-position pt-5">
                        <div class="pt-5">
                            <div class="pt-0 pt-md-0 pt-lg-5">
                                <h6 class="pt-5 font-mosterrat-regular text-white text-center wow fadeInDown"
                                    data-wow-delay="0.4s">
                                    Contribuimos al desarrollo sostenible de una ciudad teniendo en <br />
                                    cuenta las áreas de implementación dentro de las Smart Cities.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=" col-md-6 reset-spacing consultoria2 height-S">

                <!-- Card -->
                <div class="b-transparent">

                    <div class="flex-center back-position">
                        <h6 class="py-5 font-mosterrat-semiBold color-inicio text-white h4-responsive text-left wow fadeInDown"
                            data-wow-delay="0.2s">
                            Consultoría en Transformación <br />
                            Digital para los Sectores <br />
                            Público y Privado.
                        </h6>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=" col-md-6 reset-spacing gestion height-S">

                <!-- Card -->
                <div class="b-transparent">

                    <div class="flex-center back-position">
                        <h6 class="py-5 font-mosterrat-semiBold color-inicio text-white h4-responsive text-left wow fadeInDown"
                            data-wow-delay="0.2s">
                            Gestión de Proyectos<br />
                            en Educación Digital.
                            <br />
                            <br />
                        </h6>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->







        </div>
        <!--First row-->

    </section>


</div>


<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>