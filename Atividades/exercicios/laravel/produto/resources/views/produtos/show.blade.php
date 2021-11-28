@extends('principal')

@section('conteudo')

<h1> Dados do Produto </h1>

<p>Id        : {{$produto->id}}</p>
<p>Nome      : {{$produto->nome}}</p>
<p>Quantidade: {{$produto->quantidade}}</p>
<p>Tipo      : {{$produto->tipo}}</p>

<a href="{{route('produtos.edit', $produto->id)}}"> Editar </a>

<a href="{{route('produtos.index')}}"> Voltar </a>

<form name="frmDelete" action="{{route('produtos.destroy', $produto->id)}}" method="POST" onsubmit="return confirm('Confirma a exclusão do produto?')">
@csrf
@method("DELETE")
<input type='submit' value="Excluir">

@endsection