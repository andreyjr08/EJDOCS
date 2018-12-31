<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$pantalla = new funciones();
$result = $pantalla ->marcas_pant();
$result2 = $pantalla ->select_acta();

session_start();

?>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_pantalla.js" ></script>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_marca_panta.js" ></script>
<div class="panel-body">
<form class="form-horizontal" id="frmDatos" name="frmDatos" method="post" action="../ACTAS/COMPUTADOR/procesos_pantalla/insertar_pantalla.php">
	<div id="cargaDeDatos">
		<div class="jumbotron">
			<div class="col-ms-12">
					<label>NUMERO</label>
					<div class="input-group mb-3">
  						<input type="text" name="acta" id="acta" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php foreach($result2 as $acta){echo $acta['acta'];}?>">
					</div>
			</div>
			<div class="col-lg-12">
					<label>PANTALLA</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01" name="pantalla" id="pantalla">
						  	<option selected>Seleccionar</option>
						  	<?php foreach($result as $pantalla){ ?>
                    			<option value="<?php echo $pantalla['ID']; ?>"><?php echo $pantalla['MARCA']; ?></option> 
    						<?php } ?>
						  </select>
						</div>
																		<!---------BOTON DE MODAL-->
<button type="button" class="btn btn-primary col-lg-1 h my-auto" data-toggle="modal" data-target="#myModalPant">
  <i class="fas fa-user-plus fa-1x"></i>
</button>
				</div>
		
				<div class="col-ms-12">
					<label>SERIAL</label>
					<div class="input-group mb-3">
  						<input type="text" name="serial" id="serial" class="form-control" placeholder="Serial" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>

				<!--<div class="col-ms-12">
					<a href="../ACTAS/COMPUTADOR/procesos/prueba.php" class="btn btn-primary fas fa-angle-double-right fa-2x" type="submit" id="btnEnviar" value="SIGUIENTE"></a>
				</div>-->
				<div class="col-lg-12">
					<input  type="submit" id="btnEnviar" name="">
					<!--<a class="btn btn-primary fas fa-check-square fa-3x btn-responsive" 
					type="submit" id="btnEnviarP"></a>-->
				</div>		
		</div>		
		
	</div>
</form>
<!---------INICIO DE MODAL -->
<!-- The Modal -->
<form id="frmModal" name="frmModal" method="post" action="../ACTAS/COMPUTADOR/procesos/ingreso_marca_panta.php">
<div class="modal" id="myModalPant">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Crear Nuevo Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        
      
      <div class="modal-body">
        <div class="col-lg-12">
			<label>MARCA</label>
				<div class="input-group mb-3">
  					<input type="text" name="marcaPant" id="marcaPant" class="form-control" placeholder="MARCA" aria-label="Username" aria-describedby="basic-addon1">
				</div>
		</div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" id="btnEnviarPant" value="Crear">
      </div>

    </div>
  </div>
</div>
</div> 	
</form>
			<!-----------FIN DE MODAL-->

</div>