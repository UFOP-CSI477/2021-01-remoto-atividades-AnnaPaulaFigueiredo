@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Pessoas</h1>
    </div>
</div>

<div class='container-fluid'>
    <table class="table table-bordered table-hover table-striped">
                <thead class='thead-dark'>
                    <tr>
                        <th> Nome </th>
                        <th> Bairro </th>
                        <th> Cidade </th>
                        <th> Estado </th>
                        <th> Data de Nascimento </th>
                    </tr>
                    
                </thead>

                @foreach($pessoas as $pes)
                    <tr>
                        <td>{{$pes->nome}}</td>
                        <td>{{$pes->bairro}}</td>
                        <td>{{$pes->cidade}}</td>
                        <td>{{$pes->estado}}</td>
                        <td>{{$pes->data_nascimento}}
                        </tr>
                        
                @endforeach
    </table>
</div>

@endsection