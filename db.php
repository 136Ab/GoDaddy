<?php
$host = "localhost";
$user = "uaozeqcbxyhyg";
$password = "f4kld3wzz1v3";
$dbname = "dbllgiigq8yzdc";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
