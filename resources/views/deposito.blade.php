@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
          <h1 class="text-white">Área de Depósito</h1>
          <p class="text-lead text-light">É necessário preencher as informações abaixo:</p>
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
        <div class="card-body px-lg-5 py-lg-5">
          <form action="{{ route('depositar') }}" method="POST" role="form">
            @csrf
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-building"></i></span>
                </div>
                <input class="form-control" placeholder="Agência" name="agencia" type="number" required>
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-address-card"></i></span>
                </div>
                <input class="form-control" placeholder="Conta" name="conta" type="number" required>
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                </div>
                <input class="form-control" placeholder="Valor" name="valor" type="number" required>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-4">Depositar</button>
            </div>
          </form>
          @if(isset($insercao) && $insercao)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Depósito realizado com sucesso!
            </div>
          @endif
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-6">
          <a href="/" class="text-light"><small><i class="fas fa-arrow-left"></i> Voltar ao Início</small></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

