<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';

$titulo = 'smart cities';
?>

<section>
    <div class="container-fluid">
        <div class="row ">
            <!-- Grid column -->
            <div class="col-lg-12 b_formacion">
                <div class="col-xl-10 col-lg-12 contenedor-ext pos_ab reset-spacing">
                    <div class="height-back">
                        <h1 class="h1-responsive font-mosterrat-bold wow fadeInDown animated" data-wow-delay="0.4s">
                            Formacion
                            <br />
                            Especializada</h1>
                        <div class="list_absolute">
                            <ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">

                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link show font-mosterrat-regular" id="sc-tab-ex" data-toggle="tab"
                                        href="#sc-ex" role="tab" aria-controls="sc-ex" aria-selected="true">SMART
                                        CITIES</a>
                                </li>
                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link font-mosterrat-regular" id="sg-tab-ex" data-toggle="tab"
                                        href="#sg-ex" role="tab" aria-controls="sg-ex" aria-selected="false">SMART
                                        GRIDS</a>
                                </li>
                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link font-mosterrat-regular" id="td-tab-ex" data-toggle="tab"
                                        href="#td-ex" role="tab" aria-controls="td-ex"
                                        aria-selected="false">TRANSFORMACIÓN DIGITAL</a>
                                </li>

                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link active font-mosterrat-regular" id="agil-tab-ex" data-toggle="tab"
                                        href="#agil-ex" role="tab" aria-controls="agil-ex"
                                        aria-selected="false">AGILIDAD</a>
                                </li>

                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link font-mosterrat-regular" id="sap-tab-ex" data-toggle="tab"
                                        href="#sap-ex" role="tab" aria-controls="sap-ex" aria-selected="false">SAP</a>
                                </li>
                                <li class="nav-item back-cuadro-ul">
                                    <a class="nav-link font-mosterrat-regular" id="pmo-tab-ex" data-toggle="tab"
                                        href="#pmo-ex" role="tab" aria-controls="profile-ex"
                                        aria-selected="false">PMO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="tab-content" id="myTabContentEx">
        <div class="tab-pane fade" id="sc-ex" role="tabpanel" aria-labelledby="sc-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/smart_cities/index.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_cities/details.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_cities/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back-espec">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="py-3 title__espec">
                                                    <h4 class=" h4-responsive font-mosterrat-bold">
                                                        CERTIFICACIÓN
                                                    </h4>
                                                    <h4 class="h4-responsive font-montserrat-medium py-2">
                                                        ESPECIALISTA EN SMART CITIES Y GOBIERNO DIGITAL
                                                    </h4>
                                                    <p class=" h4-responsive font-mosterrat-regular">
                                                        Luego de aprobar el módulo del programa se te otorgará el
                                                        certificado de Especialista en Smart Cities y Gobierno Digital a
                                                        nombre de GALA’TEL PERÚ y SMARTER CITIES.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_cities/plan.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext pb-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_cities/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade " id="sg-ex" role="tabpanel" aria-labelledby="sg-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/smart_grids/index.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_grids/details.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_grids/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_grids/plan.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext pb-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/smart_grids/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="td-ex" role="tabpanel" aria-labelledby="td-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/digital/inicio.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/digital/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back-espec">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="py-3 title__espec">
                                                    <h4 class=" h4-responsive font-mosterrat-bold">
                                                        CERTIFICACIÓN EN FUNDAMENTOS DE TRANSFORMACIÓN DIGITAL
                                                    </h4>
                                                    <p class=" h4-responsive font-mosterrat-regular">
                                                        Luego de aprobar todos los módulos del programa se te otorgará
                                                        el certificado en Fundamentos de Transformación Digital a nombre
                                                        de GALA’TEL PERÚ.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">

                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/digital/plan.php';  ?>
                                </div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/digital/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade " id="sap-ex" role="tabpanel" aria-labelledby="sap-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/sap/inicio.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back__especial">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/sap/especialidad.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/sap/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back-espec">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="py-3 title__espec">
                                                    <h4 class="h4-responsive font-montserrat-medium py-2">
                                                        CERTIFICACIÓN POR MÓDULO O SOLUCIÓN
                                                    </h4>
                                                    <p class=" h4-responsive font-mosterrat-regular">
                                                        Luego de aprobar el módulo o programa se te otorgará el
                                                        certificado a nombre de GALA’TEL PERÚ.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/sap/soluciones.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/sap/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="tab-pane fade active show" id="agil-ex" role="tabpanel" aria-labelledby="agil-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/agilidad//inicio.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back__especial">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/agilidad/especialidad.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/agilidad/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back-espec">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="py-3 title__espec">
                                                    <h4 class=" h4-responsive font-mosterrat-bold">
                                                        CERTIFICACIÓN POR MÓDULO
                                                    </h4>

                                                    <p class=" h4-responsive font-mosterrat-regular">
                                                        Luego de aprobar el módulo del programa se te otorgará el
                                                        certificado a nombre de GALA’TEL PERÚ
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/agilidad/plan.php';  ?>
                                </div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/agilidad/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane fade " id="pmo-ex" role="tabpanel" aria-labelledby="pmo-tab-ex">
            <div class="row">
                <div class="col-lg-12 back_color">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-5">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/pmo/inicio.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back__especial">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <?php include_once 'plantillas/formacion/pmo/especialidad.php';  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext">
                        <div class="container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/pmo/dirigido.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 back-espec">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="container-fluid reset-spacing">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="py-3 title__espec">

                                                    <h4 class="h4-responsive font-montserrat-medium py-2">
                                                        CERTIFICACIÓN POR TALLER
                                                    </h4>
                                                    <p class=" h4-responsive font-mosterrat-regular">
                                                        Luego de aprobar el módulos del programa se te otorgará el
                                                        certificado a nombre de PMOFFICERS Y GALA’TEL PERÚ.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/pmo/plan.php';  ?>
                                </div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="col-xl-10 col-lg-12 contenedor-ext py-3">
                        <div class=" container-fluid reset-spacing">
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php include_once 'plantillas/formacion/pmo/ventaja.php';  ?>
                                </div>

                                <div class="col-lg-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="container  py-4">
    <div class=" back_formula p-4 z-depth-2">
        <?php include_once 'plantillas/formulario_formacion.php';  ?>
    </div>
</section>


<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>