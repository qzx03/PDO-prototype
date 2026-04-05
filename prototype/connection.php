<?php
$host = 'localhost';
$dbname = 'recipesdb';
$username = 'root';
$password = '';

try{
    $PDO = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connection successful";
}catch(PDOException $e){
    echo"Connection error: ". $e->getMessage();
}

?>