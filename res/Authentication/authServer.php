<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 7/5/2019
 * Time: 11:37 PM
 */
$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "onlineShopping";
$conn = new mysqli($host, $dbUser, $dbPassword, $dbName);

$registerFirstName = isset($_POST["registerFirstName"]) ? $_POST["registerFirstName"] : "Query Parameter Not passed.";
$registerLastName = isset($_POST["registerLastName"]) ? $_POST["registerLastName"] : "Query Parameter Not passed.";
$registerEmail = isset($_POST["registerEmail"]) ? $_POST["registerEmail"] : "Query Parameter Not passed.";
$registerPassword = isset($_POST["registerPassword"]) ? $_POST["registerPassword"] : "Query Parameter Not passed.";
$registerConfirmPassword = isset($_POST["registerConfirmPassword"]) ? $_POST["registerConfirmPassword"] : "Query Parameter Not passed.";

$loginEmail = isset($_POST["loginEmail"]) ? $_POST["loginEmail"] : "Query Parameter Not passed.";
$loginPassword = isset($_POST["loginPassword"]) ? $_POST["loginPassword"] : "Query Parameter Not passed.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signUp'])) {
        if (empty($registerFirstName) && empty($registerLastName) && empty($registerEmail) && empty($password) && empty($registerConfirmPassword) && ($registerConfirmPassword != $password)) {
            echo "One or more fields are empty or Invalid <br>";
        } else {
            if ($conn->connect_error) {
                die("Connection error: " . $conn->connect_error);
            } else {
                $sql = "select * from user where (email='$registerEmail');";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    die("Email is already registered in database.");
                } else {
                    $pass = sha1($registerPassword);
                    $sql = "INSERT INTO user(firstName,lastName,email,password,photo,userType) VALUES('$registerFirstName','$registerLastName','$registerEmail','$pass','Photos/1.png',0)";
                    if ($conn->query($sql) === TRUE) {
                        header("Location: welcome.php");
                    } else {
                        echo "Error: " . $conn->error;
                    }
                }

                $conn->close();
            }
        }
    } else {
        if (empty($loginEmail) && empty($loginPassword)) {
            echo "One or more fields are empty or Invalid <br>";
        } else {
            if ($conn->connect_error) {
                die("Connection error: " . $conn->connect_error);
            } else {
                $pass = sha1($loginPassword);
                $sql = "select * from user where (email='$loginEmail' && password='$pass');";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    header("Location: welcome.php");
                } else {
                    die("Email has not been varified");
                }
                $conn->close();
            }
        }
    }
}

