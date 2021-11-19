<!DOCTYPE html>
<html lang="pt-en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio-07</title>

    <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #3DC0B6;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #3DC0B6;
  }
  </style>

</head>

<body>

<?php

  echo "<table>
  <tr>
  <th>Estados</th>
  </tr>";

 while( $e = $estados->fetch()){

    echo "<tr>";
    echo "<td>".$e["nome"]."</td>";
    echo "</tr>";
  
  }
           
  echo "</table>";

  ?>

</body>
</html>