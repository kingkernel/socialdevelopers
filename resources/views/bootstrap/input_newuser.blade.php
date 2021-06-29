<?php
$meses = [
    1=>"Janeiro",
    2=>"Fevereiro",
    3=>"Março",
    4=>"Abril",
    5=>"Maio",
    6=>"Junho",
    7=>"Julho",
    8=>"Agosto",
    9=>"Setembro",
    10=>"Outubro",
    11=>"Novembro",
    12=>"Dezembro"
];
?>
@extends("bootstrap.model")
@section("bodymain")
<div class="container">
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Participe!</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h4 class="pt-5 mt-5 mb-4 display-8 lh-1 fw-bold">De <b>Programadores</b> para<br/> <i>Programadores</i></h4>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <form action="http://{{$_SERVER["HTTP_HOST"]}}/newuserinput" method="POST">
          @csrf
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password :</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="passkey" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nome :</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="name" required>
            </div>
            <label for="inputPassword" class="col-sm-2 col-form-label">Sobrenome :</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="fullname" required>
            </div>
          </div>
          <div class="mb-2 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ano :</label>
            <div class="col-sm-3">
              <select class="form-select" name="ano_c" require>
                @for ($y = (intval(date("Y"))-100); $y <= intval(date("Y")); $y++)
                    <option value="{{$y}}">{{$y}}</option>
                @endfor
            </select>
            </div>
              <label for="inputPassword" class="col-sm-1 col-form-label">Mês:</label>
              <div class="col-sm-3">
                <select class="form-select" name="mes_c" require>
                  @for ($m = 1; $m <= 12; $m++)
                      <option value="{{$m}}">{{$meses[$m]}}</option>
                  @endfor
              </select>
              </div>
              <label for="inputPassword" class="col-sm-1 col-form-label">Dia :</label>
              <div class="col-sm-2">
                <select class="form-select" name="dia_c" require>
                  @for ($i = 1; $i <= 31; $i++)
                      @if(strlen($i) < 2)
                          <option value="{{$i}}">{{'0'.$i}}</option>
                          @else
                          <option value="{{$i}}">{{$i}}</option>
                      @endif
                  @endfor
              </select>
              </div>
          </div>
          <div class="mb-2 row">
            <div class="offset-md-2">
              <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection