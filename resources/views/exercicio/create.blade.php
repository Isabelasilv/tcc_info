@extends('layouts.app')
@section('content')
<div class="container"> 

{{-- @if($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $message)
                    <p>{{ $message}}</p>
                @endforeach
            </div> 
        @endif --}}

        <form id="frmexercicio" name="frmexercicio" action="{{ route('exercicio.store') }}" method="POST">
        @csrf
        <div class="form-group col-6">
          <label for="periodo">Período:</label>
          <input type="text" class="form-control {{ $errors->has('periodo') ? 'is-invalid' : '' }}" id="periodo" name="periodo" placeholder="Informe o período">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('periodo', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form- col-6">
            <label for="kmatual">Km atual:</label>
            <input type="text" class="form-control {{ $errors->has('kmatual') ? 'is-invalid' : '' }} " id="kmatual" name="kmatual"  placeholder="Informe a quilometragem atual">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('kmatual', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group col-6">
          <label for="kmtotal">Km total:</label>
          <input type="text" class="form-control {{ $errors->has('kmtotal') ? 'is-invalid' : '' }}" id="kmtotal" name="kmtotal" placeholder="Informe a quilometragem total">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('kmtotal', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>

        <div class="form-group col-6">
          <label for="tempo">Tempo:</label>
          <input type="text" class="form-control {{ $errors->has('tempo') ? 'is-invalid' : '' }}" id="tempo" name="tempo" placeholder="Informe a tempo em minutos">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('tempo', 'Atenção esse campo é obrigatório')}}
            </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
</div>
@endsection

