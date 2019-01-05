<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$computador = new funciones();
$result = $computador ->marcas_pc();
$result2 = $computador ->select_acta();

session_start();

?>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion.js" ></script>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_marca_pc.js" ></script>
<div class="jumbotron">
<div class="panel-body">
<form class="form-horizontal" id="frmDatos" name="frmDatos" method="post" action="../ACTAS/COMPUTADOR/procesos/insertarC.php">
	<div id="cargaDeDatos">
		

			<div class="col-xs-12 col-md-12 col-lg-12">
				<label>NUMERO</label>
				<div class="input-group mb-3">
  					<input type="text" name="acta" id="acta" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php foreach($result2 as $acta){echo $acta['acta'];}?>" readonly="readonly">
				</div>
			</div>
			<div class="col-xs-3 col-md-5 col-lg-11">
				<label>COMPUTADOR</label>
				<div class="input-group mb-3">
					<select class="form-control dimension" id="inputGroupSelect01" name="computador" id="computador">
						<option selected>Seleccionar</option>
						  	<?php foreach($result as $computador){ ?>
                    			<option value="<?php echo $computador['ID']; ?>"><?php echo $computador['MARCA']; ?>
                    			</option> 
    						<?php } ?>
					</select>
				</div>
			</div>
			<!---------BOTON DE MODAL-->
			<div class="col-xs-1 col-md-1 col-lg-1">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalPc">
				  <i class="fas fa-user-plus fa-1x"></i>
				</button>
			</div>
				
			<div class="col-xs-12 col-md-12 col-lg-12">
				<label>ACTIVO FIJO</label>
				<div class="input-group mb-3">
  					<input type="text" name="activo_fijo" id="activo_fijo" class="form-control" placeholder="Activo Fijo" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			
			
			<div class="col-xs-12 col-md-12 col-lg-21">
				<label>SERIAL</label>
				<div class="input-group mb-3">
  					<input type="text" name="serial" id="serial" class="form-control" placeholder="Serial" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			
			
			<div class="col-xs-12 col-md-12 col-lg-21">
				<label>PROCESADOR</label>
				<div class="input-group mb-3">
  					<input type="text" name="procesador" id="procesador" class="form-control" placeholder="Procesador" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			
			<div class="col-xs-12 col-md-12 col-lg-21">
				<label>MEMORIA RAM</label>
				<div class="input-group mb-3">
  					<input type="text" name="memoria_ram" id="memoria_ram" class="form-control" placeholder="Memoria Ram" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-lg-21">
				<label>SERIAL CARGADOR</label>
				<div class="input-group mb-3">
  					<input type="text" name="serial_cargador" id="serial_cargador" class="form-control" placeholder="Serial Cargador" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>

			<div class="col-xs-12 col-md-12 col-lg-12">
				<!--<input  type="submit" id="btnEnviar" name="">-->
				<button class="btn btn-primary btn-lg-4 center-block" type="submit" id="btnEnviar" data-toggle="tooltip" title="Crear Documento">
			           <i class="fas fa-check-square fa-3x"></i>
			    </button>
			</div>		
		</div>
		</div>
	</div>
</form>
<!---------INICIO DE MODAL -->
<!-- The Modal -->
<form id="frmModal" name="frmModal" method="post" action="../ACTAS/COMPUTADOR/procesos/ingreso_marca_pc.php">
<div class="modal" id="myModalPc">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Crear Nuevo Equipo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        
      
      <div class="modal-body">
        <div class="col-lg-12">
			<label>MARCA</label>
				<div class="input-group mb-3">
  					<input type="text" name="marca" id="marca" class="form-control" placeholder="MARCA" aria-label="Username" aria-describedby="basic-addon1">
				</div>
		</div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" id="btnEnviarM" value="Crear">
      </div>

    </div>
  </div>
</div>
</div> 	
</form>
			<!-----------FIN DE MODAL-->
