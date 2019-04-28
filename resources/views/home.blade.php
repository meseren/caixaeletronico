@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Olá, Bom dia!</h1>
              <p class="text-lead text-light">Escolha a ação que deseja excutar</p>
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
                <a href="<?php echo action("DepositoController@depositar");?>">
                  <button type="button" class="btn btn-primary my-4 btn-conta">Saque da Conta Corrente</button>
                </a>
                <a href="<?php echo action("DepositoController@depositar");?>">
                  <button type="button" style="margin-bottom: 0px !important;"class="btn btn-primary my-4 btn-conta">Extrato</button>
                </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-10"></div>
            <div class="col-2">
              <a class="text-light" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <small>             
                    <i class="fas fa-sign-out-alt"></i> Sair
                  </small>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
        </div>
        </div>
      </div>
    </div>

@endsection