@extends('principal')

@section('content')
<br>
<div class='container-fluid'>
    <form action="{{route('pessoas.store')}}" method='post'>

        @csrf        
        <div class="form-row">
            <div class="col">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            </div>
            
            
            <div class="col">
            <label for="nome">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
            </div>

            <div class="col">
            <label for="nome">Data Nascimento</label>
            <input type="text" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
            <label for="nome">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro">
            </div>

            <div class="col">
            <label for="nome">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
            </div>

            <div class="col">
            <label for="nome">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado">
            </div>
        </div>
           


            
        </div>

        <br>

        <div class='text-right'>
            <input type='submit' value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">     
        </div>

    </form>
</div>

@endsection