<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="pay";

$amount=$_GET['amount'];
$phone=$_GET['phone'];
$plan=$_GET['phone1'];


$conn= new mysqli("localhost","root","","bank");
$sql="INSERT INTO payment(amount,phone,mode) VALUES ('$amount','$phone','$mode')";
if ( $conn->query($sql)=== TRUE)

{ echo "<h2>New record Inserted successfully</h2>";}

else
{ echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();

?>