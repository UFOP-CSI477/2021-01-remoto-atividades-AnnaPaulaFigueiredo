@extends('templates.template')

@section('navigation')

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
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
          <li>
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
                <h4 class="card-title"></br></br>Receitas</h4>
              </div>


              <div class="card-body">
                  @csrf
                  <table class="table">

                    <thead class=" text-primary">
                    </thead>

                    <tbody>
                      @foreach($receita as $r)
                        <tr>
                          <td class="text-center">
                            <a href="{{route('home.show', $r->id)}}">
                              <button class="btn btn-primary">{{ $r->nome }}</button>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>

                  </table>
              </div>
            </div>
          </div>
      </div>

@endsection