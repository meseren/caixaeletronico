<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class SaldoModel extends Model
{
	protected $table = 'saldos';

    public function getSaldo()
    {
    	$saldo = DB::table('saldos')
		         ->select('*')
		         ->where('user_id', session('user_id'))
		         ->orderBy('id','DESC')
		         ->first();

		return $saldo;
    }

    public function atualizarSaldo($valor, $id){
    	$saldo = DB::table('saldos')
			           ->where('id', $id)
			           ->update(['saldo' => $valor]);

		return $saldo;
    }
}
