<?php

use App\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


        Cliente::create(['documento' => '70243118000126', 'nome' => 'Acme', 'razao_social' => 'Acme Tecnologia LTDA']);
        Cliente::create(['documento' => '77646177000194', 'nome' => 'Coca Cola', 'razao_social' => 'Coca Cola Company SA']);
        Cliente::create(['documento' => '42156536000140', 'nome' => 'Azeredo Presentes', 'razao_social' => 'Carlos Azeredo de Souza - ME']);
        Cliente::create(['documento' => '17395765435',    'nome' => 'Joao da Silva']);
	}

}
