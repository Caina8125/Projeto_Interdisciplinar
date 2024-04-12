<?php

$hostname = 'localhost:3306'; 
$username = 'root'; 
$password = 'Caina8125@'; 
$database = 'jornada_interdisciplinar'; 

try {

    $pdo = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {

    echo "Erro na conexão: " . $e->getMessage();
}
?>