<?php namespace App\Controllers;

use App\Models\LoginModel;

class LoginController  {

    public $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function checkLogin(){
        if (isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['pais'])) {
            $arrayDatos = array("cedula"=>$_POST['cedula'],"telefono"=>$_POST['telefono']);
            $arrayResultados = $this->loginModel->validaIngreso($arrayDatos);
              
            if (!empty($arrayResultados)) {
                    if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    } 
                    $_SESSION["usuario_email".APP_UNIQUE_KEY] =  trim($arrayResultados['email']);
                    $_SESSION["usuario_nombres".APP_UNIQUE_KEY] =  trim($arrayResultados['nombres']);
                    $_SESSION["usuario_cedula".APP_UNIQUE_KEY] =  trim($arrayResultados['cedula']);
                    $_SESSION["usuario_telefono".APP_UNIQUE_KEY] =  trim($arrayResultados['telefono']);
                    $_SESSION["usuario_rol".APP_UNIQUE_KEY] =  trim($arrayResultados['rol']);
                    $_SESSION["usuario_pais".APP_UNIQUE_KEY] =  trim($arrayResultados['pais']);
                header("Location: index.php?&action=dashboard");
                    
            }else{
                    session_destroy(); 
                echo '
                    <div class="alert alert-danger text-center">
                        No se ha podido ingresar con el usuario <strong>'.$arrayDatos['cedula'].' </strong>, reintente.
                    </div>
                ';
            }
        }
    }

    public function getFlag($pais){
        switch ($pais) {
            case 'colombia':
                return 'Bandera-colombia.png'; 
                break;

            case 'ecuador':
                return 'Bandera-ecuador.png'; 
                break;

            case 'peru':
                return 'Bandera-peru.png'; 
                break;
        
            default:
                return 'Bandera-colombia.png'; 
                break;
        }
    }

    public function getAllDataBaseList(){
        $opciones = $this->loginModel->getAllDataBaseList();

        foreach ($opciones as $opcion) {
            $codigo = $opcion['NameDatabase'];
            $texto = $opcion['Nombre'];
            echo "<option value='$codigo'>$texto</option>";
    
        }
    }

    public function getUserByEmail($email){
        return $this->loginModel->getUserByEmail($email);
    }

    public function loginfacebook() {
        
        $config = [
            'callback' => $_ENV['FACEBOOK_CALLBACK'], 
            'keys' => ['id' => $_ENV['FACEBOOK_APP_ID'], 'secret' => $_ENV['FACEBOOK_APP_SECRET']], // Your application credentials
        ];

        $login = new \Hybridauth\Provider\Facebook($config);
        $login->authenticate();
        $userProfile = $login->getUserProfile();
        $login->disconnect();
        return $userProfile;
    }

    public function logingoogle() {
        
        $config = [
            'callback' => $_ENV['GOOGLE_CALLBACK'],
            'keys' => ['id' => $_ENV['GOOGLE_APP_ID'], 'secret' => $_ENV['GOOGLE_APP_SECRET']], // Your application credentials
        ];

        $login = new \Hybridauth\Provider\Google($config);
        $login->authenticate();
        $userProfile = $login->getUserProfile();
        $login->disconnect();
        return $userProfile;
    }
    
}
