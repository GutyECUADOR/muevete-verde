
<div class="main-container" style="background: linear-gradient(135deg, #19518c 0%, #4582EC  100%);" >
  <div class="fireworks">
    <section class="height-100 flush-with-above" style="z-index: 2; padding-top:1px">
      <div class="container text-white">
        <div class="row justify-content-between">
          <div class="col-12 text-center">
            <img alt="Image" src="assets/img/logo.png" class="w-50" />
          </div>
          <!--end of col-->
          <!--end of col-->
        </div>

        <ul class="row feature-list feature-list-sm justify-content-center text-dark">

            <li class="col-12 col-md-6 col-lg-5">
                <img alt="Image" src="assets/img/colombiapaso1.png" />
            </li>

            <li class="col-12 col-md-6 col-lg-5">
                <img alt="Image" src="assets/img/colombiapaso2.png" />
            </li>

            <li class="col-12 col-md-6 col-lg-5">
                <img alt="Image" src="assets/img/colombiapaso3.png" />
            </li>

            <li class="col-12 col-md-6 col-lg-5">
                <img alt="Image" src="assets/img/colombiapaso4.png" />
            </li>


        </ul>
        
      </div>
      <!--end of container-->
    </section>
    <section class="space-sm flush-with-above" style="z-index: 2; padding-top:1px">
      <div class="container">
        <div class="row">
          <div class="col text-center">
             <a href="#" style="z-index: 2; padding-top:1px" data-toggle="modal" data-target="#terminosModal" class="text-white">Términos & Condiciones</a>
          </div>
          <!--end of col-->
        </div>
        
        <div class="row">
          <div class="col text-center">
                <span class="text-muted text-small text-white">Derechos Reservados ☕ <?php echo date('Y')?></span>
          </div>
          <!--end of col-->
        </div>
        
        
        
        <!--end of row-->
      </div>
      <!--end of container-->
    </section>
    
  </div>
  
    <!-- Modal Terminos -->
    <?php require_once 'modals/terminosModal-Colombia.php'?>

    <div id="downloadpopover" class="float2"  data-container="body" data-toggle="popover" data-placement="left" data-content="DESCARGAR APP DE JUEGOS.">
        <a style="color: white;" href="assets/docs/XONE-Tetrapak_v1.0.0.apk">
        <i class="fa fa-download my-float"></i>
    </div>

    <div id="whatspopover" class="float"  data-container="body" data-toggle="popover" data-placement="left" data-content="CENTRO DE CONTACTO.">
        <a style="color: white;" href="https://api.whatsapp.com/send?phone=+573229341371&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20promocion%20."  target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </div>

    

</div>

<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->
<script type="text/javascript" src="assets/js/jquery.fireworks.js"></script>


<script type="text/javascript" >
  $('.fireworks').fireworks();
  $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#downloadpopover").popover("show");
        })
</script>