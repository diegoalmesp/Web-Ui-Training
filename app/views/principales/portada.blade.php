@include('estaticas.menu')

<div class="main-container">
	<div class="d-big-main wrapper clearfix">

		<article>
			<header>
				<h1>Bienvenidos!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
			</header>
			@foreach( $empresas as $empresa )
				<section class="d-articulo-portada">
					<h4>Empresa: {{ $empresa->nombre }}</h4>
					<h5>Cantidad empleados: {{ $empresa->cantidad_empleados }}</h5>
					<p>Dirección: {{ $empresa->direccion }}</p>
					
				</section>
			@endforeach
		</article>

	</div> <!-- #main -->
</div> <!-- #main-container -->

@include('estaticas.footer')