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

}
