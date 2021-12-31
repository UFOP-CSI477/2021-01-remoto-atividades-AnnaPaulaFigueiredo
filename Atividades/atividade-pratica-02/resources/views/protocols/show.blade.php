@extends('viewBase')

@section('content') 

<h1> Select Protocol to Edit  </h1>


<table class="table table-bordered table-hover table-striped">
            <thead class='thead-dark'>
                <tr>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Price </th>
                    </tr>
                </thead>

                <tbody>

                @foreach($protocols as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->quantidade}}</td>
                        <td>{{$p->tipo}}</td>
                        <td><a href="{{route('protocols.edit', $p->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                    </tr>
                    
                @endforeach
                </tbody>
            </table>

@endsection