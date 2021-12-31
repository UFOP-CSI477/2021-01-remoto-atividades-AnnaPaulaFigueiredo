@extends('viewBase')

@section('content')

  
    <form action="{{route('protocols.update', $protocol->id)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form=group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome", value="{{$protocol->nome}}">
        </div>

        <div class="form=group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" id="price" value="{{$protocol->price}}">
        </div>

        <div class='text-right'>
            <input type='submit' value="Update" class="btn btn-primary">
            <input type="reset" value="Clean" class="btn btn-secondary">     
        </div>

    </form>



@endsection
