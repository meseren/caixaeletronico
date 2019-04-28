<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Desenvolver um sistema que funciona como um caixa eletrônico.">
  <meta name="author" content="Melissa Seren">
  <title>Caixa Eletrônico</title>
  <!-- Favicon -->
  <link rel="stylesheet" href="<?php echo asset('img/brand/favicon.png')?>" type="text/css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo asset('vendor/nucleo/css/nucleo.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')?>" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo asset('css/argon.css?v=1.0.1')?>" type="text/css">
</head>

<body class="bg-default">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!-- Footer -->
<footer class="py-5">
<div class="container">
  <div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
      <div class="copyright text-center text-xl-left text-muted">
        &copy; 2019 <a href="https://github.com/meseren/caixaeletronico" class="font-weight-bold ml-1" target="_blank">Melissa Seren Ramos</a>
      </div>
    </div>
    <div class="col-xl-6">
      <ul class="nav nav-footer justify-content-center justify-content-xl-end">
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </div>
</div>
</footer>

</html>
