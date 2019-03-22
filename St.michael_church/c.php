<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$name=$_POST['name'];
$pass=$_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "insert into new(name,password) VALUES ('$name','$pass')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("congrats you created your account!");window.location=\'index.html\';</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>