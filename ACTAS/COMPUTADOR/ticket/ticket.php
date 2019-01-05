<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$usuarios = new funciones();
$result = $usuarios ->ticket();


session_start();
?>


<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_ticket.j" ></script>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_actualiza_ticket.js" ></script>
<form id="frmDatosP" name="frmDatosP" method="post" action="../ACTAS/COMPUTADOR/procesos/actualizar_ticket.php">
		
				<div class="col-xs-12 col-md-12 col-lg-12">
					<!---------BOTON DE MODAL-->
					<button type="button" class="btn btn-primary adicionar" data-toggle="modal" data-target="#myModal">
  					<i class="fas fa-plus"></i>
					</button>
				</div>
	<div class="col-ms-12" id="cargaDeDatos">
		
				<?php foreach($result as $ticket){ 
					          $variable= $ticket['NUMERO'];
    if (strlen($variable)>0) {

$text = $variable;  
$var2 = strlen($text); //var2 = 26 
$var = 0; 
$var5 = 0;

  //$var3 = $var - $var3; //var3 = 26, ya que es la 1º vez que pasa por aquí 
  if ($var2 > 5) { //como var3 > 20, sigue 
    $var4 = $var2 / 5; //var4 = 1.15 
    $var4 = explode(".",$var4); //por un lado 1 y por otro 15 
    $var4 = $var4[0];//var4 = 1 
    if ($var4 > 0) {  
      $var5++; //var5 = 1 
      $var3 = $var5 * 5; //var3 = 20 
      $text = substr($text,0,$var3)."-".substr($text,$var3);  
      //text = abcdefghijklmnñopqrs tuvwxyz 
      $var4--; //resta uno para que var sea menor que cero y no haga más este while 
    }         
  } 
}     
					?>

				<div class="col-xs-6 col-md-4 col-lg-3 div_primario">
					<label>NUMERO</label>
					<div class="div_secundario">
						<input type="text" name="numeroTikect" class="numeroTikect" value="<?php echo $text; ?>" readonly="readonly"/>
					</div>
					<div class="">
					<!--<input type="submit" value="USADO" name="BtnEnviarInfo" class="col-xs-12 col-md-12 col-lg-12 center-block btn btn-secondary">-->
					<a href="../ACTAS/COMPUTADOR/procesos/actualizar_ticket.php?numero=<?php echo $ticket['ID']?>"class= "col-xs-12 col-md-12 col-lg-12 center-block btn btn-secondary">USADO</a>
					</div>
				</div>
    			<?php } ?>
		
	</div>
</form>
					<button id="btnEnviarTii" name="btnEnviarTii"></button>




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
