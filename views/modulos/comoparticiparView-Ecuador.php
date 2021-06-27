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
        <div class="col d-flex justify-content-center">
          <img alt="Image" clsss="responsive-image" src="assets/img/logo.png" style="width: 50%;"/>
        </div>
        
      </div>
      <!--navbar-->
      <?php require_once 'sis_modules/header_main.php'?>

      <!--navbar-->
      <?php require_once 'sis_modules/navbarnotop.php'?>
    
      <div class="row flex-md-row card card-lg border-0 justify-content-md-center bg-transparent">
        <div class="col-12 col-md-4 card-body text-center text-dark primary-color-background">
            <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-lg" />
            <div class="media">
            <div class="media-body">
              <div class="mb-3">
                <?php 
                  $flag = $login->getFlag($_SESSION["usuario_pais".APP_UNIQUE_KEY]);
                  echo '<img alt="Image" src="assets/img/'.$flag.'" class="w-25 zoom mb-3" />';
                ?>
                <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                
                <input type="hidden" id="cedulaHidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>"/>
                <span class="h5 mt-2">
                </span>
              </div>
            </div>
          </div>
        </div>
        <!--end of col-->
        <div class="col-12 col-md-5">
          <img alt="Image" src="assets/img/MECANICA-PROMO-MUEVETE-VERDE_ECUADOR.png" class="w-100" />
        </div>

        <!--end of col-->
        
     
       
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

<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    $("#whatspopover").popover("show");
    $("#tiendaramopopover").popover("show");
  });
</script>
