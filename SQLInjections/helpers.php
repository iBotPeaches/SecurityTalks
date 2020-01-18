<?php
$server = '127.0.0.1';
$database = 'security';
$port = '33102';
$username = 'root';
$password = 'root';

// Create connection
$conn = new mysqli($server, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
