<?php namespace App\Models;

/* LOS MODELOS del MVC retornaran unicamente arrays PHP sin serializar*/

class AjaxModel extends Conexion  {
    
    public function __construct() {
        parent::__construct();
    }

    public function getCiudades() {

        $query = " 
            SELECT * FROM ciudades
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
         
                if($stmt->execute()){
                    $resulset = $stmt->fetchAll( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }

    public function getPuntosVenta() {

        $query = " 
            SELECT * FROM puntosventa
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
         
                if($stmt->execute()){
                    $resulset = $stmt->fetchAll( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }

    public function postAddCliente($cliente) {
        $nombreUpper = strtoupper($cliente->nombres);
        try{
            $this->instancia->beginTransaction();  
            $query = " 
                INSERT INTO 
                usuarios (nombres, fechaNacimiento, cedula, telefono, genero, email, password, pais, ciudad, puntoVenta, NIT, rol, status)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '1', '1')
            ";  

            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(1, $nombreUpper); 
            $stmt->bindParam(2, $cliente->fechaNacimiento); 
            $stmt->bindParam(3, $cliente->cedula); 
            $stmt->bindParam(4, $cliente->telefono); 
            $stmt->bindParam(5, $cliente->genero); 
            $stmt->bindParam(6, $cliente->email); 
            $stmt->bindParam(7, $cliente->password); 
            $stmt->bindParam(8, $cliente->pais); 
            $stmt->bindParam(9, $cliente->ciudad); 
            $stmt->bindParam(10, $cliente->puntoVenta); 
            $stmt->bindParam(11, $cliente->NIT); 

            $stmt->execute();

            $commit = $this->instancia->commit();
            return array('status' => 'success', 'mensaje' => 'Registro correcto, ya puedes acceder al sistema.', 'commit'=>$commit);
            
        }catch(\PDOException $exception){
            $this->instancia->rollBack();
            switch ($exception->getCode ()) {
                case '23000':
                    return array('status' => 'error', 'mensaje' => 'El número de documento de identidad '.$cliente->cedula.', ya está registrado. ', 'mensajeEx' => $exception->getMessage(), 'errorCode' => $exception->getCode () );
                    break;
                
                default:
                    return array('status' => 'error', 'mensaje' => 'No se pudo registrar en la base de datos, reintente.', 'mensajeEx' => $exception->getMessage(), 'errorCode' => $exception->getCode () );
                    break;
            }
            
        }
   
    }

    public function getAllClientes() {

        $query = " 
        SELECT 
            usuarios.nombres,
            usuarios.email,
            usuarios.cedula,
            SUM(pesos.kilos) as kilosTotal
        FROM usuarios 
        INNER JOIN pesos ON pesos.cedula = usuarios.cedula
        WHERE usuarios.status != '2'
        GROUP BY 
            usuarios.nombres,
            usuarios.email,
            usuarios.cedula
        ORDER BY kilosTotal DESC
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
         
                if($stmt->execute()){
                    $resulset = $stmt->fetchAll( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }

    public function getUsuarioBy($valor, $columna='id') {

        $query = " 
            SELECT * FROM usuarios WHERE $columna = :valor
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':valor', $valor); 
            
         
                if($stmt->execute()){
                    $resulset = $stmt->fetch( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }



    public function getTotalKilos($cedula) {

        $query = " 
            SELECT SUM(kilos) as totalKilos FROM pesos WHERE cedula = :cedula
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':cedula', $cedula); 
         
                if($stmt->execute()){
                    $resulset = $stmt->fetch( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }

    public function getAllTransaccionesByCliente($cedula) {

        $query = " 
        SELECT 
            *
        FROM 
            pesos 
        WHERE cedula = :cedula
        ORDER BY fecha DESC 
        
        "; 

        try{
            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':cedula', $cedula); 
         
                if($stmt->execute()){
                    $resulset = $stmt->fetchAll( \PDO::FETCH_ASSOC );
                    
                }else{
                    $resulset = false;
                }
            return $resulset;  

        }catch(\PDOException $exception){
            return array('status' => 'error', 'mensaje' => $exception->getMessage() );
        }
   
    }

    public function postActualizaPuntos($clientePuntos) {

        try{

            $this->instancia->beginTransaction();

            $query = " 
                INSERT INTO 
                    pesos (puntoVenta, nombre, factura, cedula, valor, kilos, fecha)
                VALUES (:puntoVenta, :nombre, :factura, :cedula, :valor, :kilos, :fecha)

            ";  

            $stmt = $this->instancia->prepare($query); 
            $stmt->bindParam(':puntoVenta', $clientePuntos->puntoVenta);
            $stmt->bindParam(':nombre', $clientePuntos->nombre);
            $stmt->bindParam(':factura', $clientePuntos->factura); 
            $stmt->bindParam(':cedula', $clientePuntos->cedula);
            $stmt->bindParam(':valor', $clientePuntos->valor); 
            $stmt->bindParam(':kilos', $clientePuntos->kilos); 
            $stmt->bindParam(':fecha', $clientePuntos->fecha); 
            $stmt->execute();

            $commit = $this->instancia->commit();
            return array('status' => 'success', 'message' => 'Los puntos se agregaron correctamente.', 'commit'=>$commit);
            
        }catch(\PDOException $exception){
            $this->instancia->rollBack();
            switch ($exception->getcode()) {
                case '23000':
                    return array('status' => 'error', 'message' => 'Factura o clave unica duplicada, revise que la factura no se haya ingresado anteriormente', 'errorcode' => $exception->getcode());
                    break;
                
                default:
                    return array('status' => 'error', 'message' => $exception->getMessage(), 'errorcode' => $exception->getcode());
                    break;
            }

           
        }
   
    }
   
    
}



   
    
