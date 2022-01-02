@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">    
    <div class="container">
            <h1 class="display-4"> Unidades </h1>
    </div>
</div>

<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
                <thead class='thead-dark'>
                    <tr>
                        <th> Nome </th>
                        <th> Bairro </th>
                        <th> Cidade </th>
                        <th> Estado </th>
                    </tr>
                    
                </thead>

                @foreach($unidades as $uni)
                    <tr>
                        <td>{{$uni->nome}}</td>
                        <td>{{$uni->bairro}}</td>
                        <td>{{$uni->cidade}}</td>
                        <td>{{$uni->estado}}</td>
                    </tr>
                        
                @endforeach
    </table>
</div>

@endsection