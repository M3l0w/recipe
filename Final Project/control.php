<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dbinfom";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
} else {
    header("Location: error.php");
}

$conn->close();
?>