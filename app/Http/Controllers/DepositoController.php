<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DepositoModel;

class DepositoController extends Controller
{	
	private $DepositoModel;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->DepositoModel = new DepositoModel();
    }


    public function deposito(){
    	return view('deposito');
    }

    public function depositar(Request $request){
    	$dados = $request->all();
    	
    	return view('deposito')->with('insercao', $this->DepositoModel->depositar($dados));
    }
}
