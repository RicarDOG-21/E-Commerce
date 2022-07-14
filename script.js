/* Menu hamburguesa | Responsive */

const bar = document.getElementById('bar');
const cerrar = document.getElementById('cerrar');
const nav = document.getElementById('navbar');

/* Para resaltar en que seccion de la pagina se esta en el navegador */

if (bar) {
	bar.addEventListener('click', () => {
		nav.classList.add('active');
	})
}

/* Para cerrar el menu hamburguesa */

if (cerrar) {
	cerrar.addEventListener('click', () => {
		nav.classList.remove('active');
	})
}

/* Dinamismo en el inicio de sesion y registro de cuenta */

const $btnLogin = document.querySelector('.login-btn'),
	  $btnRegister = document.querySelector('.register-btn'),
	  $Login = document.querySelector('.container_login'),
	  $Register = document.querySelector('.container_register');

document.addEventListener('click', e => {
	if (e.target === $btnLogin || e.target === $btnRegister) {
		$Login.classList.toggle('active-sign');
		$Register.classList.toggle('active-sign');
	}
})