<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cara | Carrito de compras</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<section id="header">
		<a href="indexphp"><img src="img/logo.png" class="logo" alt=""></a>

		<div>
			<ul id="navbar">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="tienda.php">Tienda</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="acerca.php">Acerca</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="ingresar.php">Ingresar</a></li>
				<li id="no_carrito"><a class="active" href="carrito.php"><i class="far fa-shopping-bag"></i></a></li>
				<a href="#" id="cerrar"><i class="far fa-times"></i></a>
			</ul>
		</div>
		<div id="mobile">
			<a href="carrito.php"><i class="far fa-shopping-bag"></i></a>
			<i id="bar" class="fas fa-outdent"></i>
		</div>
	</section>

	<section id="paginas-header" class="acerca-header">
		<h2>#carrito</h2>
		<p>Añade tus cupones y ahora hasta un 70% de descuento</p>
	</section>

	<section id="carrito" class="section-p1">
		<table width="100%">
			<thead>
				<tr>
					<td>Remover</td>
					<td>Imagen</td>
					<td>Producto</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Sub-total</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="#"><i class="far fa-times-circle"></i></a></td>
					<td><img src="img/products/f1.jpg" alt=""></td>
					<td>Camisa colorida</td>
					<td>$78</td>
					<td><input type="number" value="1"></td>
					<td>$78</td>
				</tr>
				<tr>
					<td><a href="#"><i class="far fa-times-circle"></i></a></td>
					<td><img src="img/products/f2.jpg" alt=""></td>
					<td>Camisa de flores blancas</td>
					<td>$78</td>
					<td><input type="number" value="1"></td>
					<td>$78</td>
				</tr>
				<tr>
					<td><a href="#"><i class="far fa-times-circle"></i></a></td>
					<td><img src="img/products/f3.jpg" alt=""></td>
					<td>Camisa de rosas</td>
					<td>$78</td>
					<td><input type="number" value="1"></td>
					<td>$78</td>
				</tr>
			</tbody>
		</table>
	</section>

	<section id="carrito-cupon" class="section-p1">
		<div id="cupon">
			<h3>¿Tienes un cupón?</h3>
			<div>
				<input type="text" placeholder="Inserte cupón">
				<button class="normal">Añadir</button>
			</div>
		</div>
		<div id="subtotal">
			<h3>Total a pagar</h3>
			<table>
				<tr>
					<td>Sub-totales</td>
					<td>$ 234</td>
				</tr>
				<tr>
					<td>Envío</td>
					<td>Grátis</td>
				</tr>
				<tr>
					<td><strong>Total</strong></td>
					<td><strong>$ 234</strong></td>
				</tr>
			</table>
			<button class="normal">Procesar compra</button>
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

