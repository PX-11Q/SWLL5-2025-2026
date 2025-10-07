<?php
$servername = "localhost";
$username = "jeff23288";
$password = "test1234";
$dbname = "Jeffo6";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
