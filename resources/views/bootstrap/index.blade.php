<?php
$template = [
    1=> 'cerulean',
    2=> 'spacelabb',
    3=> 'cyborg',
    4=> 'darkly',
    5=> 'quartz',
    6=> 'sketchy',
    7=> 'superhero',
    8=> 'vapor'
];
$membros = new App\Models\User;
$quant_membros = $membros->count();
?>
@extends("bootstrap.model")
@section("headmain")
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/{{$template[rand(1, 8)]}}/bootstrap.min.css" /> --}}
@endsection
@section("bodymain")
<style>

  @import  url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  
  .navbar-icon-top .navbar-nav .nav-link > .fa {
    position: relative;
    width: 36px;
    font-size: 24px;
  }
  
  .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
    font-size: 0.75rem;
    position: absolute;
    right: 0;
    font-family: sans-serif;
  }
  
  .navbar-icon-top .navbar-nav .nav-link > .fa {
    top: 3px;
    line-height: 12px;
  }
  
  .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
    top: -10px;
  }
  
  @media (min-width: 576px) {
    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }
  
    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
      top: -7px;
    }
  }
  
  @media (min-width: 768px) {
    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }
  
    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
      top: -7px;
    }
  }
  
  @media (min-width: 992px) {
    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }
  
    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
      top: -7px;
    }
  }
  
  @media (min-width: 1200px) {
    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }
  
    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
      top: -7px;
    }
  }
  
  </style>

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark" style="padding: 10px">
  <a class="navbar-brand" href="#"><span class="fa fa-code"></span> Social Developers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/ ">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-users">
            <span class="badge badge-danger">
              {{$quant_membros}}
            </span>
          </i>
          Membros
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-comments">
            <span class="badge badge-warning">11</span>
          </i>
          Discursões
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-book">
            <span class="badge badge-info">11</span>
          </i>
          E-books
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
  </div>
  <div class="text-end">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Caminhos disponíveis
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="user/new/">Participar</a></li>
        <li><a class="dropdown-item" href="#">Conhecer</a></li>
        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Entrar</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">Mais que uma comunidade...</h1>
    <p class="lead fw-normal">Sua porta de entrada para a melhor familia de desenvoldedores do Brasil.</p>
    <a class="btn btn-success" href="#">Seja Bem Vindo</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-code"></span> Social developers <span class="fa fa-code"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="http://{{$_SERVER["HTTP_HOST"]}}/auth/login" method="POST">
        @csrf
      <div class="modal-body">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="keypass">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
      </div>
    </div>
  </div>
</div>
  @endsection