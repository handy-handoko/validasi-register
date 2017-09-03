<?php 
$host = 'localhost';
$dbName = 'validasi';
$username = 'root';
$password = '';

$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
