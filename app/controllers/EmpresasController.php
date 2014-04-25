<?php

class EmpresasController extends BaseController {
	
	protected $layout = "layouts.main";

	// en HomeController
	// public function getInicio() {
		// $this->layout->contenido = View::make('principales.portada');
	// }
	
	public function getObjetos() {
		$this->layout->contenido = View::make('principales.objetos');
	}

	public function getPlato()
	{
		$this->layout->contenido = View::make('estaticas.plato');
	}

	public function getMesa()
	{
		$this->layout->contenido = View::make('estaticas.mesa');
	}

	public function getSilla()
	{
		$this->layout->contenido = View::make('estaticas.silla');
	}

}
