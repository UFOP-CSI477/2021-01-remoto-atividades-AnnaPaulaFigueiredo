@extends('viewBase')

@section('content')

  
    <form action="{{route('protocols.update', $protocol->id)}}" method='POST'>
        @csrf
        @method('PUT')

        <div class="form=group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name", value="{{$protocol->name}}">
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
