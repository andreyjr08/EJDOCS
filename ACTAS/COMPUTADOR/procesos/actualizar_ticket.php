<?php
 use clases_pdo\funciones;
    if (isset($_GET) && !empty($_GET)) {
        require_once('../clases/funciones.php');
        $usuarios = new funciones();
        $result2 = $usuarios ->ticket();
        $resu = array();
        $numeroTicket = $_GET['numero'];
        $ins = new funciones();
        $result = $ins->actualizarT($numeroTicket);
        if($result){
            header("location: ejdocs/aplicativo/index.php");
        
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            //echo json_encode($resu);

 
        }
?>
