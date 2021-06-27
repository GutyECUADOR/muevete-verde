<?php
use App\Controllers\AjaxController;
use Dotenv\Dotenv;

@ob_start();
date_default_timezone_set('America/Lima');
header('Content-Type: application/json');

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

class ajax{
  private $ajaxController;
   
    public function __construct() {
      $this->ajaxController = new AjaxController();
    }

    public function getInfoInitForm() {
      return $this->ajaxController->getInfoInitForm();
    }

    public function postAddCliente($cliente) {
      return $this->ajaxController->postAddCliente($cliente);
    }

    public function getAllClientes() {
      return $this->ajaxController->getAllClientes();
    }

    public function getUsuarioBy($valor) {
      return $this->ajaxController->getUsuarioBy($valor);
    }

    public function postActualizaPuntos($clientePuntos) {
      return $this->ajaxController->postActualizaPuntos($clientePuntos);
    }

    public function getAllPuntosByCliente($cedula){
      return $this->ajaxController->getAllPuntosByCliente($cedula);
  }

}

  /* Cuerpo del API */

  try{
    $ajax = new ajax(); //Instancia que controla las acciones

    if (isset($_GET["action"])) {
      $HTTPaction = $_GET["action"];
    }else{
      throw new Exception("Solicitud sin action");
      
    }
    

    switch ($HTTPaction) {

      case 'getInfoInitForm':
        $respuesta = $ajax->getInfoInitForm();
        $rawdata = array('status' => 'success', 'mensaje' => 'respuesta correcta', 'data'=> $respuesta);
        echo json_encode($rawdata);

      break;

      case 'postAddCliente':
        if (isset($_POST['cliente'])) {
          $cliente = json_decode($_POST['cliente']);
          $respuesta = $ajax->postAddCliente($cliente);
          $rawdata = $respuesta;
        }else{
          $rawdata = array('status' => 'error', 'mensaje' => 'No se ha indicado parámetros.');
        }
        
        echo json_encode($rawdata);

      break;

      case 'getAllClientes':
        $respuesta = $ajax->getAllClientes();
        $rawdata = array('status' => 'success', 'mensaje' => 'respuesta correcta', 'data'=> $respuesta);
        echo json_encode($rawdata);

      break;

      case 'getUsuarioBy':
        if (isset($_GET['cedula'])) {
          $valor = $_GET['cedula'];
          $respuesta = $ajax->getUsuarioBy($valor);
          $rawdata = array('status' => 'success', 'mensaje' => 'respuesta correcta', 'data'=> $respuesta);
        }else{
          $rawdata = array('status' => 'error', 'mensaje' => 'No se ha indicado parámetros.');
        }
        echo json_encode($rawdata);

      break;

      case 'postActualizaPuntos':
        if (isset($_POST['clientePuntos'])) {
          $clientePuntos = json_decode($_POST['clientePuntos']);
          $respuesta = $ajax->postActualizaPuntos($clientePuntos);
          $rawdata = $respuesta;
        }else{
          $rawdata = array('status' => 'error', 'mensaje' => 'No se ha indicado parámetros.');
        }
        
        echo json_encode($rawdata);

      break;

      case 'getAllPuntosByCliente':
        if (isset($_GET['cedula'])) {
        $cedula = $_GET['cedula'];
        $respuesta = $ajax->getAllPuntosByCliente($cedula);
        $rawdata = array('status' => 'success', 'mensaje' => 'respuesta correcta', 'data'=> $respuesta);
        
        }else{
          $rawdata = array('status' => 'error', 'mensaje' => 'No se ha indicado parámetros.');
        }

        echo json_encode($rawdata);
      break;

      default:
          $rawdata = array('status' => 'error', 'mensaje' =>'El API no ha podido responder la solicitud, revise el tipo de action');
          echo json_encode($rawdata);
      break;
    }
    
  } catch (Exception $ex) {
    //Return error message
    $rawdata = array();
    $rawdata['status'] = "error";
    $rawdata['mensaje'] = $ex->getMessage();
    echo json_encode($rawdata);
  }


