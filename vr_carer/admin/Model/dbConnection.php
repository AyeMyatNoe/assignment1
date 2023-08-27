<?php
$hostname = "vrcarer-do-user-14484910-0.b.db.ondigitalocean.com";
$port = 25060;
$dbname = "assignment_db";
$uname = "doadmin";
$pwd = "AVNS_ImS10HQB_nUPs1BWdIq";
$pdo = new PDO(
    "mysql:hostname=$hostname; port=$port; dbname=$dbname",
    $uname,
    $pwd
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>