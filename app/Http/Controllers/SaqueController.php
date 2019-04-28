<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SaldoModel;

class SaqueController extends Controller
{	
	private $SaldoModel;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
        $this->SaldoModel = new SaldoModel();
    }

    public function saque(){
    	return view('saque')->with('saldo', $this->SaldoModel->getSaldo());
    }
}
