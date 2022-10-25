@extends('padrao')
@section('content')
<section>
<div class="container cadastroCarro">
<form class="row g-3" method="post" action="{{route('salvar-banco-carro', $registrosCarros->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo',$registrosCarros->modelo)}}" class="form-control" id="inputModelo" placeholder="Fusca">
    @error('modelo')
    <div>Preencher o campo modelo.</div>
    @enderror
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca',$registrosCarros->marca)}}" class="form-control" id="inputMarca" placeholder="BMW">
    @error('marca')
    <div>Preencher o campo marca.</div>
    @enderror
  </div>

  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano',$registrosCarros->ano)}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div>Preencher o campo ano.</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor',$registrosCarros->cor)}}" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div>Preencher o campo cor.</div>
    @enderror
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor',$registrosCarros->valor)}}" class="form-control" id="inputZip" placeholder="25.660,23">
    @error('valor')
    <div>Preencher o campo Valor.</div>
    @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>
@endsection
