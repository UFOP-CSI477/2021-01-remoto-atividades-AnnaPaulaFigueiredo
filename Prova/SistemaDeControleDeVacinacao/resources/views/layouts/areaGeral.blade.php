@extends('principal')

@section('content')   
<br>
<div class="jumbotron jumbotron-fluid">        
    <div class="container" style="text-align: center">
        <h1 class="display-4"> Área Geral </h1>
    </div>
</div>

    <div class="container-fluid col-4">
        <table class="table table-bordered table-hover table-striped">
            <thead class='thead-dark'>
                <tr>
                    <th> Aplicação </th>
                    <th> Quantidade </th>
                </tr>
            </thead>

            @foreach($resultAplicacao as $ap)
                <tr>
                @if ($ap->dose == 1)
                    <td>Dose Única</td>
                @elseif ($ap->dose == 2)
                    <td>Primeira Dose</td>
                @elseif ($ap->dose == 3)
                    <td>Segunda Dose</td>
                @endif
                <td>{{$ap->sum_dose}}</td>   
                </tr>
            @endforeach

            @foreach($total as $t)
        
            <tr>
                <td>Total Geral</td>
                <td>{{$t->sum_dose}}</td>
            </tr>


            @endforeach
        
        </table>
    </div>

    <br>

    <div class="container-fluid col-4">
        <table class="table table-bordered table-hover table-striped">
            <thead class='thead-dark'>
                <tr>
                    <th> Vacina </th>
                    <th> Quantidade </th>
                </tr>
            </thead>

            @foreach($fabricanteDoses as $fab)
                <tr>
                    <td>{{$fab->fabricante}}</td>
                    <td>{{$fab->qnt_doses}}</td>
                </tr>
            @endforeach

           
        </table>
    </div>


@endsection