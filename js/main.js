$(document).ready(function(){
	$('#formLogin').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
			$.ajax({
				url:   'piechpi/procesador.php',
				dataType: 'json',
	            type:  'POST',
				data:  data,
				success: function(json) {
					if(json[0].sesion == "1"){
						alert("Bienvenido admin: " + json[0].nom);
						location.href='entra';	
					}else if(json[0].sesion == "0"){
						alert("Por favor: <br> No intente entrar si no cuenta con un usuario y contraseña validos.");	
	            		$('input[type=text]').focus();
	            		setTimeout(function(){
	            	    $('input[type=text]').val('');
	            	    $('input[type=password]').val('');
	            		},600);	

					}else if(json[0].sesion == "3"){
						alert("ADVERTENCIA: ya has iniciado sesion.");	
	            		$('input[type=text]').focus();
	            		setTimeout(function(){
	            	    $('input[type=text]').val('');
	            	    $('input[type=password]').val('');
	            		},600);	

					}else{
						alert( "ADVERTENCIA: " + json[0].error);	
	            		$('input[type=text]').focus();
	            		setTimeout(function(){
	            	    $('input[type=text]').val('');
	            	    $('input[type=password]').val('');
	            		},600);				
					}
				}
		   });
		})
});

