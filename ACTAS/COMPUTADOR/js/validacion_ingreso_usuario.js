$(document).ready(function(e) {
			//alert("Debes ingresar una cedula valida");
	
	$("#btnEnviarU").click(function() {
		 if( $("#cedula2").val().length < 8 ) {
			alert("Debes ingresar una cedula valida");
			document.frmModal.cedula2.focus();
			return false;
		} if( $("#nombres").val().length == 0 ) {
			alert("Debes ingresar nombres validos");
			document.frmModal.nombres.focus();
			return false;
		} if( $("#apellidos").val().length == 0 ) {
			alert("Debes ingresar apellidos validos");
			document.frmModal.apellidos.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/ingreso_usuario.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 document.getElementById("frmModal").reset();
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/computador/lista.php');
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
