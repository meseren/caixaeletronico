<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class DepositoModel extends Model
{
    protected $table = 'depositos';

    public function depositar($dados){
    	$deposito = DB::table('depositos')->insert(
					    ['agencia' => $dados['agencia'], 
						 'conta'   => $dados['conta'],
						 'valor'   => $dados['valor']
						]
					);

		return $deposito;
    }
}
