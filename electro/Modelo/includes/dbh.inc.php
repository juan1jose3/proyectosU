<?php
$dsn = "mysql:host=localhost;dbname=crud";
$dbUsername = "root";
$password = "";

try{
    $pdo = new PDO($dsn,$dbUsername,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOexception $e){
    echo "Connection failed: ".  $e->getMessage();
}