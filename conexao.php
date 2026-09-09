<?php

<<<<<<< HEAD
$servername = "127.0.0.1";
=======
$servername = "localhost";
>>>>>>> 72c4166ba15da22dbadd7aff4693346278f5da8c
$username = "root";
$password = "";
$dbname = "kaeru-admin";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}   