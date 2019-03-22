<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$name = $_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$state=$_POST['state'];
$photo=$_POST['photo'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into register(name, email,pass,state,sex,photo) VALUES ('$name', '$email', '$pass', '$state', '$sex', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("student Profile ADDED Succesfully");window.location=\'REGISTE.php\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>