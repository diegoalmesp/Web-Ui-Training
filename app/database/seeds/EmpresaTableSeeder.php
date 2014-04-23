<?php

class EmpresaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('empresas')->delete();

        for($i = 0; $i <= 20; $i++){
			Empresa::create(array(
				'nombre' => $this->getNombre(),
				'cantidad_empleados' => rand(10,5000),
				'direccion' => $this->getDireccion()
			));
		}
    }

	public function getNombre()
	{
		$nombres = array('globant', 'Banco de Córdoba', 'Novatium', 'Sohipren', 'Kiosko Render', 'Symfony', 'Laravel', 'Zend', 'Microsoft', 'Google', 'Yahoo');
		
		return $nombres[array_rand($nombres)].''.rand(100,9999);
	}

	public function getDireccion()
	{
		$direcciones = array(
			'Lorem ipsum dolor sit amet', 
			'consectetur adipisicing elit', 
			'sed do eiusmod tempor incididunt ut labore', 
			'labore et dolore magna aliqua', 
			'Ut enim ad minim veniam', 
			'quis nostrud exercitation ullamco', 
			'laboris nisi ut aliquip ex ea commodo consequat', 
			'Duis aute irure dolor in reprehenderit in voluptate', 
			'velit esse cillum dolore eu', 
			'Excepteur sint occaecat cupidatat', 
			'sunt in culpa qui officia deserunt mollit', 
			'Sed ut perspiciatis unde omnis iste natus'
		);
		
		return $direcciones[array_rand($direcciones)];
	}

}