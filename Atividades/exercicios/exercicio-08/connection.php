<?php

    //configuração
    $dbfile = "./database/databaseExercicio08.db";
    $dbuser = "";
    $dbpassword = "";

    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword );

    // var_dump($connection);
