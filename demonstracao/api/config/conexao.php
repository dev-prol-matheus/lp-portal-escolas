<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

// $host       = "localhost"; 
// $dbname     = "lc_db_local";
// $username   = "root"; 
// $password   = "";

// $host       = "localhost";
// $dbname     = "escola-israel";
// $username   = "root";
// $password   = "#B@*df98m!l4";
  
// HOMOLOGAÇÃO
// $host       = "108.181.92.73"; 
// $dbname     = "lc_db_prod"; 
// $username   = "lc_main"; 
// $password   = "#B@*df98m!l4";

// PRODUÇÃO
$host       = "108.181.92.74";
$dbname     = "port_escolas_v1";
$username   = "portal_usermain";
$password   = "#B@*df98m!l4";

try {   
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {    
    echo "Erro de conexão: " . $e->getMessage();
}

?>