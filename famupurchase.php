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

$firstname = $_GET["anames"];
$sql="SELECT * FROM item WHERE itemno = ".$firstname."";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
while ($row = $result->fetch_assoc()) {
	$sellerid = $row['sellerid'];
    $myitemname = $row['Itemname'];
    $buyername = $_SESSION['username'];	
	}
    }
 else {
    header("location:famulogin.html");
}
// sql to delete a record
$sql="INSERT INTO messages (message,receiverid)
VALUES ('Congratulations! User ".$buyername." wants to purchase your item ".$myitemname.". To approve this purchase initiate the handshake!','".$sellerid."')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("location:famuhomepage.html");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>