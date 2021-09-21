<?php namespace App\Controllers;

use App\Models\AjaxModel;

class AjaxController  {

    public $defaulDataBase;
    public $ajaxModel;
   
    public function __construct() {
        $this->ajaxModel = new AjaxModel();
    }

    public function getInfoInitForm(){
        $ciudades = $this->ajaxModel->getCiudades();
        $puntosVenta = $this->ajaxModel->getPuntosVenta();
        return array('ciudades'=> $ciudades, 'puntosVenta'=> $puntosVenta);
    }

    /* Retorna la respuesta del modelo ajax*/
    public function postAddCliente($cliente){
       
        $response = $this->ajaxModel->postAddCliente($cliente);
        return $response;
    }

    public function getAllClientes(){
        $response = $this->ajaxModel->getAllClientes();
        return $response;
    }

    public function addPuntosCortesiaToAllUsers(){
        $response = $this->ajaxModel->addPuntosCortesiaToAllUsers();
        return $response;
    }


    public function getUsuarioBy($valor){
        $response = $this->ajaxModel->getUsuarioBy($valor, 'cedula');
        return $response;
    }

    public function postActualizaPuntos($clientePuntos) {
        $response = $this->ajaxModel->postActualizaPuntos($clientePuntos);
        return $response;
    }

    public function getAllPuntosByCliente($cedula){
        $transacciones = $this->ajaxModel->getAllTransaccionesByCliente($cedula);
        $totalKilos = $this->ajaxModel->getTotalKilos($cedula);
        return array('totalKilos'=> $totalKilos, 'transacciones'=> $transacciones);
    }
    


}
