@include('estaticas.menu')

<div class="main-container">
	<div class="d-big-main wrapper clearfix">
	<a href="{{ URL::to('/empresas/silla') }}">Ir a la silla</a>
		<a href="#">
			<img src="http://t0.gstatic.com/images?q=tbn:ANd9GcS382LYD3zo3BBK4TyqJadBtnyRKUAy12Pfox0v04idQ-ttppEJhw" width="400" height="400">
		</a>
		<a href="{{ URL::to('/empresas/mesa') }}">Ir a la mesa</a>
	</div> <!-- #main -->
</div> <!-- #main-container -->

@include('estaticas.footer')