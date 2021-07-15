<?php namespace App\Models;

class RouteModel {
    
    public function actionCatcherModel($action){
        switch ($action) {
            case 'bienvenidos':
                $contenido = "views/modulos/bienvenidosView.php";
                break;
            
            case 'login':
                $contenido = "views/modulos/loginView.php";
                break;   

            case 'logout':
                $contenido = "views/modulos/cerrarSesion.php";
                break;   

            case 'register':
                $contenido = "views/modulos/registerView.php";
                break;

            case 'dashboard':
                $contenido = "views/modulos/dashboardView.php";
                break;

            case 'puntos':
                $contenido = "views/modulos/puntosView.php";
                break;    

            case 'comoparticipar':
                if ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'ecuador') {
                    $contenido = "views/modulos/comoparticiparView-Ecuador.php";
                }elseif ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'colombia') {
                    $contenido = "views/modulos/comoparticiparView-Colombia.php";
                }elseif ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'peru') {
                    $contenido = "views/modulos/comoparticiparView-Peru.php";
                }
                else{
                    $contenido = "views/modulos/comoparticiparView-Colombia.php";
                }
                break;

            case 'premios':
                if ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'ecuador') {
                    $contenido = "views/modulos/premiosView-Ecuador.php";
                }elseif ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'colombia') {
                    $contenido = "views/modulos/premiosView-Colombia.php";
                }elseif ($_SESSION["usuario_pais".APP_UNIQUE_KEY] == 'peru') {
                    $contenido = "views/modulos/premiosView-Peru.php";
                }
                else{
                    $contenido = "views/modulos/premiosView-Colombia.php";
                }
                break;

            case 'informacion':
                $contenido = "views/modulos/informacionView.php";
                break;

            case 'ranking':
                $contenido = "views/modulos/rankingView.php";
                break;   
    
            case 'colombia':
                $contenido = "views/modulos/colombiaView.php";
                break;
                
            case 'ecuador':
                $contenido = "views/modulos/ecuadorView.php";
                break;
            
            case 'peru':
                $contenido = "views/modulos/peruView.php";
                break;
            
            default:
                $contenido = "views/modulos/bienvenidosView.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
