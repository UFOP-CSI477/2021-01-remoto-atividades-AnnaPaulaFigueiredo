@extends('viewBase')

@section('content')   
<div class='container-fluid'>
    <form action="{{route('protocols.store')}}" method='post'>

        @csrf        
        <div class="form-row">
            <div class="col">
            <label for="nome">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            </div>
            
            <div class="col-md-4">
            <label for="produto_id">Price</label>
            <input type="number" class="form-control" name="price" id="price" min="0.00" max="10000.00" step="0.01">
            </div>
        </div>

        <br>

        <div class='text-right'>
            <input type='submit' value="Submit" class="btn btn-primary">
            <input type="reset" value="Clean" class="btn btn-secondary">     
        </div>

    </form>
</div>

@endsection