@extends('principal')

@section('conteudo')

<form action="{{route('produtos.store')}}" method='post'>
    @csrf    
    <div class="form=group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form=group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" id="quantidade">
    </div>

    <div class="form=group">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="tipo">
    </div>

    <div class='text-right'>
        <input type='submit' value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">     
    </div>

</form>

@endsection