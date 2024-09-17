<?php
    $servername = "localhost"; // Change to your database server
    $username = "root";
    $password = "";
    $dbname = "testprojectdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
?>