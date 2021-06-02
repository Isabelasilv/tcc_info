@extends('layouts.app')
@section('content')

<div class="container">
<form id="frmexercicio" name="frmexercicio" action="{{ route('exercicio.update', $exercicio->id) }}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
 <label for="periodo">Período</label>
 <input type="periodo" class="form-control" id="periodo" name="periodo" value="{{ $exercicio->periodo }}">
 </div>

 <div class="form-group">
 <label for="kmatual">KmAtual</label>
 <input type="kmatual" class="form-control" id="kmatual" name="kmatual" value="{{ $exercicio->kmatual }}">
 </div>

 <div class="form-group">
 <label for="kmtotal">KmTotal</label>
 <input type="kmtotal" class="form-control" id="kmtotal"  name="kmtotal" value="{{ $exercicio->kmtotal }}">
 </div>

 <div class="form-group">
 <label for="tempo">Tempo</label>
 <input type="tempo" class="form-control" id="tempo" name="tempo" value="{{ $exercicio->tempo }}">
 </div>
 
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>