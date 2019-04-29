<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SaldoModel;
use App\Model\CedulaModel;
use Session;

class SaqueController extends Controller
{	
	private $SaldoModel;
    private $CedulaModel;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->SaldoModel = new SaldoModel();
        $this->CedulaModel = new CedulaModel();
    }

    public function getSaldo()
    {
    	return view('saque')->with('saldo', $this->SaldoModel->getSaldo());
    }

    public function getSugestaoNotas(Request $request)
    {
        $opcoes = array();
        $dados = $request->all();
        $cedulas = $this->CedulaModel->getCedulas()->all();
        $qt = 0;
        $desconsiderar = false;
        $saldo = $this->SaldoModel->getSaldo();

        Session::put('valor', $dados['valor']);

        if($saldo->saldo >= $dados['valor']){

            #Poderá sacar somente se o valor for menor
            if($dados['valor'] <= $this->CedulaModel->getTotal())
            {

                while (count($cedulas) > 0) 
                {

                    $valor = $dados['valor'];

                    foreach ($cedulas as $key => $value) 
                    {
                        $opcoes[$qt][$key]['valor'] = $value->valor;
                        $opcoes[$qt][$key]['qt'] = (int)($valor/$value->valor);

                        if($opcoes[$qt][$key]['qt'] > $value->quantidade){
                            $desconsiderar = true;
                        }

                        $valor = $valor%$value->valor;

                        if($valor < 1){
                            break;
                        }

                    } //foreach

                    #Se não tiver a quantidade de cedulas suficiente, a opção é desconsiderada
                    if($desconsiderar){
                        unset($opcoes[$qt]);
                        $opcoes = array_values($opcoes);
                    }

                    #Destroi a primeira posição para poder gerar as outras opções
                    unset($cedulas[0]);
                    $cedulas = array_values($cedulas);
                    $qt++;

                } //while

                if($valor > 0)
                {
                    return view('escolher')->with('alerta', 'Infelizmente não é possível realizar o saque. Não há notas disponíveis.');
                }

                return view('escolher')->with('opcoes', $opcoes);
            }

            return view('escolher')->with('alerta', 'Infelizmente não é possível realizar o saque. Não há notas disponíveis.');
        }

        return view('escolher')->with('alerta', 'O seu saldo é inferior a este valor.');

    }

    public function sacar(Request $request){
        $dados = $request->all();
        $opcao = session('opcoes')[$dados['opcao_notas']];

        $cedulas = $this->CedulaModel->getCedulas()->all();

        foreach ($cedulas as $j => $notas) {
            foreach ($opcao as $i => $value) {
                if($value['valor'] == $notas->valor){
                    $qt =  $notas->quantidade - $value['qt'];
                    $this->CedulaModel->atualizarQuantidadeNota($notas->valor, $qt);
                }
            }
        }

        $this->atualizarSaldo();

        return view('finalizacao');
    }

    public function atualizarSaldo(){
        $saldo = $this->SaldoModel->getSaldo();

        $this->SaldoModel->atualizarSaldo(($saldo->saldo - session('valor')),$saldo->id);
    }

}
