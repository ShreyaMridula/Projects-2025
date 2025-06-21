<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$name = $_GET['username'];

$email = $_GET['email'];

$pass  = $_GET['password'];

$conn = new mysqli("localhost", "root", "", "login");

$sql = "INSERT INTO login_det (Username,Email,Password)VALUES
('$name','$email','$pass')";

if ( $conn->query($sql)=== TRUE)

{ echo "<h2>New record Inserted successfully</h2>";
header("Location: login.php");
}

else
{ echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();

?>