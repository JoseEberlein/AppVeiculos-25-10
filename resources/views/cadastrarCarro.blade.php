@extends('padrao')
@section('content')
<section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{'/img/imagem-carro1.jpg'}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{'/img/imagem-carro2.jpg'}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{'/img/imagem-carro3.jpg'}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<div class="container">
<form>
  <fieldset enabled>
    <legend class="text-center">Buscar Veiculos</legend>


  <div class="opcoes">
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Marca</label>
      <select id="disabledSelect" class="form-select">
        <option>Selecione</option>
      </select>
    </div>

    
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Modelo</label>
      <select id="disabledSelect" class="form-select">
        <option>Selecione</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Ano</label>
      <select id="disabledSelect" class="form-select">
        <option>Selecione</option>
      </select>
    </div>


    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Cor</label>
      <select id="disabledSelect" class="form-select">
        <option>Selecione</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Valor</label>
      <select id="disabledSelect" class="form-select">
        <option>Selecione</option>
      </select>
    </div>
  

  </div>



@endsection