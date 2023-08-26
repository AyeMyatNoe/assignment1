<?php
$hostname = "localhost:81/";
$port = 3306;
$dbname = "assignment_db";
$uname = "root";
$pwd = "";
$pdo = new PDO(
    "mysql:hostname=$hostname; port=$port; dbname=$dbname",
    $uname,
    $pwd
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>