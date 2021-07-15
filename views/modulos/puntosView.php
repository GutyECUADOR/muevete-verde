<?php
if ($_SESSION["usuario_rol".APP_UNIQUE_KEY] != '99') {
  header("Location:index.php?&action=logout");  
}
                    
?> 

   <!-- NavBar Admin -->
   <?php require_once 'sis_modules/navbar.php'?>

    <div class="main-container" id="app" style="background-color: white; height: 100vh;">
      <section>
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col">
              <div class="media align-items-center">
                
                <div class="media-body">
                  <div class="mb-3">
                    <h1 class="h2 mb-2">Asignacion de Kilos</h1>
                    <span>Top 100 Ganadores</span>
                   
                  </div>
                
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-auto">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalPuntos"><i class="icon-add-user mr-1"></i> Asignar Puntos</button>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section class="flush-with-above">
        <div class="container">
          <div class="row">
            <div class="col">
              <table class="table table-hover align-items-center table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kilos Totales</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="cliente in clientes" class="bg-white">
                    <th scope="row">
                        <div class="media align-items-center">
                          <div class="media-body">
                            <span class="h6 mb-0">{{ cliente.nombres }}
                          
                            </span>
                            <span class="text-muted">{{ cliente.cedula }}</span>
                          </div>
                        </div>
                      </th>
                      <td>{{ cliente.email }}</td>
                      <td>{{ cliente.kilosTotal }}</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      
      <!-- Modal Puntos -->
      <?php require_once 'modals/modalPuntos.php'?>
      <!-- Modal Terminos -->
      <?php require_once 'modals/terminosModal.php'?>
    </div>

   

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

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

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\pages\puntos.js"></script>