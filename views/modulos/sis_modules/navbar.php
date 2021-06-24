<?php

    function getActive($action){
       if ($_GET['action'] == $action){
        return "active";
        }
        
    }
   
?>

<div class="navbar-container">
    <div class="bg-dark navbar-dark" data-sticky="top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-menu h4"></i>
        </button>
        <?php
        if (!$_SESSION) {
        ?>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?action=bienvenidos" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="?action=comoparticipar" class="nav-link <?php echo getActive('comoparticipar')?>">Como participar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#terminosModal" class="nav-link">Términos & Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="?action=premios" class="nav-link <?php echo getActive('premios')?>">Premios</a>
                    </li>
                    <li class="nav-item">
                        <a href="?action=ranking" class="nav-link <?php echo getActive('ranking')?>">Ranking</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?action=login">Inicia Sesión</a>
                    </li>
                </ul>

            </div>
        <?php }?>

        <?php
        if ($_SESSION) {
        ?>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="?action=dashboard" class="nav-link <?php echo getActive('dashboard')?>">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a href="?action=comoparticipar" class="nav-link <?php echo getActive('comoparticipar')?>">Como participar</a>
                </li>
                <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#terminosModal" class="nav-link">Términos & Condiciones</a>
                </li>
                <li class="nav-item">
                    <a href="?action=premios" class="nav-link <?php echo getActive('premios')?>">Premios</a>
                </li>
                <li class="nav-item">
                    <a href="?action=ranking" class="nav-link <?php echo getActive('ranking')?>">Ranking</a>
                </li>
                
            </ul>
            

            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php 
                    if ($_SESSION["usuario_rol".APP_UNIQUE_KEY] == '99') {
                        echo '<a href="?action=puntos" class="nav-link" >Asignación de Puntos</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a href="?action=logout" class="nav-link">Cerrar Sesion</a>
                </li>
                
           
            </ul>

        </div>
        <?php }?>
        <!--end nav collapse-->
        </nav>
    </div>
    <!--end of container-->
    </div>
</div>