<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $usuarios = new funciones();
        $result2 = $usuarios ->ticket();
        $resu = array();
        $numeroTicket = $_POST['numeroTikect'];
        $ins = new funciones();
        $result = $ins->actualizarT($numeroTicket);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "El documento se a creado con exito";
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>
