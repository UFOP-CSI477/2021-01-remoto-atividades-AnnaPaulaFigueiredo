@extends('viewBase')

@section('content')   

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Welcome to Administrative Area</h1>
    </div>
</div>

<div class='container'>

    <div class='row justify-content-center'>
        <div class="col-sm">
            <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="{{route('protocols.create')}}">
            Create a New Protocol
            </a>
        </div>

        <div class="col-sm">
            <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="{{route('viewListToEdit')}}">
            Edit a Protocol
            </a>
        </div>

        <div class="col-sm">
            <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" href="{{route('viewListToDestroy')}}" >
            Delete a Protocol
            </a>
        </div>

    </div>

</div>

@endsection