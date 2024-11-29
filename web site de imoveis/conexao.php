<?php

session_start(;)

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "login";

global $pdo;

try {
    
    $pdo = new PDO("mysql : dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODDE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "ERRO: ".$e->getmessage();
    exit;
}

?>