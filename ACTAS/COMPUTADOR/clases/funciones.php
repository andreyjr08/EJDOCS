<?php
namespace clases_pdo;
include("../../../LOG/CADENA/config.php");
class funciones{
//---------persona---------------
    private $id;
    private $para;
    private $creador;
    private $de;
    private $asunto;

    private $cedula;
    private $nombres;
    private $apellidos;
    private $departamento;
//---------computador---------------
    private $computador;
    private $activo_fijo;
    private $serial;
    private $procesador;
    private $memoria_ram;
    private $serial_cargador;
    private $acta;
//--------pantalla------
    private $serialP;
    private $pantalla;
    private $actaP;
//-------marca pc----- 
    private $marca;
//-------marca pantalla----- 
    private $marcaPant;
//-------ticket----- 
    private $numeroT;

     public function __construct(){
        $this->pdo = new config();
    }
        public function addUser($para,$de, $asunto, $creador){
        $this->PARA = $para;
        $this->DE= $de; 
        $this->ASUNTO = $asunto;
        $this->CREADO_POR = $creador;
        $result = $this->Insertar();
        return $result;
    } 
    
         private function Insertar(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO actas (USUARIO_ID, DE, ASUNTO, CREADO_POR, FECHA) VALUES (:para, :de, :asunto, :creador, NOW())";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'para' => $this->PARA,
            'de' => $this->DE,
            'asunto' => $this->ASUNTO,
            'creador' => $this->CREADO_POR,
            ]);
            return $result;
        }
    //--------------CONSULTA PARA LISTAS DESPLEGABLES------------

    //--------------LISTA USUARIOS
        public function usuarios()
        {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usuarios ORDER BY NOMBRES DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        }
    //LISTA DE COMPUTADORES 
        public function marcas_pc()
        {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM marcas_pc ORDER BY MARCA DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        }
    //LISTA PANTALLAS
          public function marcas_pant()
        {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM modelos_pant ORDER BY MARCA DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        }
    //--------------LISTA DEPARTAMENTOS
        public function departamentos(){
        $pdo = $this->pdo;
        $sql = "SELECT *FROM departamentos ORDER BY NOMBRE DESC";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        
}



    //--------------FIN DE LA CONSULTA
        //recopilacion de datos para ejecutar la insercion de un nuevo computador
        public function anadirComputador($serial, $activo_fijo, $procesador, $memoria_ram, $serial_cargador,$computador,$acta){
        $this->SERIAL= $serial;
        $this->ACTIVO_FIJO = $activo_fijo;
        $this->PROCESADOR = $procesador;
        $this->MEMORIA_RAM = $memoria_ram;
        $this->SERIAL_CARGADOR = $serial_cargador;
        $this->MARCA_ID = $computador;
        $this->ACTA_ID = $acta;
        $result = $this->InsertarComputador();
        return $result;
    }
    //consulta sql para insertar nuevo computador
     private function InsertarComputador(){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO computadores (SERIAL, ACTIVO_FIJO, PROCESADOR, MEMORIA_RAM, SERIAL_CARGADOR,MARCA_ID,ACTA_ID) VALUES (:serial, :activo_fijo, :procesador, :memoria_ram, :serial_cargador,:computador,:acta)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'serial' => $this->SERIAL,
            'activo_fijo' => $this->ACTIVO_FIJO,
            'procesador' => $this->PROCESADOR,
            'memoria_ram' => $this->MEMORIA_RAM,
            'serial_cargador' => $this->SERIAL_CARGADOR,
            'computador' => $this->MARCA_ID,
            'acta' => $this->ACTA_ID,
            ]);
            return $result;
        }
             //recopilacion de datos para ejecutar la insercion de una nueva pantalla
        public function anadirPantalla($serialP,$pantalla,$actaP){
        $this->SERIAL= $serialP;
        $this->MODELO_PANT = $pantalla;
        $this->ACTA_ID = $actaP;
        $result = $this->InsertarPantalla();
        return $result;
    }
    //consulta sql para insertar nueva pantalla
     private function InsertarPantalla(){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO pantallas (SERIAL,MODELO_PANT,ACTA_ID) VALUES (:serialP,:pantalla,:actaP)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'serialP' => $this->SERIAL,
            'pantalla' => $this->MODELO_PANT,   
            'actaP' => $this->ACTA_ID,
            ]);
            return $result;
        }
    //fin de consulta
          public function anadirTicket($numeroT){
        $this->NUMERO= $numeroT;
        $result = $this->InsertarTicket();
        return $result;
    }
    //consulta sql para insertar nueva pantalla
     private function InsertarTicket(){
        $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO ticket (NUMERO,STATUS) VALUES (:numeroT,1)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'numeroT' => $this->NUMERO,   
            ]);
            return $result;
        }
