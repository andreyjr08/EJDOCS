<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $marcaPant = $_POST['marcaPant'];

        $ins = new funciones();
        $result = $ins->anadirMarcaPanta($marcaPant);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "Agregado con exito";
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>
