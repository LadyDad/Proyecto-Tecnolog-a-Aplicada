<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gestion Hotelera</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="./fonts/roboto.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/fontello.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<navbar>
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a href="index.php" class="active">Home</a>
			</li>
			<li class="nav-item">
				<a href="./views/quienes_somos.php">Qienes Somos</a>
			</li>
			<li class="nav-item">
				<a href="./views/servicios.php">Servicios</a>
			</li>
			<li class="nav-item">
				<a href="./views/contacto.php">Contacto</a>
			</li>
			<li class="nav-item">
				<a href="./views/cuenta.php">Cuenta</a>
			</li>
			<li class="nav-item">
				<a href="./views/intranet.php">intranet</a>
			</li>
		</ul>
	</navbar>
	<div class="contenido">
		<div class="banner">
			<img src="./img/banner.jpg">
			<div class="info">
				<h1>!SIÉNTETE COMO EN CASA!</h1>
			</div>
		</div>
		<div class="habitaciones">
			<h1>Tipo de habitaciones</h1>
			<div class="tipo-habitacion">
				<div class="card">
				  <img src="./img/habitacion doble.jpg" >
				  <p><strong>Habitación Doble: </strong>Habitaciones clásicas y elegantes, pero con detalles contemporáneos y una decoración exquisita. Muy acogedoras, dan una sensación de confort intemporal; diseñadas para momentos especiales y estancias tranquilas. Las habitaciones tienen entre 20 m2 y 25 m2 y vistas a la villa de Estoril. Camas individuales o cama de matrimonio, Queen o King size, baño en mármol, algunos con bañera y ducha separados. </p>
				</div>
				<div class="card">
				  <img src="./img/simple.jpg" alt="">
				  <p><strong>Habitación Simple: </strong>Las habitaciones individuales, con 18 m2, tienen cama individual, baño en mármol con bañera y vistas a la villa de Estoril. Además, le reciben con una bebida de bienvenida </p>
				</div>
				<div class="card">
				   <img src="./img/triple.jpg" alt="">
				   <p><strong>Habitación Triple: </strong>tiene capacidad para tres personas en una cama doble de 140 cm y una cama individual de 90 cm. Nuestras habitaciones triples gozan de vistas a la calle y cuentan con ventanas de doble acristalamiento que garantizan calma y tranquilidad. Todas nuestras habitaciones triples disponen de baño con bañera e inodoro privado. </p>
				</div>
			</div>
		</div>
		<div class="formulario">
         <form method="post">
			 <h3>Contáctanos</h3>
			 <div class="campos">
			   <label for="nombre">Nombre:</label>
			   <input type="text" name="nombre" id="nombre" placeholder="Nombre">
			 </div>
			 <div class="campos">
                <label for="apellido">Apellido:</label>
			   <input type="text" name="apellido" id="apellido" placeholder="Apellido">
			 </div>
			 <div class="opciones">
				 <h4>¿Que te gustaria recibir?</h4>
				 <input type="radio" name="radio" id="Promociones">Promociones
				 <input type="radio" name="radio" id="Servicios">Servicios
			 </div>
			 <div class="campos">
				<label for="Email">Email:</label>
				<input type="email" name="Email" id="Email" placeholder="**********@*****.com">
			 </div>
			 <div class="campos">
                <label for="telefono">Telefono:</label>
			   <input type="text" name="telefono" id="telefono" placeholder="322********">
			 </div>
           <button type="submit" class="btn"><strong>Enviar</strong></button>
		 </form>
		</div>
	</div>
	
</body>

</html>