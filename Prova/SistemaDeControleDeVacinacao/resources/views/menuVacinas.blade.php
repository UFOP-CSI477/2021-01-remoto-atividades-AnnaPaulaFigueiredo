@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">        
    <div class="container" style="text-align: center">
        <h1 class="display-4"> Menu Vacinas </h1>
    </div>
</div>

<div class='container-fluid'  style="text-align: center">
    <a href="{{route('vacinas.index')}}" class="btn btn-primary btn-lg active btn-space " role="button" aria-pressed="true">Relatório</a>
    <a href="" class="btn btn-secondary btn-lg active btn-space" role="button" aria-pressed="true" disabled >Excluir</a>
</div>
@endsection