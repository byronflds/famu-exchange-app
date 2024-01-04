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

$myitem=$_GET['itemiddelete'];

$sql = "DELETE FROM item WHERE itemno = ".$myitem."";
$results = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    header("location:famuhomepage.html");
	$conn->close();
} else {
    echo "Error deleting record: " . $conn->error;
}

?>