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
	            		// $('input[type=text]').focus();
	            		// setTimeout(function(){
	            	    // $('input[type=text]').val('');
	            	    // $('input[type=password]').val('');
						// },600);		
						location.href='entra.php';	
					}else if(json[0].sesion == "0"){
						alert( "Usuario no encontrado.");	
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

