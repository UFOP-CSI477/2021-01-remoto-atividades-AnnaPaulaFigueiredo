@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">    
    <div class="container">
        <h1 class="display-4"> Registros </h1>
    </div>
</div>

<div class="container-fluid">
    <table class="table table-bordered table-hover table-striped">
                <thead class='thead-dark'>
                    <tr>
                        <th> Id </th>
                        <th> Pessoa </th>
                        <th> Unidade </th>
                        <th> Vacina </th>
                        <th> Dose </th>
                        <th> Data </th>
                    </tr>
                    
                </thead>

                @foreach($registros as $reg)
                    <tr>
                        <td>{{$reg->id}}</td>
                        <td>{{$reg->pessoa_id}}</td>
                        <td>{{$reg->unidade_id}}</td>
                        <td>{{$reg->vacina_id}}</td>
                        <td>{{$reg->dose}}</td>
                        <td>{{$reg->data_registro}}</td>
                    </tr>
                        
                @endforeach
    </table>
</div>

@endsection