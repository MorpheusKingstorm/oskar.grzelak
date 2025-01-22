<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_login_page";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

print_r("Połączono pomyślnie z bazą danych!");
?>