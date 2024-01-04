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

$theirusername=$_GET['buyeruser']; 
$meettime=$_GET['timetomeet']; 
$placetomeet=$_GET['tomeetat']; 
$myitem=$_GET['itemid'];
$myusername=$_SESSION['username'];
$myidnumber=$_SESSION['idnumber'];

$sql="SELECT * FROM account_info WHERE username = '".$theirusername."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
while ($row = $result->fetch_assoc()) {
$mytheiridnumber=$row['idnumber'];
	}
    }
 else {
    header("location:famulogin.html");
}	


// sql to send message of approved handshake

$sql="INSERT INTO messages (message,receiverid,senderid,senderusername)
VALUES ('Good news! User ".$myusername." has approved your purchase bid. You are to meet at ".$placetomeet." at ".$meettime.".','".$mytheiridnumber."','".$myidnumber."','".$myusername."')";
$resultss = $conn->query($sql);

// sql to delete a record
$sql = "DELETE FROM item WHERE itemno = ".$myitem."";
$results = $conn->query($sql);

$sql="INSERT INTO tran (sellerid,buyerid)
VALUES ('".$myidnumber."','".$mytheiridnumber."')";

if ($conn->query($sql) === TRUE) {
    header("location:famuhomepage.html");
	$conn->close();
} else {
    echo "Error deleting record: " . $conn->error;
}
?>