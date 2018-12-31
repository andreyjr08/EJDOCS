
$(document).ready(function(e) {(

	$("#btnEnviarT").click(function() {
		 if {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/actualizar_ticket.php",
			  type: 'post',
			  data: $("#frmDatosP").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/ticket/ticket.php');
					 $('.adicionar').remove();
				} else {
					alert(dataType.msj);
				}
			  },
			  error: function() {
				alert( "Los datos ingresados son incorrectos" );
			  }
			});
		}
		return false;
	});
});
