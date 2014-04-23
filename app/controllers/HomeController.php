<?php

class HomeController extends BaseController {
	
	protected $layout = "layouts.main";
	
	public function getInicio()
	{
		$empresas = Empresa::all();
		
		// $this->layout->contenido = View::make('estaticas.portada');
		
		$this->layout->contenido = View::make('principales.portada')->with('empresas', $empresas);
	}

	public function getPrivacidad()
	{
		$this->layout->contenido = View::make('estaticas.privacidad');
	}

	public function getTerminos()
	{
		$this->layout->contenido = View::make('estaticas.terminos');
	}

	public function getContacto()
	{
		$this->layout->contenido = View::make('estaticas.contacto');
	}
}