<?php

$conn = new mysqli("localhost2", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

?>