<?php namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

    private $request;
    private $cliente;

	public function __construct(Request $request, Cliente $cliente)
	{
		$this->middleware('guest');

        $this->request = $request;
        $this->cliente = $cliente;
	}


	public function index()
	{
        /*
         * Order
         */
        $order = $this->request->get('order', 'ASC');
        $by = $this->request->get('by', 'nome');

        $clientes = $this->cliente->orderBy($by, $order)->paginate();

        return view('welcome', compact('clientes'));
	}

}
