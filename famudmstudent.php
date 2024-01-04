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

$theirusername=$_GET['usersentto']; 
$themessage=$_GET['usermessage']; 
$myidnumber=$_SESSION['idnumber'];
$myusername=$_SESSION['username'];

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
VALUES ('".$themessage."','".$mytheiridnumber."','".$myidnumber."','".$myusername."')";
$resultss = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    header("location:famuhomepage.html");
	$conn->close();
} else {
    echo "Error deleting record: " . $conn->error;
}
?>