//---------ingresar un nuevo usuario
//recopilacion de datos para ejecutar la insercion de un nuevo usuario
        public function anadirUsuario($cedula,$nombres, $apellidos, $departamento){
        $this->CEDULA = $cedula;
        $this->NOMBRES= $nombres; 
        $this->APELLIDOS = $apellidos;
        $this->DEPARTAMENTO_ID = $departamento;
        $result = $this->insertarUsuario();
        return $result;
    } 
    
         private function insertarUsuario(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO usuarios (CEDULA, NOMBRES, APELLIDOS, DEPARTAMENTO_ID) VALUES (:cedula, :nombres, :apellidos, :departamento)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'cedula' => $this->CEDULA,
            'nombres' => $this->NOMBRES,
            'apellidos' => $this->APELLIDOS,
            'departamento' => $this->DEPARTAMENTO_ID
            ]);
            return $result;
        }
        //recopilacion pafra insercion de marcas de pc
        public function anadirMarcaPc($marca){
        $this->MARCA = $marca;
        $result = $this->insertarMarcaPc();
        return $result;
    } 
        //insercion de marcas de pc
         private function insertarMarcaPc(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO marcas_pc (MARCA) VALUES (:marca)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'marca' => $this->MARCA,
            ]);
            return $result;
        }
        //recopilacion pafra insercion de marcas de pantalla
        public function anadirMarcaPanta($marcaPant){
        $this->MARCA = $marcaPant;
        $result = $this->insertarMarcaPanta();
        return $result;
    } 
        //insercion de marcas de pantalla
         private function insertarMarcaPanta(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "INSERT INTO modelos_pant (MARCA) VALUES (:marcaPant)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'marcaPant' => $this->MARCA,
            ]);
            return $result;
        }
//fin de la insercion 
//CONSULTA PARA LAS LISTAS
        public function select_persons(){
        $pdo = $this->pdo;
        $sql = "SELECT a.ID,u.NOMBRES,u.APELLIDOS ,a.DE,a.ASUNTO,m.marca FROM computadores c INNER JOIN actas a INNER JOIN marcas_pc m  INNER JOIN usuarios u ON c.ACTA_ID = a.ID AND c.MARCA_ID = m.ID AND a.USUARIO_ID = u.CEDULA ";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    public function select_pantallas(){
        $pdo = $this->pdo;
        $sql = "SELECT a.ID,u.NOMBRES,u.APELLIDOS ,a.DE,a.ASUNTO,m.MARCA FROM pantallas p INNER JOIN actas a INNER JOIN modelos_pant m INNER JOIN usuarios u ON p.ACTA_ID = a.ID AND p.MODELO_PANT = m.ID AND a.USUARIO_ID = u.CEDULA ";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
//FIN DE LAS CONSULTA
    //-----------ULTIMA ACTA GENERADA--------
    

    public function select_acta(){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(ID) AS acta FROM actas";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        
    }
    public function select_acta2(){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(ID)+1 AS acta FROM actas";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
        
    }
    public function select_cel(){
        $pdo = $this->pdo;
        $sql = "SELECT MAX(ID) cl FROM celular";
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }
    public function select_All($id){
        $pdo = $this->pdo;
        $sql = "SELECT a.ID,a.FECHA,u.NOMBRES,a.USUARIO_ID,u.APELLIDOS ,a.DE,a.ASUNTO,m.marca ,c.SERIAL, c.ACTIVO_FIJO,c.PROCESADOR,c.MEMORIA_RAM,c.SERIAL_CARGADOR FROM computadores c INNER JOIN actas a INNER JOIN marcas_pc m  INNER JOIN usuarios u ON c.ACTA_ID = a.ID AND c.MARCA_ID = m.ID AND  a.USUARIO_ID = u.CEDULA AND a.ID = $id";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    public function select_info_panta($id){
        $pdo = $this->pdo;
        $sql = "SELECT a.ID,a.FECHA,u.NOMBRES,a.USUARIO_ID,u.APELLIDOS ,a.DE,a.ASUNTO,m.MARCA ,p.SERIAL FROM pantallas p INNER JOIN actas a INNER JOIN modelos_pant m  INNER JOIN usuarios u ON p.ACTA_ID = a.ID AND p.MODELO_PANT = m.ID AND  a.USUARIO_ID = u.CEDULA AND a.ID = $id";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute();
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
      public function deleteUser($id){
        $pdo = $this->pdo;
        $sql = "DELETE FROM actas WHERE ID= :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'ID' => $id
            ]);
        return $result;
    }
     public function select_person($id){
        $pdo = $this->pdo;
        $sql = "SELECT * FROM computadores WHERE id = :id";
        $prepared = $pdo->prepare($sql);
        $resultQuery = $prepared->execute([
            'id' => $id
            ]);
        $result = $prepared->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    public function infoActualiza($id,$para, $cedula,$de, $asunto){
        $this->ID = $id;
        $this->PARA = $para;
        $this->CEDULA = $cedula;
        $this->DE= $de; 
        $this->ASUNTO = $asunto;
        $result = $this->actualizar();
        return $result;
    }
     private function actualizar(){
         $resu = array();
        $pdo = $this->pdo;
        $sql = "UPDATE acta SET PARA = :para, CEDULA= :cedula, DE= :de, ASUNTO=:asunto WHERE ID= :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([//$result = $query->execute([
            'id' => $this->ID,
            'para' => $this->PARA,
            'cedula' => $this->CEDULA,
            'de' => $this->DE,
            'asunto' => $this->ASUNTO,
            ]);
            return $result;
        }
    
}
?>