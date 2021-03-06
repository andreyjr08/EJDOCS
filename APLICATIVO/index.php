<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    
    <script type="text/javascript" language="javascript" src="js/jquery-1.11.2.js" ></script>
    <script type="text/javascript" language="javascript" src="js/ajax_lista.js" ></script>
    <link rel="stylesheet" href="../CSS/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="../ACTAS/COMPUTADOR/js/jquery.min.js">
    <link rel="stylesheet" href="../ACTAS/CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../ACTAS/CSS/style.css">
    <link rel="stylesheet" href="../ACTAS/CSS/css.css" type="text/css">
    <link rel="stylesheet" href="../CSS_LIST/css_list.css" type="text/css">

  <title>Actas</title>
  <meta charset="utf-8">
  
</head>
<body>
    <div class="p-4 mb-4 bg-primary text-white hed">
        <div class="row">
                <div class="col-xs-11 col-md-11 col-lg-11  text-right sesion">
                    <span><?php  if(isset($_SESSION['usuario'])) echo $_SESSION['usuario'];?></span>
                    <i class="fas fa-power-off" title="Cerrar sesion"></i>                
                </div>
                <div class="col-md-10 col-lg-10 col-xs-10">
                    <h1 class="display-1">EJDOCS</h1>            
                </div>
            </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-xs-2">
          <div id="header"> 
            <ul id="menu-v">
                <div id="opciones">
                <li><a href="EJDOCS/APLICATIVO/index.php">Inicio</a></li>
                </div>
                <li><a href="#" >Tikect</a></li>
                
                <li><a href="#" class="arrow">Actas</a>
                    <ul>                
                      <div id="opciones">
                        <li><a href="../ACTAS/COMPUTADOR/computador/lista.php" role="button">Computador</a></li>
                        <li><a href="../ACTAS/COMPUTADOR/pantalla/lista_pantalla.php">Pantallas</a></li>
                        </div>
                    </ul>
                </li>

            </ul>   
        </div>
        </div>
        

<!-- Muestra la pagina o llama la otra pagina por ajax para no redireccionar por url-->
    <div class="col-md-10 col-lg-10 col-xs-10">
        <div id='oculto'  class="col-sm-12">
            <div class="panel-group show col-sm-12" id="contenedor">
                <div class="panel panel-primary">
                    <div class="panel-heading" id="titulo">Panel Principal</div>
                    <div class="panel-body">
                        <div class="form-group" id="contenido">
                            <div class="col-xs-4 col-md-4 col-lg-4">
        <button class="btn btn-warning btn-lg-4" id="nuevo_ticket_PROXIMO" data-toggle="tooltip" title="Disponible en pocos dias">
           <i class="fas fa-ticket-alt fa-10x"></i>
        </button>
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
        <button class="btn btn-warning btn-lg-4" id="nuevo_computador_lista" data-toggle="tooltip" title="Actas de computador">
           <i class="fas fa-laptop fa-10x"></i>
        </button>
    </div>
    <div class="col-xs-4 col-md-4 col-lg-4">
        <button class="btn btn-warning btn-lg-4" id="nueva_pantalla_lista" data-toggle="tooltip" title="Actas de pantallas">
           <i class="fas fa-tv fa-10x"></i>
        </button>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="../ACTAS/COMPUTADOR/js/jquery.min.js"></script>
    <script src="../ACTAS/COMPUTADOR/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones JS para traer el menú de computador -->
    <script src="../ACTAS/COMPUTADOR/js/computador.js"></script>
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>
    