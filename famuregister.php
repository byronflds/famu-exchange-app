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

$myusername= $_POST['uname']; 
$myidnumber= $_POST['pass']; 
$myfirstname= $_POST['name']; 
$mylastname= $_POST['lname']; 
$mybio= $_POST['bio']; 
$myadmin= $_POST['admin'];

$sql="INSERT INTO account_info (idnumber,Fname,Lname,Bio,username,ADMIN)
VALUES ('".$myidnumber."','".$myfirstname."','".$mylastname."','".$mybio."','".$myusername."','".$myadmin."')";

if ($conn->query($sql) === TRUE) {
$conn->close();
header("location:famuhomepage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>