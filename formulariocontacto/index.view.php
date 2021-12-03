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
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			/*<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">*/
			<input type="text" class="form-control"  id="nombre" name="nom" placeholder="Nombre:"/>

			<input type="text" class="form-control"  id="corre" name="correo" placeholder="Correo:"/>

			<textarea name="men" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>

			<?php elseif ($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>

	</div>
</body>
</html>