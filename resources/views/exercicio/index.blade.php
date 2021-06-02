@extends('layouts.app')

@section('content')

<div class="container">
<h2>Exercícios</h2>
<hr>
<a href="{{ url('exercicio/create') }}" class="btn btn-success">Novo Exercício</a>
<br/><br/>
<table class="table">
 <thead class="thead-dark">
 <tr>

 <th scope="col">Id</th>
 <th scope="col">Período</th>
 <th scope="col">KmAtual</th>
 <th scope="col">KmTotal</th>
 <th scope="col">Tempo</th>
 <th scope="col">Opções</th>

 </tr>
 </thead>
 @foreach($exercicio as $exercicios)
 <tbody>
 <tr>
 <th>{{ $exercicios->id }}</th>
 <td>{{ $exercicios->periodo }}</td>
 <td>{{ $exercicios->kmatual }}</td>
 <td>{{ $exercicios->kmtotal }}</td>
 <td>{{ $exercicios->tempo }}</td>
 <td>
 <a href="{{ route('exercicio.edit',$exercicios->id)}}" class="btn btn-primary btn-sm">Editar</a>
    <a href="{{ url('exercicio/delete', ['id'=>$exercicios->id])}}" class="btn btn-danger btn-sm">Remover</a>
 </td>
 </tr>
 </td>
 </tbody>
 @endforeach
 </table>
 </div>
@endsection