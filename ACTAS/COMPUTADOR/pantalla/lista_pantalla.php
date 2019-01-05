<?php
require_once '../clases/funciones.php';
use clases_pdo\funciones;
$usuarios = new funciones();
$result2 = $usuarios ->departamentos();
$result = $usuarios ->select_pantallas();
?>

<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_ingreso_usuario_panta.js" ></script>

<link rel="stylesheet" href="../../CSS/bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../ACTAS/CSS/css_list_actas.css">
<div id="none">
<div class="box-header">
    <i class="ion ion-clipboard"></i>
    <div class="pull-right box-tools col-md-1 col-lg-1 col-xs-1">
        <button class="btn btn-primary btn-sm" id="nueva_pantalla" data-toggle="tooltip" title="Nueva acta pantalla">
            <i class="fas fa-plus" aria-hidden="true"></i>
        </button>
    </div>
    <div class="pull-right box-tools col-md-11 col-lg-11 col-xs-11">
        <button class="btn btn-primary btn-sm" id="nuevo_computador_lista" data-toggle="tooltip" title="Acta computador">
           <i class="fas fa-laptop"></i>
        </button>
        <button class="btn btn-primary btn-sm" id="nueva_pantalla_lista" data-toggle="tooltip" title="Acta pantalla">
            <i class="fas fa-tv"></i>
        </button>
        </button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" title="Agregar Usuario"> 
          <i class="fas fa-user-plus"></i>
        </button>

    </div>
</div>

<div class="box-body">
    <table class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
    <thead>
        <tr class="negrita">
            <td>NUMERO</td>
            <td>PARA</td>
            <td>DE</td>
            <td>ASUNTO</td>
            <td>PANTALLA</td>
            <td>REPORTE</td>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach ($result as $usuarios) {
            ?>
            <tr>
                <td><?php echo $usuarios['ID']?></td>
                <td><?php echo $usuarios['NOMBRES'], $usuarios['APELLIDOS'] ?></td>
                <td><?php echo $usuarios['DE'] ?></td>
                <td><?php echo $usuarios['ASUNTO'] ?></td>
                <td><?php echo $usuarios['MARCA'] ?></td>
                <!--BOTON REPORTE-->
                <td><a href="../ACTAS/COMPUTADOR/reporte_pantalla/plantilla.php?id=<?php echo $usuarios['ID']?>" target="_Blank" class= "btn btn-danger fas fa-file-pdf fa-1x"></a></td>
            </tr>
            <?php
            }
        ?>
    </tbody>
    </table>
</div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#tabla").DataTable();
    });
</script>



<!-- Modal -->
<form  id="frmModal" name="frmModal" method="post" action="../ACTAS/COMPUTADOR/procesos/ingreso_usuario.php">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-lg-12">
            <label>#CEDULA</label>
                <div class="input-group mb-3">
                    <input type="number" name="cedula2" id="cedula2" class="form-control" placeholder=" Cedula" aria-label="Username" aria-describedby="basic-addon1">
                </div>
        </div>
        <div class="col-lg-12">
                        <label>NOMBRES</label>
                            <div class="input-group mb-3">
                                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="nombres" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
        </div>
        <div class="col-lg-12">
            <label>APELLIDOS</label>
                <div class="input-group mb-3">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                </div>
        </div>
        <div class="col-lg-12">
            <label>DEPARTAMENTO</label>
                <div class="input-group mb-3">
                    <select class="form-control dimension" id="inputGroupSelect01" name="departamento" id="para">
                        <option selected>Seleccionar</option>
                            <?php foreach($result2 as $departamento){ ?>
                                <option value="<?php echo $departamento['ID']; ?>"><?php echo $departamento['NOMBRE']; ?>
                                </option> 
                                    <?php } ?>
                            </select>
                </div>
        </div>

      </div>
     <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" id="btnEnviarU" value="Crear">
                  </div>
    </div>
  </div>
</div>
</form>