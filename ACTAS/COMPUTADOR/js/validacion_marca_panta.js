$(document).ready(function(e) {
	
	$("#btnEnviarPant").click(function() {
		 if( $("#marcaPant").val().length == 0 ) {
			alert("Debes ingresar una marca valida");
			document.frmModal.marcaPant.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/ingreso_marca_panta.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $('.modal-backdrop').remove();
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/pantalla/pantalla.php');
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
