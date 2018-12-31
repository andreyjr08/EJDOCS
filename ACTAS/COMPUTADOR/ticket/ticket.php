<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$usuarios = new funciones();
$result = $usuarios ->usuarios();
$result2 = $usuarios ->departamentos();
$result3 = $usuarios ->select_acta2();

session_start();

?>

<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacionP.j" ></script>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_ticket.js" ></script>
<form id="frmDatosP" name="frmDatosP" method="post" action="../ACTAS/COMPUTADOR/procesos/nuevo_icket.php">
		
				<div class="col-xs-12 col-md-12 col-lg-12">
					<!---------BOTON DE MODAL-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  					<i class="fas fa-plus"></i>
					</button>
				</div>
	<div class="col-ms-12" id="cargaDeDatos">
		
				<!--<?php foreach($result as $usuarios){ ?>
                    			<option value="<?php echo $usuarios['CEDULA']; ?>"><?php echo $usuarios['NOMBRES']." ".$usuarios['APELLIDOS']; ?>
                    			</option> 
    						<?php } ?>-->
				<div class="col-xs-6 col-md-4 col-lg-3 div_primario">
					<label>NUMERO</label>
					<div class="div_secundario">
						<label>23423-32322</label>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 center-block btn btn-secondary">
					USADO
					</div>
				</div>

	</div>
</form>



<form id="frmModal" name="frmModal" method="post" action="../ACTAS/COMPUTADOR/procesos/nuevo_ticket.php">
	<!---------INICIO DE MODAL -->
		<!-- The Modal -->
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
			    <div class="modal-content">
			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Crear Nuevo Ticket</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <!-- Modal body -->
	
			      <div class="modal-body">
			        <div class="col-lg-12">
						<label>NUMERO</label>
							<div class="input-group mb-3">
			  					<input type="text" name="numero" id="numero" class="form-control" placeholder="Numero" aria-label="Username" aria-describedby="basic-addon1">
							</div>
					</div>
			      </div>
			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        <input type="submit" id="btnEnviarT" value="Crear">
			      </div>

			    </div>
			</div>
		</div> 	
	<!-----------FIN DE MODAL-->
</form>
