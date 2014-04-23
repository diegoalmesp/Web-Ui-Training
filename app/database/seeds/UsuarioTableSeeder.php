<?php

class UsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->delete();

        for($i = 0; $i <= 100; $i++){
			Usuario::create(array(
				'nombres' => $this->getNombres(),
				'apellidos' => $this->getApellidos()
			));
		}
    }
	
	public function getNombres()
	{
		$nombres1 = array('Carlos', 'Pedro', 'Juana', 'Natalia', 'Ra�l', 'Juan', 'Mariela', 'Alejandra', 'Trinidad', 'Jorge', 'Diego');
		$nombres2 = array('Pablo', 'Mar�a', 'Americo', 'Cirilo', 'Isidoro', 'Patoruz�', 'Amado', 'Herminio', 'Ramona', 'Ger�nimo', 'Zara');

		return $nombres1[array_rand($nombres1)].' '.$nombres2[array_rand($nombres2)];
	}
	
	public function getApellidos()
	{
		$apellidos = array('Thunder', 'Frigor�fico', 'Computadora', 'Nirvana', 'Metallica', 'Sepultura', 'Pantero', 'Korn', 'Kobain', 'Cheto', 'Hermengenenildo');

		return $apellidos[array_rand($apellidos)];
	}

}