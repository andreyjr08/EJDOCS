$(document).ready(function(e) {
	
	$("#btnEnviarM").click(function() {
		 if( $("#marca").val().length == 0 ) {
			alert("Debes ingresar una marca valida");
			document.frmModal.marca.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/ingreso_marca_pc.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $('.modal-backdrop').remove();
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/computador/computador.php');
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
