<!DOCTYPE html>
<html lang="pt-en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercicio-08</title>

    <style>

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border-spacing: 30px;
    radius: 20px;
  }

  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 20px;
    radius: 5px;
  }

  tr:nth-child(even) {
    background-color: #808080;
  }
  </style>

</head>

<body>

  <a href="ViewInsert.php">Voltar</a>

  <?php

    require_once "connection.php";

    $registros = $connection->query("SELECT * FROM produtos");

  

    echo "
    <table class='table table-hover'>
    <tr>
    <th>id</th>
    <th>Nome</th>
    <th>Quantidade</th>
    </tr>";

  while( $r = $registros->fetch()){

      echo "<tr>";
      echo "<td>".$r["id"]."</td>" ;
      echo "<td>".$r["nome"]."</td>" ;
      echo "<td>".$r['unidade']."</td>";
      echo "</tr>";
    
    }
            
    echo "</table>";

  ?>

</body>
</html>