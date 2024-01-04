<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<style>

body {
    background: url(newfamu.jpg) no-repeat;
    background-attachment: fixed;
    background-position:center center;
    background-size:100% 100%;
}

.ui-page {
    background: transparent;
}
.ui-content{
    background: transparent;
}

.ui-form {
font-weight:bold;
}


</style>

</head>
<body>

<div data-role="page3">
  <div data-role="header">
  <h1>For Sale</h1>
  </div>
   <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famupostitems.php">Post Item</a></li>
		<li><a href="famumymessages.php">My Messages</a></li>
      </ul>
    </div>

  <div data-role="main" class="ui-content">
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

$sql = "SELECT * FROM item";
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
	
	   <form id='register' action='famupurchase.php' method='get'>

<label for='anames' >Enter item ID number to submit buyer proposal. </label>
<input type='text' name='anames' id='anames' />
<input type="submit" name = "submitmod" data-inline="true" value="Submit">


</form>
  </div>
</div>

  </body>
  <div data-role="footer">		
	<div data-role="navbar">
		<ul>
			<li><a href="famuregistration.php">Registration</a></li>
            <li><a href="famurateuser.php">Account Info</a></li>
		    <li><a href="famulogout.php">Log Out</a></li>
		</ul>
	</div> <!-- /navbar -->
</div> <!-- /footer -->