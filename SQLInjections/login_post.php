<?php
include('helpers.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";

// lol - old PHP is ugly.
global $conn;
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) <= 0) {
    echo 'LOGIN FAILED.';
    die();
}

$array = mysqli_fetch_array($result);
echo 'Successfully logged in as: ' . $array['username'];
