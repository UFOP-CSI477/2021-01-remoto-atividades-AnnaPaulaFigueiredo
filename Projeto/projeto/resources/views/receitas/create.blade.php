@extends('templates.template')

@section('navigation')

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('')}}">
              <i class="now-ui-icons emoticons_satisfied"></i>
              <p>Início</p>
            </a>
          </li>
          <li>
            <a href="{{url('favoritos')}}">
              <i class="now-ui-icons ui-2_favourite-28"></i>
              <p>Favoritos</p>
            </a>
          </li>
          <li class="active">
            <a href="{{url('receitas')}}">
              <i class="now-ui-icons location_bookmark"></i>
              <p>Minhas receitas</p>
            </a>
          </li>
        </ul>
    </div>
      
@endsection

@section('content')

<div class="main-panel" id="main-panel">
  
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->

      
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-header">
                <h4 class="card-title"></br></br>Cadastrar receita</h4>
                <a href="{{route('receitas.index')}}">
                  <button class="btn btn-primary">Voltar</button>
                </a>
              </div>

              <div class="card-body">
                
                    <form name="formCad" id="formCad" method="post" action="{{url('receitas')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text"  name="nome" id="nome" required>
                            
                            <label for="tempo">Tempo</label>
                            <input class="form-control" type="number"  name="descricao" id="descricao" min="1" placeholder="Em minutos" required>

                            <label for="qnt_pessoas">Quantidade de pessoas</label>
                            <input class="form-control" type="number"  name="qnt_pessoas" id="qnt_pessoas" min="1" required>

                            <label for="ingredientes">Ingredientes</label>
                            <input class="form-control" type="text"  name="ingredientes" id="ingredientes" required>

                            <label for="modo_de_preparo">Modo de preparo</label>
                            <input class="form-control" type="text"  name="modo_de_preparo" id="modo_de_preparo" required>
                            
                            <label for="tipo">Tipo</label>
                            <input class="form-control" type="text"  name="tipo" id="tipo" required>

                            <div class="text-center">
                              <input class="btn btn-success mt-3 mb-4" type="submit" value="Inserir">
                              <input class="btn btn-danger mt-3 mb-4" type="reset" value="Limpar">
                            </div>
                        </div>
                    </form>
                
            </div>

        </div>
    </div>
</div>

@endsection