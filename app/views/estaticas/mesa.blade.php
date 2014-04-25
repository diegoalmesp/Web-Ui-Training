@include('estaticas.menu')

<div class="main-container">
	<div class="d-big-main wrapper clearfix">
		<a href="{{ URL::to('/empresas/plato') }}">Ir al plato</a>
		<a href="#">
			<img src="http://palabrasenjapones.com/wp-content/uploads/2009/12/0805-Mesa-en-japones-300x240.jpg" width="400" height="400">
		</a>
		<a href="{{ URL::to('/empresas/silla') }}">Ir a la silla</a>
	</div> <!-- #main -->
</div> <!-- #main-container -->

@include('estaticas.footer')