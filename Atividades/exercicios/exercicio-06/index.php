<!DOCTYPE html>
<html lang="pt-en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio-06</title>
</head>
<body>
  <form action="exercicio-06/validar_exercicio-06.php" method="post" > 
   
  <div class="row g-3">
        <div class="col-sm-12">
            <figure class="text-center">
                <blockquote class="blockquote">
                  <p>Olá, seja bem vindo!</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                  </svg>
                </blockquote>
            <br>
            <input type="text" class="form-control" name="nome", placeholder="seu nome é ... ">
        </div>
        <br>
        <div class="col-sm-2">
          <input type="password" class="form-control" name="s1" placeholder="digite sua senha" >
        </div>
        <br>
        <div class="col-sm-2">
          <input type="password" class="form-control" name="s2" placeholder="repita sua senha">
        </div>
        <br>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-center">
            <button type="submit" class="btn btn-info" value="Carregar minhas informações">Carregar minhas informações</button>
          </div> 
    </div>
  </form>
</body>
</html>