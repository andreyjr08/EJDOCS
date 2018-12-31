$(document).ready(function(e) {
			alert("Debes ingresar una marca valida");
	
	$("#btnEnviarT").click(function() {
		alert("Debes ingresar una marca valida");
		 if( $("#numero").val().length == 0 ) {
			alert("Debes ingresar una marca valida");
			document.frmModal.numero.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/nuevo_ticket.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $('.modal-backdrop').remove();
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/ticket/ticket.php');
					 //$('.btncerrar_nueva_acta_computador2').remove();
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
