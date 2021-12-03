<?php 
	$errores = '';
	$enviado = '';

	function is_valid_email($str){
  	$matches = null;
  	return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $str, $matches));
	}


	if(isset($_REQUEST["submit"])) {

		if((strlen($_REQUEST["nombre"])===0)){
			$errores .= 'Por favor ingresa un nombre <br />';
		}
		
		if (strlen($_REQUEST["correo"])===0) {
			$errores .= 'Por favor ingrese un correo <br />';
		}else{
			if (!is_valid_email($_REQUEST["correo"])) {
				$errores .= 'Por favor ingrese un correo valido <br />';
			}
		}
		if(strlen($_REQUEST["mensaje"])===0){
			$errores .= 'Por favor ingresa el mensaje <br />';
		}

		if(!$errores) {
			$enviar_a = 'ktalina.us.19@gmail.com';
			$asunto = 'Correo enviado desde mi pagina';
			
			$mensaje_preparado = "De: ".$_REQUEST["nombre"]."<br/>";
			$mensaje_preparado .= "Correo: ".$_REQUEST["correo"]."<br/>";
			$mensaje_preparado .= "Mensaje: ".$_REQUEST["mensaje"]."<br/>";

		  //mail($enviar_a, $asunto, $mensaje_preparado); aun no funcion por el xampp

			$enviado = 'true';
		}

	}
	require ('index.view.php');
?>