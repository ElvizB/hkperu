<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';
$titulo = 'Formación Especializada';
?>



<section class="formacion_e">
    <div class="bg_formacion_e">
        <img loading="lazy" 
             src="<?php echo RUTA_IMG?>formacion/banner_fe.png" 
             draggable="false" 
             height="276"
        />
        <div class="center_info_formacion_e">
            <div class="content-formacion_e wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
            
                        <div class="grid-height-title">
                            <div class="pb-fe">
                                <span class="font-mosterrat-bold wow fadeInDown animated" data-wow-delay="0.4s">
                                            Formación Especializada                            
                                    </span>
                                    <!-- <img src="<?php echo RUTA_IMG?>formacion/certificacion.png" class="img-fluid insig_formacion" /> -->
                                </div>
                            <div class="content-btn">
                                <div class="btn-curso">
                                    <a href="https://site.q10.com/Preinscripcion?aplentId=93be9bdb-c9fd-4c2a-9583-cb810a0ca59f"
                                        target="_blank" class="btn-preinscription">PREINSCRÍBETE AQUÍ</a>
                                </div>
                            </div>                       
                       </div>
            </div>
        </div>
        <div class="list_absolute">
                    <ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
                        <!-- transforacion digital -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link active font-mosterrat-regular" id="td-tab-ex" data-toggle="tab"
                                href="#td-ex" role="tab" aria-controls="td-ex"
                                aria-selected="false">TRANSFORMACIÓN DIGITAL</a>
                        </li>
                        <!-- Smart Cities -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="sc-tab-ex" data-toggle="tab"
                                href="#sc-ex" role="tab" aria-controls="sc-ex"
                                aria-selected="false">SMART CITIES</a>
                        </li>
                        <!-- agilidad -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="agil-tab-ex" data-toggle="tab"
                                href="#agil-ex" role="tab" aria-controls="agil-ex"
                                aria-selected="false">AGILIDAD</a>
                        </li>
                    
                        <!-- LPM -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="lpm-tab-ex" data-toggle="tab"
                                href="#lpm-ex" role="tab" aria-controls="lpm-ex" aria-selected="false">LPM</a>
                        </li>

                        <!--GESTION DEL PROCESO  -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="gp-tab-ex" data-toggle="tab"
                                href="#gp-ex" role="tab" aria-controls="gp-ex" aria-selected="false">GESTIÓN POR PROCESOS</a>
                        </li>

                        <!-- GESTIÓN DEL CAMBIO -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="gc-tab-ex" data-toggle="tab"
                                href="#gc-ex" role="tab" aria-controls="gc-ex" aria-selected="false">GESTIÓN DEL CAMBIO</a>
                        </li>

                        <!-- PMO -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="pmo-tab-ex" data-toggle="tab"
                                href="#pmo-ex" role="tab" aria-controls="profile-ex"
                                aria-selected="false">PMO</a>
                        </li>

                        <!-- ISO -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link  show font-mosterrat-regular" id="iso-tab-ex"
                                data-toggle="tab" href="#iso-ex" role="tab" aria-controls="iso-ex"
                                aria-selected="true">ISO 9001:2015</a>
                        </li>

                        <!-- IPV6 -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link  show font-mosterrat-regular" id="ipv6-tab-ex"
                                data-toggle="tab" href="#ipv6-ex" role="tab" aria-controls="ipv6-ex"
                                aria-selected="true">IPv6</a>
                        </li>

                            <!-- SAP  -->                                
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link font-mosterrat-regular" id="sap-tab-ex" data-toggle="tab"
                                href="#sap-ex" role="tab" aria-controls="sap-ex" aria-selected="false">SAP</a>
                        </li>

                        <!--DATA MANAGEMENT  -->
                        <li class="nav-item back-cuadro-ul">
                            <a class="nav-link  show font-mosterrat-regular" id="dm-tab-ex"
                                data-toggle="tab" href="#dm-ex" role="tab" aria-controls="dm-ex"
                                aria-selected="true">DATA MANAGEMENT</a>
                        </li>
                            
                    </ul>
                </div>
    </div>
