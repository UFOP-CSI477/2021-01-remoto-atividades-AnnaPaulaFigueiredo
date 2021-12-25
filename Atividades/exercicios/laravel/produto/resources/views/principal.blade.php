<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    
    <title>Principal</title>
   
    <style type='text/css'> 
        .logo{

            
            font-family:'Secular One', sans-serif;

        } 
    </style>

</head>
<body>
    
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class='navbar-brand logo' href="{{route('principal')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
</svg>
            Depósito
    </a>

    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="{{route('principal')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('produtos.index')}}">Produtos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('pessoas.index')}}">Pessoas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('compras.index')}}">Compras</a></li>
    </ul>

    </nav>

    @if(session('mensagem'))
        <div class="alert alert-success">
            {{session('mensagem')}}
        </div>
    @endif

    @yield('conteudo')


  

    </div>
</body>
</html>