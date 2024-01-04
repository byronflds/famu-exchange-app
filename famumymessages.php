<!DOCTYPE html>
<html>


<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


</head>
<body>

  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famudmstudents.php">Send Message</a></li>
		<li><a href="famuinitiatehandshakes.php">Initiate Handshake</a></li>
      </ul>
    </div>


  
<?php
require 'famuchecklogin.php';
$servername = "localhost";
$username = "BFIELDS";
$password = "";
$dbname = "myfamudb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname = $_SESSION['idnumber'];	

$sql = "SELECT msgid,message,senderusername FROM messages WHERE receiverid = ".$firstname."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
        echo "Message: " . $row["message"]. " From: " . $row["senderusername"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>

<div data-role="footer">		
	<div data-role="navbar">
		<ul>
			<li><a href="famudeleteuserproducts.php">Remove Product</a></li>
            <li><a href="famudeleteusers.php">Disable Account</a></li>
		    <li><a href="famulogout.php">Log Out</a></li>
		</ul>
	</div> <!-- /navbar -->
</div> <!-- /footer -->

</html>
