<?php 
    try{
        $dsn = "mysql:dbname=db_reservas;host=localhost";
        $dbuser ="root";
        $dbpass = "";
        
        $pdo = new PDO($dsn, $dbuser, $dbpass);
    } catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }

?>