<?php

//mysqli extension properties and methods
// For Local Server
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "personalBlog";


// For Local Server
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);


// For Live server
// $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);
$conn->set_charset("utf8");
