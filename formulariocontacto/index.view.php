<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario contacto</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form method="post" action="index.php" enctype="multipart/form-data">

			<input type="text" class="form-control"  id="nombre" placeholder="Nombre:" name="nombre"/>
			<input type="email" class="form-control"  id="correo" placeholder="Correo:" name="correo"/>
			<textarea type="text" class="form-control" id="mensaje" placeholder="Mensaje:" name="mensaje"></textarea>

			<?php if(strlen($errores)>0){?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php }?>

			<?php if(strlen($enviado)>0){?>
				<div class="alert success">
					<?php echo $enviado; ?>
					<p>Enviado Correctamente</p>
				</div>
			<?php }?>

			<input type="submit" class="btn btn-primary" name="submit" value="Enviar Correo">
		</form>

	</div>
</body>
</html>