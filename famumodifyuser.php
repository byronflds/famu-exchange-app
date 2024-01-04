<?php
session_start();

$servername = "localhost";
$username = "BFIELDS";
$password = '';
$dbname = "myfamudb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$myusername=$_GET['tobemodified']; 
$myrating=$_GET['rating']; 
$mylastname=$_GET['lastnamechange']; 
$mypay=$_GET['pay']; 
$mybio =$_GET["biotobemodified"];

$sql = "UPDATE account_info SET Bio = '".$mybio."', seller_rating='".$myrating."', Lname='".$mylastname."', Pay='".$mypay."' WHERE username='".$myusername."'"; 

if ($conn->query($sql) === TRUE) {
$conn->close();
header("location:famuhomepage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

