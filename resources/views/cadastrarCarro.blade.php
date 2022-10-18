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



<section>
<div class="container cadastroCaminhao">
<form class="row g-3" method="post" action="{{route('salvar-banco-carro')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Fusca">
    @error('modelo')
    <div>Preencher o campo modelo.</div>
    @enderror
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" class="form-control" id="inputMarca" placeholder="BMW">
    @error('marca')
    <div>Preencher o campo marca.</div>
    @enderror
  </div>

  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div>Preencher o campo ano.</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div>Preencher o campo cor.</div>
    @enderror
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" class="form-label">Valor</label>
    <input type="text"  class="form-control" name="valor" id="inputZip" placeholder="25.660,23">
    @error('valor')
    <div>Preencher o campo Valor.</div>
    @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
</section>




@endsection