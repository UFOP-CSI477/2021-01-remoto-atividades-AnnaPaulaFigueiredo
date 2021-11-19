<?php

    require "connection.php";

    $nome = $_POST['inputNome'];
    $unidade = $_POST['inputQuantidade'];
   
    
    if(empty($nome) || empty($unidade)){
        echo("<div><a href='viewInsert.php'>Voltar</a></div>");
        die("O ou um dos campos estão null ou com caractere insuficientes.");
    }
    if( $unidade <= 0){
        echo("<div><a href='viewInsert.php'>Voltar</a></div>");
        die("Você não digitou um valor para unidade aceitável.");
    }
    if(is_string($nome) == 0){
        echo("<div><a href='viewInsert.php'>Voltar</a></div>");
        die("Você não digitou um nome de produto aceitável.");
    }

    try {
    

    $connection->beginTransaction();

    $stmt = $connection->prepare("INSERT INTO produtos (nome, unidade) VALUES (:nome, :unidade)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':unidade', $unidade);

    $stmt->execute();

    $connection->commit();

    header('Location: index.php');
    
    exit();

    }

    catch(Exception $e){

        $connection->rollBack();
        die("Erro ao inserir o produto: ".$e->getMessage());

    }
