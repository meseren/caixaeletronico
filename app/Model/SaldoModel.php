<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class SaldoModel extends Model
{
	protected $table = 'saldos';

    public function getSaldo(){
    	$saldo = DB::table('saldos')
		         ->select('saldo')
		         ->where('user_id', session('user_id'))
		         ->orderBy('id','DESC')
		         ->first();

		return $saldo;
    }
}
