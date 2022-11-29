<?php

try {
    $dsn = "mysql: dbname=signuplogin; host=localhost";
    $user="root";
    $pswd ="";

    $conn= new PDO($dsn,$user,$pswd);

    $conn->query("USE signuplogin");
} catch (PDOException $e) {
    die("Error connecting: ".$e->getMessage());
}

?>