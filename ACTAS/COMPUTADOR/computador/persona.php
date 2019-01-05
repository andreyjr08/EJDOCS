<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$usuarios = new funciones();
$result = $usuarios ->usuarios();
$result2 = $usuarios ->departamentos();
$result3 = $usuarios ->select_acta2();
session_start();
?>

<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacionP.js" ></script>
<div class="box-header">
	<div class="pull-right box-tools">
		<button type="button" class="btn btn-danger btncerrar_nueva_acta_computador2">
			<i class="fas fa-window-close"></i>
		</button>

	</div>
</div>

<form id="frmDatosP" name="frmDatosP" method="post" action="../ACTAS/COMPUTADOR/procesos/insertarP.php">
	<div class="col-ms-12" id="cargaDeDatos">
		<div class="jumbotron">
			<div class="col-xs-6 col-md-12 col-lg-12">
					<label>NUMERO</label>
					<div class="input-group mb-3">
  						<input type="text" name="numero" id="numero" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" value="<?php foreach($result3 as $acta){echo $acta['acta'];}?>" disabled="disabled">
					</div>
				</div>
				
				<div class="col-lg-12">
					<label>PARA</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01" name="para" id="para">
						  	<option selected>Seleccionar</option>
						  	<?php foreach($result as $usuarios){ ?>
                    			<option value="<?php echo $usuarios['CEDULA']; ?>"><?php echo $usuarios['NOMBRES']." ".$usuarios['APELLIDOS']; ?></option> 
    						<?php } ?>
						  </select>
						</div>
				</div>
	<div class="col-lg-12">
					<label>DE</label>
					<div class="input-group mb-2">
  						<input type="text" name="de" id="de" value="<?php  if(isset($_SESSION['departamento'])) echo $_SESSION['departamento'];?>" class="form-control" placeholder="De" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-lg-12">
					<label>ASUNTO</label>
					<div class="input-group mb-3">
  						<input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					
				</div>
				<input type="text" id="creador" name="creador"  value="<?php  if(isset($_SESSION['id'])) echo $_SESSION['id'];?>"  style="visibility:hidden">

				<div class="col-lg-12">
					<!--<input  type="submit" id="btnEnviarP" name="">-->
					<button class="btn btn-primary btn-lg-4 center-block" type="submit" id="btnEnviarP" data-toggle="tooltip" title="Crear Documento">
						<i class="fas fa-forward fa-3x"></i>
			        </button>
				</div>
		
		</div>
		</div>
	</form>
</div>