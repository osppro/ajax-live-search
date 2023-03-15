<?php
//Database details
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'test';

//Create connection and select DB
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}