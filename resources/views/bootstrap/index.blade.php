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

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Social Developers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
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
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
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
  @endsection