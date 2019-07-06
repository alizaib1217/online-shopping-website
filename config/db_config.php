<?php
/**
 * Created by PhpStorm.
 * User: Hadi Tariq
 * Date: 6/07/2019
 * Time: 8:32 PM
 */
$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "onlineShopping";
$conn = mysqli_connect($host, $dbUser, $dbPassword, $dbName);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

