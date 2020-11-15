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
		 <!--Salir del Intranet  -->
	     <div class="logout">
		   <form action="../model/logout.php" method="post" class="formlogout">
		      <button type="submit">LOGOUT</button>
		   </form>
		 </div>

         <div class="contenedor-intranet">
			 <h2>Agregar Nuevas Habitaciones</h2>
			 <form method="post">
			   <div>
				 <div class="campos-intranet">
				 <label for="numero">Numero de Habitación:</label>
				 <input type="text" name="numero" id="numero" placeholder="Indique el numero de la habitación">
				 </div>

				 <div class="campos-intranet">
				 <label for="tipo">Tipo de Habitación:</label>
				 <select name="tipohabitacion" id="tipohabitacion">
					 <option value="0">Selecionar</option>
					 <option value="Sencilla">sencilla</option>
					 <option value="Doble">doble</option>
					 <option value="Triple">triple</option>
				 </select>
				 </div>
				 
				 <div class="campos-intranet">
				 <label for="piso">Piso:</label>
				 <input type="text" name="piso" id="piso" placeholder="Indique el piso donde esta la habitación">
				 </div>
				 
				 <div class="campos-intranet">
				 <label for="precio">Precio:</label>
				 <input type="text" name="precio" id="precio" placeholder="Digite el precio de la habitación">
				 </div>
				 <?php
                   $crud->guardarHabitaciones();
				 ?>
				 <div class="opciones-habitaciones">
				 <button type="submit">GUARDAR</button>
				 <button type="reset">CANCELAR</button>
				 </div>
			   </div>
			 </form>
		 </div>

		 <div class="contenedor-intranet">
		   <h2>Nuevo Ingreso al Hotel</h2>
           <form method="post">
		     <div class="nuevo-ingreso">
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
                   $crud->guardarCheckin();
				 ?>
				 <div class="opciones-habitaciones">
				 <button type="submit">GUARDAR</button>
				 <button type="reset">CANCELAR</button>
				 </div>
			 </div>
			</form>
		 </div>


		 <!-- tabla listado de checkin -->
		 <div class="contenedor-intranet">
			 <h2>Listado de Nuevos Ingresos</h2>
		 <div class="tabla">
			 <table>
				<thead>
				 <tr>
                   <th>#</th>
                   <th>Habitación</th>
				   <th>Precio Habitación</th>
				   <th>Tiempo hospedado</th>
				   <th>Total a pagar</th>
				   <th>acciones</th>
				   <th>acciones</th>
                 </tr>
				</thead>
				<tbody>
				  <?php
				    $crud ->listarCheckin();
				  ?>
				</tbody>
			 </table>
		 </div>
		 </div>
	  </div>
</body>
</html>