<?php 

	$errores = '';
	$enviado = '';
	if(isset($_POST['nom'])) {
		var_dump($nombre,$correo,$mensaje);
		$nombre = $_POST=['nom'];
		$correo = $_POST=['correo'];
		$mensaje = $_POST=['men'];

		

		// if(!empty($nom)) {
			
		// 	//$nombre = filter_var($nom, FILTER_SANITIZE_STRING);
		// }else {
		// 	$errores.= 'Por favor ingresa un nombre <br />';
		// }

		//if(!empty($correo)) {
			//$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
			//var_dump($correo);
			//if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

				//$errores .= 'Por favor ingrese un correo valido <br />';
			//}//else {
				//$errores .= 'Por favor ingresa un correo <br />';
			//}
		//}

		// if (!empty($men)) {
		// 	$mensaje = htmlspecialchars($men);
		// 	$mensaje = trim($men);
		// 	$mensaje = stripslashes($men);
		// } else {
		// 	$errores .= 'Por favor ingresa el mensaje <br />';
		// }

		if(!$errores) {
			echo 'enviado';
			$enviar_a = 'ktalina.us.19@gmail.com';
			$asunto = 'Correo enviado desde mi pagina';
			$mensaje_preparado = "De: $nombre <br/>";
			$mensaje_preparado .= "Correo: $correo <br/>";
			$mensaje_preparado .= "Mensaje: $mensaje <br/>";

			//mail($enviar_a, $asunto, $mensaje_preparado); aun no funcion por el xampp

			$enviado = 'true';
		}

	}

	require 'index.view.php';
?>