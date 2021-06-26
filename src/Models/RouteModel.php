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
