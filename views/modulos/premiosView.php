<?php
if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }

?> 

<div id="app" class="main-container main-background">
  <section >
    <div class="container">
      <!--navbar-->
      <?php require_once 'sis_modules/header_main.php'?>

      <!--navbar-->
      <?php require_once 'sis_modules/navbarnotop.php'?>
    
      <div class="row flex-md-row card border-0 mb-0" style="background:#fff0">
        <div class="col-12 col-md-4 text-center text-dark primary-color-background">
            <div class="container">
              <div class="row" style="min-height: 300px;">
                <div class="container mt-4">
                  <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-lg" />
                    <div class="media">
                    <div class="media-body">
                      <div class="mb-3">
                        <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                        <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                        
                        <input type="hidden" id="cedulaHidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>"/>
                        <span class="h5 mt-2">
                        </span>
                        
                      
                      </div>
                      
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
              <div class="row" style="position: absolute; bottom: 0; width: 100%;">
                <div class="col-12 card-body text-center text-dark" style="background: rgb(242, 206, 62); padding: 10px;">
                  <div class="col-12">
                    <div class="container">
                    <small>Promoción válida del 15 de Febrero al 15 de Marzo de 2021. *Número total de premios: 7 Play Station 5 y 1095 bonos c/u de $35.000, que podrán ser de: Netflix, Spotify o Panamericana. Aplican términos y condiciones</small>
                </div>
                </div>
              </div>
              </div>
            </div>

            
        </div>
        
        <!--end of col-->
        <!-- DIV PREMIOS -->
        <div class="col-12 col-md-4" style="background:#fff">
          <div class="container">
              <div class="text-center">
                <h2 class="h2 mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">CONSOLAS </br>PLAY STATION 5</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/play5.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 40%;" />  
            </div>
            <!--end of row-->
            <div class="container mt-3 m-4">
                <span class="text-uppercase text-dark " style="font-weight: bold">
                  Son
                </span>
                <h2 class="h2 mb-2" style="font-weight:bold; color:#266fbf; line-height: 2rem">7 CONSOLAS</h2>
                <span class="mb-3 text-uppercase text-dark">
                  Para las personas que más acumulen puntos.
                </span>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-4" style="background-color:#50c2f6">
          <div class="container">
              <div class="text-center">
                <h2 class="h2 mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">BONOS </br>DIGITALES</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/bonos.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
            <!--end of row-->
            <div class="container mt-3 m-4">
              <div class="col">
                  <span class="text-uppercase text-dark " style="font-weight: bold">
                    Son
                  </span>
                  <h2 class="h2 mb-2" style="font-weight:bold; color:#266fbf; line-height: 2rem">1095 BONOS</h2>
                  <span class="mb-3 text-uppercase text-dark">
                    Por un valor de $35.000 pesos para disfrutar
                  </span>
              </div>
                
              </div>
          </div>
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->
</div>
<!-- Modal Terminos -->
<?php require_once 'modals/terminosModal.php'?>

<?php require_once 'modals/whatsapp.php'?>

<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    $("#whatspopover").popover("show");
    $("#tiendaramopopover").popover("show");
  });
</script>