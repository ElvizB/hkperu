 <!-- Default form register -->
 <form id="formulario" class="form height-form2" role="form" action="" method="POST">

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
                 <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">

             <!-- Grid column -->
             <div class="col-md-6 entry-size">
                 <input type="text" id="apellidoP" name="apellidoP" class="form-control" placeholder="Apellido Paterno">
             </div>
             <!-- Grid column -->

             <!-- Grid column -->
             <div class="col-md-6 entry-size">
                 <input type="text" id="apellidoM" name="apellidoM" class="form-control" placeholder="Apellido Materno">
             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->

         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 entry-size">
                 <input type="text" id="email" name="email" class="form-control" placeholder="email">
             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">

             <!-- Grid column -->
             <div class="col-md-6 entry-size">
                 <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular">
             </div>
             <!-- Grid column -->

             <!-- Grid column -->
             <div class="col-md-6 entry-size">
                 <input type="text" id="dni" name="dni" class="form-control" placeholder="RUC o DNI">
             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 entry-size">
                 <select name="consultoria" id="consultoria" class="browser-default custom-select ">
                     <option value="" selected disabled>¿Que tipo de consultoria?</option>
                     <option value="Smart Cities">Smart Cities</option>
                     <option value="Smart Grids">Smart Grids</option>
                     <option value="Transformacion Digital">Transformación Digital</option>
                     <option value="Agilidad">Agilidad</option>
                     <option value="SAP">SAP</option>
                     <option value="PMO">PMO</option>
                 </select>
             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->

         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 entry-size">
                 <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Empresa">
             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 entry-size">
                 <select name="sector" id="sector" class="browser-default custom-select">
                     <option value="" selected disabled>Sector</option>
                     <option value="Agro">Agro</option>
                     <option value="Educación">Educación</option>
                     <option value="Gobierno">Gobierno</option>
                     <option value="Informática">Informática</option>
                     <option value="Marketing">Marketing</option>
                     <option value="Salud">Salud</option>
                     <option value="Telecomunicaciones">Telecomunicaciones</option>
                     <option value="Otro">Otro</option>
                 </select>
             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->

         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 entry-size mb-2">
                 <textarea id="mensaje" name="mensaje" class="form-control md-textarea" rows="2"
                     placeholder="Mensaje"></textarea>

             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12 my-1">
                 <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter"
                         name="defaultRegisterFormNewsletter">
                     <label class="custom-control-label small autorizo font-mosterrat-regular"
                         for="defaultRegisterFormNewsletter">Autorizo a Galatel Perú a utilizar
                         mis datos
                         personales para los fines mencionados.</label>
                 </div>
             </div>
             <!-- Grid column -->
         </div>
         <!-- Grid row -->


         <!-- Grid row -->
         <div class="row">
             <!-- Grid column -->
             <div class="col-md-12">
                 <div class="md-form mb-2">
                     <div class="g-recaptcha text-center" data-sitekey="6LcpKe4UAAAAAFSQ3TxZYbdy644j1x3n1XMBSEjh">
                     </div>
                     <div id="g-recaptcha-error"></div>
                 </div>
             </div>
             <!-- Grid column -->
         </div>


         <div id="respuesta"></div>

         <div class="text-center pt-1">
             <button id="btnenviar"
                 class="btn btn-default btn-block waves-effect waves-light navbar-background font-weight-bold boton-v2">
                 ¡Sí,quiero más información!
             </button>
         </div>
         <!-- Grid row -->
     </div>

 </form>
 <!-- Default form register -->