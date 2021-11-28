<?php

require '../vendor/autoload.php';

use App\Database\Connection;
use App\Database\AdapterSQLite;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;

    $estado = new Estado(1, "Minas Gerais", "MG");
    var_dump($estado);

    $cidade = new Cidade(1, "João Monlevade", "MG");
    var_dump($cidade);

    $produto = new Produto(1, "Arroz", "R$39,00");
    var_dump($produto);

$connection = new Connection(new AdapterSQLite());
var_dump($connection);

$connection->getAdapter()->open();

    $sql = "SELECT * FROM estados";
    $result = $connection->getAdapter()->get()->query($sql);

    echo "<hr><ol>";

    while($e = $result->fetch()) {
        echo "<li>" .$e["nome"] . "-" . $e['sigla'] . "</li>\n";
    }

    echo "</ol><hr>";
    

    $sql = "SELECT * FROM cidades";
    $result = $connection->getAdapter()->get()->query($sql);

    echo "<hr><ol>";

    while($e = $result->fetch()) {
        echo "<li>" .$e["nome"] . "-" . $e['estado_sigla'] . "</li>\n";
    }

    echo "</ol><hr>";

$connection->getAdapter()->close();