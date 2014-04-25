@include('estaticas.menu')

<div class="main-container">
	<div class="d-big-main wrapper clearfix">

		<article>
			<header>
				<h2>Página de contacto!</h2>
				<p>El siguiente formulario tiene validación de html5 (lado navegador)</p>
				{{ Form::open(array('url' => 'foo/bar')) }}
				<table>
					<tr>
						<td>{{ Form::label('user', 'Tu nombre: ') }}</td>
						<td>{{ Form::text('username', $value = null, $attributes = array('required')) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('age', 'Edad: ') }}</td>
						<td>{{ Form::text('age', $value = null, $attributes = array('required')) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('email', 'Email: ') }}</td>
						<td>{{ Form::email('email', $value = null, $attributes = array('required')) }}</td>
					</tr>
					<tr>
						<td>{{ Form::label('file', 'Sube un archivo: ') }}</td>
						<td>{{ Form::file('file', $attributes = array('required')) }}</td>
					</tr>
					<tr><td>{{ Form::submit('Enviar') }}</td></tr>
				</table>
				{{ Form::close() }}
			</header>
		</article>

	</div> <!-- #main -->
</div> <!-- #main-container -->

@include('estaticas.footer')