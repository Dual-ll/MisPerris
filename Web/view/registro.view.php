<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/estilo.css">
	<link rel="stylesheet"  href="css/style.css">
	<title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
	<div class="contenedor">
	<h1 class="titulo">Registrate</h1>
	<hr class="border">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
		<div class="form-group">
			<i class="icono izquierda fa fa-user" ></i> <input type="text" name="usuario" class="password" placeholder="Usuario" required>
		</div>
		<div class="form-group">
			<i class="icono izquierda fa fa-lock" ></i> <input type="password" name="password" class="password" placeholder="Contraseña" required>
		</div>
		<div class="form-group">
                    <i class="icono izquierda fa fa-lock" ></i> <input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña" required>
                    <button type="button" class="submit-btn fa fa-arrow-right" onclick="login.submit()"></button>
		</div>
		
            <?php if(!empty($errores)): ?>
            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>
                
            <?php endif; ?>
	</form>
	<p class="texto-registrate">
		¿ Ya tienes una cuenta ?
		<br>
		<a href="login.php">Iniciar Sesión</a>
	</p>
	</div>
</body>
</html>