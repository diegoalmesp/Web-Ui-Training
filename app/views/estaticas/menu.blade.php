<div class="d-menu">
	<div class="wrapper clearfix">
		<nav>
			<ul class="d-menu-superior">
				<li><a href="#">iniciar sesión</a></li>
				<li><a href="#">crear cuenta</a></li>
			</ul>
		</nav>
	</div>
</div>

<div class="header-container">
	<header class="wrapper clearfix">
		<h1 class="title">Logotipo/Nombre</h1>
		<nav>
			<ul class="d-inf-menu">
				<li><a href="{{ URL::to('/') }}">inicio</a></li>
				<li><a href="{{ URL::to('/empresas/objetos') }}">objetos</a></li>
				<ul class="d-menu-escondido">
					<li><a href="#">Plato</a></li>
					<li><a href="#">Mesa</a></li>
					<li><a href="#">Silla</a></li>
				</ul>
				<li><a href="{{ URL::to('/contacto') }}">contacto</a></li>
			</ul>
		</nav>
	</header>
</div>