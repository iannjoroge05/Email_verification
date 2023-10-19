<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (Username, Email, Password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
