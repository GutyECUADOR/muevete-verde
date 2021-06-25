<?php
if (isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=dashboard");  
 } 
 
?> 
    
    <div class="main-container main-background" id="app" >
      <section >
        <div class="container">
          <div class="row flex-md-row card card-lg border-0">
            <div class="col-12 col-md-6 card-body" style="padding: 1rem !important">
              
              <div class="row justify-content-center mt-3 mb-2">
                <div class="col-12 col-lg-9">
                  <div class="mb-1">
                    <span class="text-uppercase primary-color font-weight-bold">Informacion personal</span>
                  </div>
                  <!--form-->
                  <form @submit="addNewCliente()" method="POST">
                    <div>
                      <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" v-model="cliente.nombres" class="form-control form-control-sm text-uppercase" id="nombre" placeholder="Ingrese su nombre y apellido" maxlength="200" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="cedula">Documento de Identidad</label>
                        <input type="text" v-model="cliente.cedula" class="form-control form-control-sm" id="cedula" placeholder="Ingrese su numero de documento" pattern="[0-9]+" maxlength="13" required>
                      </div>
                      <div class="form-group">
                        <label for="cedula">Confirmar Documento de Identidad</label>
                        <input type="text" v-model="cliente.confcedula" class="form-control form-control-sm" id="confcedula" placeholder="Confirme su Documento de Identidad" pattern="[0-9]+" maxlength="13" required>
                      </div>

                      <div class="mb-1">
                        <span class="text-uppercase primary-color font-weight-bold">Contacto</span>
                      </div>

                      <div class="form-group">
                        <label for="telefono">Teléfono celular</label>
                        <input type="text" v-model="cliente.telefono" class="form-control form-control-sm" id="telefono" placeholder="Ingrese su numero de Teléfono" pattern="[0-9]+" maxlength="10" required>
                      </div>
                      <div class="form-group">
                        <label for="telefono">Confirmar Teléfono celular</label>
                        <input type="text" v-model="cliente.conftelefono" class="form-control form-control-sm" id="conftelefono" placeholder="Confirme su numero de Teléfono" pattern="[0-9]+" maxlength="10" required>
                      </div>

                      <div class="form-group">
                        <label for="email">Correo Electrónico (Opcional)</label>
                        <input type="email" v-model="cliente.email" class="form-control form-control-sm" id="email" placeholder="Indique su email" maxlength="50">
                      </div>
                      <div class="">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" v-model="cliente.terminos" class="custom-control-input" value="agree" name="agree-terms" id="check-agree">
                          <label class="custom-control-label text-justify small" for="check-agree">He leído y aceptado los Términos y condiciones, y autorizo el tratamiento de mis datos personales para participar en la Actividad promocional.</a>
                          </label>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-success btn-block primary-color-background">Ingresar</button>
                    </div>
                  </form>

                  <div class="text-center mt-3 mb-3">
                      <span>¿Ya tienes una cuenta? <a class="primary-color" href="?action=login">Ingresa aquí</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6 card-body pt-5 d-flex flex-wrap align-items-center">
              
             
              <a href="?action=bienvenidos"><img alt="Image" src="assets/img/logo.png" class="w-100" /></a>
                    
              
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>

    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#tiendaramopopover").popover("show");
        })
     
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <script type="text/javascript" src="assets/js/zoom.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.js"></script>

    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery-modal-video.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\clases\cliente.js?<?php echo date('Ymdhiiss')?>"></script>
    <script src="assets\js\pages\registro.js?<?php echo date('Ymdhiiss')?>"></script>