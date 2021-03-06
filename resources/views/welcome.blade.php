@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Bem vindo!</h1>
              <p class="text-lead text-light">Para começar, basta selecionar uma opção.</p>
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
                <a href="{{ route('home') }}">
                  <button type="button" class="btn btn-primary my-4 btn-conta">Acessar Minha Conta</button>
                </a>
                <a href="{{ route('deposito') }}">
                  <button type="button" class="btn btn-primary my-4 btn-conta">Depósito</button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection