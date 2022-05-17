<?php

$servername="localhost";
$username="root";
$password="";

$dsn="mysql:host=$servername;dbname=store";

try {
    $db=new PDO ($dsn,$username,$password);
    //code...
} catch (PDOException $e) {
    echo 'Falid'. $e->getMessage();
}