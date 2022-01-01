@extends('viewBase')

@section('content') 

<div class='container fluid'>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">  Select a protocol to Delete </h1>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped">
        
        <thead class='thead-dark'>
            <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Price </th>
                <th> Option </th>
            </tr>

        </thead>


        <tbody>
           @foreach($protocol as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->price}}</td>
                    <td>
                        <a class='navbar-brand logo' href="{{route('protocols.destroy', $p->id)}}">  
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                           
                    </tr>
                    
            @endforeach
        </tbody>


</table>
    
       
</div>
@endsection