</section>




<section class="">
    <div class="tab-content" id="myTabContentEx">
       
        <!-- transforacion digital -->
        <div class="tab-pane fade active show" id="td-ex" role="tabpanel" aria-labelledby="td-tab-ex">

                <div class="bg-cursos">
                    <?php include_once 'plantillas/formacion/digital/inicio.php';  ?>
                </div>

                <div class="bg-details">
                    <?php include_once 'plantillas/formacion/digital/dirigido.php';  ?>
                </div>

                <div class="bg-certificacion">
                    <div class="grid-certificacion">
                        <div class="content-certificacion">
                            <h2>
                                CERTIFICACIÓN EN PRINCIPIOS DE GESTIÓN DE LA TRANSFORMACIÓN
                                DIGITAL
                            </h2>
                            <p>
                                Luego de aprobar todos los módulos del programa se te otorgará el certificado en PRINCIPIOS
                                DE
                                GESTIÓN DE LA TRANSFORMACIÓN DIGITAL a nombre de HK PERÚ S.A.C.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-plan">
                    <?php include_once 'plantillas/formacion/digital/plan.php';  ?>
                </div>


                <div class="bg-DV">
                    <?php include_once 'plantillas/formacion/digital/ventaja.php';  ?>
                </div>
        </div>

         <!-- smart cities -->
        <div class="tab-pane fade" id="sc-ex" role="tabpanel" aria-labelledby="sc-tab-ex">

            <div class="bg-cursos">
              <?php include_once 'plantillas/formacion/smart_cities/index.php';  ?>
            </div>

            <div class="bg-details">
              <?php include_once 'plantillas/formacion/smart_cities/dirigido.php';  ?>
            </div>

            <div class="bg-certificacion">
                <div class="grid-certificacion">
                    <div class="content-certificacion">
                        <h2>
                            CERTIFICACIÓN
                        </h2>
                        <h4>
                            ESPECIALISTA EN SMART CITIES Y GOBIERNO DIGITAL
                        </h4>
                        <p>
                            Luego de aprobar el módulo del programa se te otorgará el
                            certificado de Especialista en Smart Cities y Gobierno Digital a
                            nombre de HK PERÚ S.A.C. y SMARTER CITIES.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-plan">
                <?php include_once 'plantillas/formacion/smart_cities/plan.php';  ?>
            </div>


            <div class="bg-DV">
                <?php include_once 'plantillas/formacion/smart_cities/ventaja.php';  ?>
            </div>
        </div>

         <!--GESTION DEL PROCESO  -->
        <div class="tab-pane fade " id="gp-ex" role="tabpanel" aria-labelledby="gp-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/gp/inicio.php';  ?>
            </div>

            <div class="bg-plan">
                <?php include_once 'plantillas/formacion/gp/plan.php';  ?>
            </div>
            
            <div class="bg-DV pt-5">
                <?php include_once 'plantillas/formacion/gp/ventajas.php';  ?>
            </div>

        </div>

        <!-- GESTIÓN DEL CAMBIO -->
        <div class="tab-pane fade " id="gc-ex" role="tabpanel" aria-labelledby="gc-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/gc/inicio.php';  ?>
            </div>

            <div class="bg-DV pt-5">
                <?php include_once 'plantillas/formacion/gc/ventajas.php';  ?>
            </div>

        </div>

         <!-- IPV6 -->
        <div class="tab-pane fade " id="ipv6-ex" role="tabpanel" aria-labelledby="ipv6-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/ipv6/inicio.php';  ?>
            </div>

            <div class="bg-plan">
                    <?php include_once 'plantillas/formacion/ipv6/plan.php';  ?>
            </div>

            <div class="bg-DV pt-5">
                <?php include_once 'plantillas/formacion/ipv6/ventajas.php';  ?>
            </div>

        </div>

         <!-- LPM -->
        <div class="tab-pane fade " id="lpm-ex" role="tabpanel" aria-labelledby="lpm-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/smart_grids/index.php';  ?>
            </div>


        </div>

          <!-- ISO -->
        <div class="tab-pane fade " id="iso-ex" role="tabpanel" aria-labelledby="iso-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/iso/inicio.php';  ?>
            </div>
            
            <div class="bg-plan">
                    <?php include_once 'plantillas/formacion/iso/plan.php';  ?>
            </div>

            <div class="bg-DV ">
                <?php include_once 'plantillas/formacion/iso/ventajas.php';  ?>
            </div>

        </div>

           <!-- dm -->
         <div class="tab-pane fade " id="dm-ex" role="tabpanel" aria-labelledby="dm-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/dm/inicio.php';  ?>
            </div>

            <div class="bg-DV pt-5">
                <?php include_once 'plantillas/formacion/dm/ventajas.php';  ?>
            </div>

        </div>
      

        <div class="tab-pane fade " id="agil-ex" role="tabpanel" aria-labelledby="agil-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/agilidad/inicio.php';  ?>
            </div>

            <div class="bg-especialidad">
                <?php include_once 'plantillas/formacion/agilidad/especialidad.php';  ?>
            </div>

            <div class="bg-dirigido">
                <?php include_once 'plantillas/formacion/agilidad/dirigido.php';  ?>
            </div>

            <div class="bg-certificacion">
                <div class="grid-certificacion">
                    <h2>
                        CERTIFICACIÓN POR MÓDULO
                    </h2>

                    <p>
                        Luego de aprobar el módulo del programa se te otorgará el
                        certificado a nombre de HK PERÚ S.A.C.
                    </p>
                </div>
            </div>

            <div class="bg-plan">
                <?php include_once 'plantillas/formacion/agilidad/plan.php';  ?>
            </div>

            <div class="bg-DV">
                <?php include_once 'plantillas/formacion/agilidad/ventaja.php';  ?>
            </div>

        </div>

        <div class="tab-pane fade " id="sap-ex" role="tabpanel" aria-labelledby="sap-tab-ex">


            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/sap/inicio.php';  ?>
            </div>


            <div class="bg-especialidad">
                <?php include_once 'plantillas/formacion/sap/especialidad.php';  ?>
            </div>


            <div class="bg-dirigido">
                <?php include_once 'plantillas/formacion/sap/dirigido.php';  ?>
            </div>


            <div class="bg-certificacion">
                <div class="grid-certificacion">
                    <h2>
                        CERTIFICACIÓN POR MÓDULO O SOLUCIÓN
                    </h2>

                    <p>
                        Luego de aprobar el módulo o programa se te otorgará el
                        certificado a nombre de HK PERÚ S.A.C.
                    </p>
                </div>
            </div>


            <div class="bg-plan">
                <?php include_once 'plantillas/formacion/sap/soluciones.php';  ?>
            </div>

            <div class="bg-DV">
                <?php include_once 'plantillas/formacion/sap/ventaja.php';  ?>
            </div>

        </div>

        <div class="tab-pane fade " id="pmo-ex" role="tabpanel" aria-labelledby="pmo-tab-ex">

            <div class="bg-cursos">
                <?php include_once 'plantillas/formacion/pmo/inicio.php';  ?>
            </div>


            <div class="bg-especialidad">
                <?php include_once 'plantillas/formacion/pmo/especialidad.php';  ?>
            </div>

            <div class="bg-dirigido">
                <?php include_once 'plantillas/formacion/pmo/dirigido.php';  ?>
            </div>


            <div class="bg-certificacion">
                <div class="grid-certificacion">
                    <h2>
                        CERTIFICACIÓN POR TALLER
                    </h2>
                    <p>
                        Luego de aprobar el módulos del programa se te otorgará el
                        certificado a nombre de PMOFFICERS Y HK PERÚ S.A.C.
                    </p>
                </div>
            </div>

            <div class="bg-plan">
                <?php include_once 'plantillas/formacion/pmo/plan.php';  ?>
            </div>

            <div class="bg-DV">
                <?php include_once 'plantillas/formacion/pmo/ventaja.php';  ?>
            </div>



        </div>
    </div>
</section>


<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>