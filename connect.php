<?php

$host = 'localhost';
$dbname = 'pdo-crud';
$dbuser = 'root';
$dbpass = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
} catch (Exception $e) {
    //echo $e->getMessage();
    echo "Error connecting to database";
}

?>