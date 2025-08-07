<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nexusgrab';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?> 