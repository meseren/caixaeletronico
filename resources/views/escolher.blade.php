@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Estamos quase lá...</h1>
              <p class="text-lead text-light">Escolha a opção de saque:</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
                <form action="{{ route('sacar') }}" method="post">
                  @csrf

                  @if(isset($opcoes) && $opcoes)
                  	<?php
					    Session::put('opcoes', $opcoes);
					?>
                  	@foreach ($opcoes as $i => $value) 
                  		<div>
                          <input name="opcao_notas" type="radio" value="{{$i}}">
                          <label>Opção {{ $i+1 }}</label>
                        </div>
                        <p>
	                  		@foreach ($value as $j => $notas)
	                  			{{$notas['qt']}} notas de R${{$notas['valor']}},00 <br>
	                  		@endforeach
                  		</p>
                  	@endforeach

                  	<div class="text-center">
	                  <button type="submit" class="btn btn-primary my-4">Continuar</button>
	                </div>

                  @else

                  <p class="alert-error-saque">
                  	OPS... <br>

                  	{{ $alerta }}

                  </p>

                  @endif

                  
                </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a class="text-light" href="{{ route('saque') }}">
                  <small>             
                    <i class="fas fa-arrow-left"></i> Voltar
                  </small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection