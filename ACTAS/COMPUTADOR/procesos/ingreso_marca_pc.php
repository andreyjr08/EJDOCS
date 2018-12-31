<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $marca = $_POST['marca'];

        $ins = new funciones();
        $result = $ins->anadirMarcaPc($marca);
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
