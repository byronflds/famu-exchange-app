<?php
require 'famuchecklogin.php';
?>
<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


</head>
<body> 
	  <div data-role="page">
  <div data-role="header">
  <h1>Time to make a deal!</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famumymessages.php">My Messages</a></li>
        <li><a href="famulogout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
  
    <form id='register' action='famuinitiatehandshake.php' method='get'>

<label for='buyeruser' >Enter username of buyer. </label>
<input type='text' name='buyeruser' id='buyeruser' />
<label for='tomeetat' >Enter Meet Up Location </label>
<input type='text' name='tomeetat' id='tomeetat' />
<label for='timetomeet' >Enter Time for Meeting: </label>
<input type='text' name='timetomeet' id='timetomeet' />
<label for='itemid' >Enter item ID number: </label>
<input type='number' name='itemid' id='itemid' />
<input type="submit" name = "submitmod" data-inline="true" value="Submit">

</form>

  </div>

 </body> 
   <div>
  <form method="get" action="demo.php">
      <fieldset class="ui-field-contain">
        <label for="day">Items</label>
        <select name="aname" id="aname">
   

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

$sql = "SELECT * FROM item WHERE sellerid = '".$_SESSION["idnumber"]."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option>";
        echo  $row["Itemname"];
		echo " Price: ";
		echo  $row["Price"];
		echo " Item Number: ";
		echo  $row["itemno"];
		echo " Description: ";
		echo  $row["idescript"];
		echo "</option>";
		
		
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
 </select>
      </fieldset>
      
    </form>
</div>