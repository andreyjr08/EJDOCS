
	$("#btnEnviarTii").click(function() {
			alert("Debes ingresar un ticket valido");
		 
		/*	$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/nuevo_ticket.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/ticket/ticket.php');
					 $('.adicionar').remove();
					 document.getElementById("frmModal").reset();
				} else {
					alert(dataType.msj);
				}
			  },
			  error: function() {
				alert( "Los datos ingresados son incorrectos" );
			  }
			});
		
		return false;*/
	});

