<?php

    $nome = $_POST['nome'];
    $senha1 = $_POST['s1'];
    $senha2 = $_POST['s2'];

    if ( $nome != NULL ){

        if ( $senha1 == $senha2){

            echo "Sucesso !!!";
                      
        }else{

        echo "<h1>Olá, $nome suas senhas diferem!</h1>";
        echo "<a href=\"/exercicio-06/index.php\">Voltar</a>";
    
        }
    }else{

        echo "<h1>Ops! Você esqueceu de inserir seu nome!</h1>";
    
    }
    
