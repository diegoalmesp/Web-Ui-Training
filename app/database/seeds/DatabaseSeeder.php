<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('EmpresaTableSeeder');
		$this->command->info('Tabla de empresas poblada correctamente');

		$this->call('UsuarioTableSeeder');
		$this->command->info('Tabla de usuarios poblada correctamente');
	}

}
