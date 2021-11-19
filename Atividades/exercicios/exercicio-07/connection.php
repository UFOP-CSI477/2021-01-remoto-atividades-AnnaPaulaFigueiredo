<?php

    
    $dbfile = "./db/database.sqlite";
    $dbuser = "";
    $dbpassword = "";

    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword );

 