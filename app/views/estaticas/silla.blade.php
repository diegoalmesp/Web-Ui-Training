@include('estaticas.menu')

<div class="main-container">
	<div class="d-big-main wrapper clearfix">
		<a href="{{ URL::to('/empresas/mesa') }}">Ir a la mesa</a>
		<a href="#">
			<img src="http://www.sierra-madre.com/images/silla_wc301_asiento_naranja_frente.jpg?osCsid=27a8195ebc3e1e4e86e1ff31ba53797f" width="400" height="400">
		</a>
		<a href="{{ URL::to('/empresas/plato') }}">Ir al plato</a>
	</div> <!-- #main -->
</div> <!-- #main-container -->

@include('estaticas.footer')