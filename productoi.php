<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cara | Tienda</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<section id="header">
		<a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>

		<div>
			<ul id="navbar">
				<li><a href="index.php">Inicio</a></li>
				<li><a class="active" href="tienda.php">Tienda</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="acerca.php">Acerca</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="ingresar.php">Ingresar</a></li>
				<li id="no_carrito"><a href="carrito.php"><i class="far fa-shopping-bag"></i></a></li>
				<a href="#" id="cerrar"><i class="far fa-times"></i></a>
			</ul>
		</div>
		<div id="mobile">
			<a href="carrito.php"><i class="far fa-shopping-bag"></i></a>
			<i id="bar" class="fas fa-outdent"></i>
		</div>
	</section>

	<section id="pro-detalles" class="section-p1">
		<div class="pro-indi-img">
			<img src="img/products/f1.jpg" width="100%" id="proprins">
			
			<div class="grupo-pro-peque">
				<div class="grupo-pro-col">
					<img src="img/products/f1.jpg" width="100%" class="prosec" alt="">
				</div>
				<div class="grupo-pro-col">
					<img src="img/products/f2.jpg" width="100%" class="prosec" alt="">
				</div>
				<div class="grupo-pro-col">
					<img src="img/products/f3.jpg" width="100%" class="prosec" alt="">
				</div>
				<div class="grupo-pro-col">
					<img src="img/products/f4.jpg" width="100%" class="prosec" alt="">
				</div>
			</div>
		</div>
		<div class="pro-indi-detalles">
			<h6>Inicio / Camisa</h6>
			<h4>Camisa a la moda para hombres</h4>
			<h2>$78</h2>
			<select>
				<option>Seleccione talla</option>
				<option>Pequeña</option>
				<option>Grande</option>
				<option>XL</option>
				<option>XXL</option>
			</select>
			<input type="number" value="1">
			<button class="normal">Añadir al carrito</button>
			<h4>Detalles del producto</h4>
			<p>La camiseta Gildan Ultra Cotton está hecha de 100% algodón, este jersey de punto preencogido de ajuste clásico proporciona una comodidad inigualable con cada uso. Con un cuello y hombros sellados, y un cuello de doble aguja sin costuras, y disponible en una gran gama de diseños que te harán volar la cabeza.</p>
		</div>
	</section>

	<section id="producto1" class="section-p1">
		<h2>Productos Destacados</h2>
		<p>Nuevos diseños de nuestra colección</p>
		<div class="pro-contenedor">
			<div class="pro" onclick="window.location.href='productoi.html';">
				<img src="img/products/n1.jpg" alt="">
				<div class="descrip">
					<span>cara</span>
					<h5>Camisa manga larga azul</h5>
					<div class="estrellas">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>$49.99</h4>
				</div>
				<a href="#"><i class="fal fa-shopping-cart carrito"></i></a>
			</div>
			<div class="pro" onclick="window.location.href='productoi.html';">
				<img src="img/products/n2.jpg" alt="">
				<div class="descrip">
					<span>cara</span>
					<h5>Camisa manga larga cuadriculada</h5>
					<div class="estrellas">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>$55</h4>
				</div>
				<a href="#"><i class="fal fa-shopping-cart carrito"></i></a>
			</div>
			<div class="pro" onclick="window.location.href='productoi.html';">
				<img src="img/products/n3.jpg" alt="">
				<div class="descrip">
					<span>cara</span>
					<h5>Camisa manga larga blanca</h5>
					<div class="estrellas">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>$49.99</h4>
				</div>
				<a href="#"><i class="fal fa-shopping-cart carrito"></i></a>
			</div>
			<div class="pro" onclick="window.location.href='productoi.html';">
				<img src="img/products/n4.jpg" alt="">
				<div class="descrip">
					<span>cara</span>
					<h5>Camisa con diseño</h5>
					<div class="estrellas">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>$55</h4>
				</div>
				<a href="#"><i class="fal fa-shopping-cart carrito"></i></a>
			</div>
		</div>
	</section>

	<section id="novedades" class="section-p1 section-m1">
		<div class="nov-txto">
			<h4>Regístrate para recibir novedades</h4>
			<p>Recibe correos sobre lo último en tendencias y <span>ofertas especiales.</span></p>
		</div>
		<div class="formulario">
			<input type="text" placeholder="Tu dirección de correo">
			<button class="normal">Registrar</button>
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

	<script>
		var proprins = document.getElementById('proprins');
		var prosec = document.getElementsByClassName('prosec');

		prosec[0].onclick = function() {
			proprins.src = prosec[0].src;
		}
		prosec[1].onclick = function() {
			proprins.src = prosec[1].src;
		}
		prosec[2].onclick = function() {
			proprins.src = prosec[2].src;
		}
		prosec[3].onclick = function() {
			proprins.src = prosec[3].src;
		}
	</script>

	<script src="script.js"></script>

</body>

</html>