<?php
session_start();
if(isset($_SESSION["validar"])){
  if($_SESSION["validar"] == 1){
	header("location:intranet.php");
	exit();
  }
}
require_once "../model/Login_Register.php";
$usuario = new Usuario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gestion Hotelera</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="../fonts/roboto.css" rel="stylesheet">
    <link rel="stylesheet"  href="../css/fontello.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body class="fondo_login">
	  <navbar>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="../index.php">Home</a>
			</li>
			<li class="nav-item">
			   <a href="./quienes_somos.php">Qienes Somos</a>
			</li>
			<li class="nav-item">
				<a href="./servicios.php">Servicios</a>
			 </li>
			 <li class="nav-item">
				<a href="./contacto.php">Contacto</a>
			 </li>
			 <li class="nav-item">
				<a href="./cuenta.php" class="active">Cuenta</a>
			 </li>
			 <li class="nav-item">
				<a href="./intranet.php">Intranet</a>
			 </li>
		</ul>
	  </navbar>
	  <div class="contenido ">
		  <div class="cuenta_bienvenido">
			<h1>BIENVENIDO</h1>
			<p>Si ya eres usuario, inicia sesión y disfruta de las diferentes promociones que tenemos para tí, si aun no eres cliente nuestro
				te invitamos a registrarte y pruebe nuestros servicios.
			</p>
		  </div>
          <div class="formularios">
			<div class="login">
				<h2>INICIAR SESIÓN</h2>
			<form action="" method="POST">
			  <label for="usuarioEntrar">Usuario:</label>
			  <input type="text" name="usuarioEntrar" id="usuarioEntrar" placeholder="Usuario...">
			  <label for="claveEntrar">Contraseña:</label>
			  <input type="password" name="claveEntrar" id="claveEntrar" placeholder="Contraseña">
			  <?php
                $usuario->Entrar(); 
			  ?>
			  <button type="submit" class="btn">Entrar</button>
			</form>
		   </div>

            <div class="register">
				<h2>REGISTRATE</h2>
			  <form  method="POST">
              <label for="usuario">Nombre:</label>
			  <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required>
			  <label for="telefono">Telefono:</label>
			  <input type="text" name="telefono" id="telefono" placeholder="Numero de celular" required>
			  <label for="correo">Correo:</label>
			  <input type="email" name="correo" id="correo" placeholder="Correo Eléctronico" required>
			  <label for="clave">Contraseña:</label>
			  <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
			  <label for="confirmacion">Confirmación:</label>
			  <input type="password" name="confirmacion" id="confirmacion" placeholder="Confirmación de contraseña" required>
			  <?php
				$usuario->NuevoUsuario();
			  ?>
			  <button type="submit" class="btn">Registrarse</button>
			  </form>
		    </div>
		  </div>
		  
           

	  </div>
</body>
</html>