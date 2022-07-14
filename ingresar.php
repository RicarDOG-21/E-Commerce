<?php
require 'con_db.php';

if(!empty($_SESSION["id"])){
	header("Location: index.php");
}	

if(isset($_POST["submit"])){
  $username = $_POST["usuario"];
  $email = $_POST["email"];
  $password = $_POST["contraseña"];
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE usuario = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('El nombre o correo ya ha sido usado'); </script>";
  } else{
      $query = "INSERT INTO users VALUES ('','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registro exitoso'); </script>";
    }
}
?>
<?php
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
	$usuarioemail = $_POST["usuarioemail"];
	$password = $_POST["contra"];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usuarioemail' OR email = '$usuarioemail'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
	  if($password == $row['contra']){
		$_SESSION["login"] = true;
		$_SESSION["id"] = $row["id"];
		header("Location: indexlogout.php");
	  }
	  else{
		echo
		"<script> alert('Contraseña incorrecta'); </script>";
	  }
	}
	else{
	  echo
	  "<script> alert('Usuario no registrado'); </script>";
	}
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<title>Cara | Cuenta</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<section id="header">
		<a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>

		<div>
			<ul id="navbar">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="tienda.php">Tienda</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="acerca.php">Acerca</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a class="active" href="ingresar.php">Ingresar</a></li> 
				<li id="no_carrito"><a href="carrito.php"><i class="far fa-shopping-bag"></i></a></li>
				<a href="#" id="cerrar"><i class="far fa-times"></i></a>
			</ul>
		</div>
		<div id="mobile">
			<a href="carrito.php"><i class="far fa-shopping-bag"></i></a>
			<i id="bar" class="fas fa-outdent"></i>
		</div>
	</section>

	<section id="container_formpage">
		<div class="container_form container_register">
			<div class="welcome-back">
				<div class="message">
					<h2>Bienvenido a Cara</h2>
					<p>Si ya tiene una cuenta, ingrese sus datos aquí.</p>
					<button class="login-btn">Iniciar sesión</button>
				</div>
			</div>
			<form method="post "class="form">
				<h2 class="create-account">Crear una cuenta</h2>
				<div class="iconos">
					<div class="border-icon">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="border-icon">
						<i class="fab fa-pinterest-p"></i>
					</div>
					<div class="border-icon">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
				<p class="cuenta-gratis">Crear una cuenta gratis.</p>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario">
				<input type="email" name="email" id="email" placeholder="ejemplo123@caramail.com">
				<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
				<input id="submit" type="submit" value="Registrarse">
						
			</form>
		</div>

		<div class="container_form container_login">
			<form action="iindex.php" method="post" class="form">
				<h2 class="create-account">Iniciar sesión</h2>
				<div class="iconos">
					<div class="border-icon">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="border-icon">
						<i class="fab fa-pinterest-p"></i>
					</div>
					<div class="border-icon">
						<i class="fab fa-facebook-f"></i>
					</div>
				</div>
				<p class="cuenta-gratis">¿Aún no tiene una cuenta?</p>
				<input type="text" name="usuarioemail" id="usuarioemail" placeholder="Usuario">
				<input type="password" name="contra" id="contra" placeholder="Contraseña">
				<input id="submit" type="submit" value="Iniciar sesión">
			</form>
			<div class="welcome-back">
				<div class="message">
					<h2>Bienvenido de nuevo.</h2>
					<p>Si no tiene una cuenta, ingrese sus datos aquí.</p>
					<button class="register-btn">Registrarse</button>
				</div>
			</div>
		</div>
	</section>
	<footer class="section-p1">
		<div class="col">
			<img class="logo-footer" src="img/logo.png" alt="">
			<h4>Contacto</h4>
			<p><strong>Dirección: </strong>El Valle del Espíritu Santo. Nueva Esparta</p>
			<p><strong>Teléfono: </strong>+58 412-357-7045</p>
			<p><strong>Hora: </strong>10:00 A.M. - 6:00 P.M. Lun - Sab</p>
			<div class="siguenos">
				<h4>Síguenos</h4>
				<div class="icon">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-pinterest-p"></i>
					<i class="fab fa-youtube"></i>
				</div>
			</div>
		</div>
		<div class="col">
			<h4>Acerca</h4>
			<a href="#">Sobre nosotros</a>
			<a href="#">Información del delivery</a>
			<a href="#">Políticas de privacidad</a>
			<a href="#">Términos y condiciones</a>
			<a href="#">Contáctanos</a>
		</div>
		<div class="col">
			<h4>Mi Cuenta</h4>
			<a href="#">Iniciar sesión</a>
			<a href="#">Ver mi carrito</a>
			<a href="#">Mi lista de deseos</a>
			<a href="#">Rastrear mi envío</a>
			<a href="#">Ayuda</a>
		</div>
		<div class="col instalar">
			<h4>Instalar App</h4>
			<p>Desde la Appstore o Google Play</p>
			<div class="fila">
				<img src="img/pay/app.jpg" alt="">
				<img src="img/pay/play.jpg" alt="">
			</div>
			<p>Vías de Pago Seguras</p>
			<img src="img/pay/pay.png" alt="">
		</div>
		<div class="copyright">
			<p>&copy 2022, Cara - Tienda Online</p>
		</div>
	</footer>

	<script src="script.js"></script>
</body>

</html>