<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class CedulaModel extends Model
{
    protected $table = 'cedulas';

    public function getCedulas(){
    	$cedulas = DB::table('cedulas')
			         ->select('*')
			         ->get();

		return $cedulas;
    }

    public function getTotal()
    {
    	$cedulas = $this->getCedulas()->all();
    	$total = 0;

    	foreach ($cedulas as $key => $value) 
    	{
    		$total += $value->quantidade*$value->valor;
    	}

    	return $total;
    }

    public function atualizarQuantidadeNota($valor, $qnt){
    	$cedulas = DB::table('cedulas')
			           ->where('valor', $valor)
			           ->update(['quantidade' => $qnt]);

		return $cedulas;
    }

}
