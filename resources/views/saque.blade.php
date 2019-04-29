@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Área de Saque</h1>
              <p class="text-lead text-light">Insira o valor que deseja sacar abaixo:</p>
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

                <!-- Saldo Atual-->
                <div class="card card-stats mb-4 mb-lg-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Saldo Atual</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $saldo->saldo }}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                  <i class="fas fa-chart-bar"></i>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fim Saldo Atual-->

                <br>
                <form action="{{ route('sugestaonotas') }}" method="post">
                  @csrf
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                      </div>
                      <input id="valor" type="number" class="form-control" name="valor" placeholder="Valor" required autofocus>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Sacar</button>
                  </div>
                </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a class="text-light" href="{{ route('home') }}">
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