<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercicio07</title>
</head>

<body>

    <blockquote class="blockquote text-center">
        <p class="mb-0">Cadastro de Produtos</p>
    </blockquote>

    <form class='row g-3 mx-auto' action="controllerInsertDatabase.php" method="post">

        <div class="row g-3">

            <div class="col-md-10 px-md-2 border bg-light" >
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name='inputNome'>
            </div>

            <div class="col-md-2 px-md-2 border bg-light">
                <label for="inputQuantidade" class="form-label">Quantidade</label>
                <input type="int" class="form-control" id="inputQuantidade" name='inputQuantidade'>
            </div>

            <div class='col-12'>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
    </form>
    
   

</body>
</html>

