<?php
require_once "../model/crud.php";
session_start();
if(isset($_SESSION["validar"])){
  if($_SESSION["validar"] == 0){
	header("location:cuenta.php");
	exit();
  }
  $crud = new Crud();
}
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
<body >
	  <navbar>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="../index.php">Home</a>
			</li>
			<li class="nav-item">
			   <a href="./quienes_somos.php">Qienes Somos</a>
			</li>
			<li class="nav-item ">
				<a href="./servicios.php" >Servicios</a>
			 </li>
			 <li class="nav-item">
				<a href="./contacto.php">Contacto</a>
			 </li>
			 <li class="nav-item">
				<a href="./cuenta.php">Cuenta</a>
			 </li>
             <li class="nav-item">
				<a href="./intranet.php" class="active">Intranet</a>
			 </li>
		</ul>
	  </navbar>
	  <div class="contenido">
		 <div class="contenedor-intranet">
		   <h2>Nuevo Ingreso al Hotel</h2>
           <form method="post">
		     <div class="nuevo-ingreso">
              <input type="text" name="id_actualizar" id="id_actualizar" value="<?php echo $_POST["id"]; ?>" style="display:none">
				<label>Habitaciones:</label>
				<select name="id_habitacion">
					<option value="0">Selecionar</option>
					<?php
                      $crud->listarHabitaciones();
					?>
				</select>
				<div class="campos-intranet">
				 <label for="dias">Dias Hospedado:</label>
				 <input type="text" name="dias" id="dias" placeholder="Digite los dias que esta en el hotel">
				 </div>
				 <?php
                   $crud->actualizar();
				 ?>
				 <div class="opciones-habitaciones">
				 <button type="submit">ACTUALIZAR</button>
				 <button type="reset">CANCELAR</button>
				 </div>
			 </div>
			</form>
		 </div>
	  </div>
</body>
</html>