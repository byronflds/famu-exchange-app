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

$myidentification= $_SESSION['idnumber']; 
$myitemname= $_POST['itemname'];
$myitemprice= $_POST['itemprice'];
$myitemdescription= $_POST['itemdescription'];


$sql="INSERT INTO item (Itemname,Price,sellerid,idescript)
VALUES ('".$myitemname."','".$myitemprice."','".$myidentification."','".$myitemdescription."')";

if ($conn->query($sql) === TRUE) {
$conn->close();
header("location:famuhomepage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>

