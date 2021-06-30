<?php
use App\Controllers\LoginController;
$login = new LoginController();

if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }

?> 

<div id="app" class="main-container main-background">
  <section class="p-0 pb-3">
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center mt-5">
          <img alt="Image" clsss="responsive-image" src="assets/img/logo.png"/>
        </div>
      </div>
      <!--navbar-->
      <?php require_once 'sis_modules/header_main.php'?>

      <!--navbar-->
      <?php require_once 'sis_modules/navbarnotop.php'?>
    
      <div class="row flex-md-row card border-0 mb-0" style="background:#fff0">
        <div class="col-12 col-md-4 text-center text-white tertiary-color-background">
            <div class="container">
              <div class="row" style="min-height: 300px;">
                <div class="container mt-4">
                  <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-lg" />
                    <div class="media">
                    <div class="media-body">
                      <div class="mb-3">
                        <?php 
                          $flag = $login->getFlag($_SESSION["usuario_pais".APP_UNIQUE_KEY]);
                          echo '<img alt="Image" src="assets/img/'.$flag.'" class="w-25 zoom mb-3" />';
                        ?>
                        <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                        <span><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                        
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
              
            </div>

            
        </div>
        
        <!--end of col-->
        <!-- DIV PREMIOS -->
        <div class="col-12 col-md-2" style="background-color:#eacd16">
          <div class="container">
              <div class="text-center">
                <h4 class="mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">MOTOS </br>ELECTRICAS</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/moto.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto;" />  
            </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/ECUADOR_MOTO.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
          </div>
        </div>
        <div class="col-12 col-md-2" style="background:#fff">
          <div class="container">
              <div class="text-center">
                <h4 class="mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">BICICLETAS </br>TODO TERRENO</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/bici.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/ECUADOR_CICLA.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 95%;" />  
            </div>
          </div>
        </div>
        <div class="col-12 col-md-2" style="background:#eacd16">
          <div class="container">
              <div class="text-center">
                <h4 class="mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">SCOOTER </br>ELECTRICO</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/scooter.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 51%;" />  
            </div>
            <div class="row text-center mt-2">
                <img alt="Image" src="assets/img/ECUADOR_PATINETA.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
          </div>
        </div>
        <div class="col-12 col-md-2" style="background-color:#fff">
          <div class="container">
              <div class="text-center">
                <h4 class="mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">BONOS </br>DIGITALES</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/bonos-netflix.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 90%;" />  
            </div>
            <div class="row text-center mt-4">
                <img alt="Image" src="assets/img/ECUADOR_BONOS.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
          </div>
        </div>
       
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
<!-- Hojas Background --> 
<script type="text/javascript" src="assets/js/jquery.rotate.js"></script>
    <script type="text/javascript" src="assets/js/jquery.classyleaves.min.js"></script>
    <script type="text/javascript" src="assets/js/inithojas.js"></script>



<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    $("#whatspopover").popover("show");
    $("#tiendaramopopover").popover("show");
  });
</script>