@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">        
    <div class="container">
        <h1 class="display-4"> Vacinas </h1>
    </div>
</div>
<div class='container-fluid'>
    <table class="table table-bordered table-hover table-striped">
                <thead class='thead-dark'>
                    <tr>
                        <th> Nome </th>
                        <th> Fabricante </th>
                        <th> Pais </th>
                        <th> Doses </th>
                    </tr>
                    
                </thead>

                @foreach($vacinas as $vac)
                    <tr>
                        <td>{{$vac->nome}}</td>
                        <td>{{$vac->fabricante}}</td>
                        <td>{{$vac->pais}}</td>
                        <td>{{$vac->doses}}</td>
                    </tr>
                        
                @endforeach
    </table>
</div>

@endsection