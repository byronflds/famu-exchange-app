<?php
require 'famuchecklogin.php';
require 'famuadminchecks.php';
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
  <h1>Rate User (Enter old values if unchanged)</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famumodifyusers.php">Modify User</a></li>
        <li><a href="famulogout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
  
    <form id='register' action='famumodifyuser.php' method='get'>

<label for='tobemodified' >What user would you like to modify? </label>
<input type='text' name='tobemodified' id='tobemodified' />
<label for='biotobemodified' >Bio </label>
<input type='text' name='biotobemodified' id='biotobemodified' />
<label for='rating' >Rating: </label>
<input type='number' name='rating' id='rating' />
<label for='pay' >Pay: </label>
<input type='number' name='pay' id='pay' />
<label for='lastnamechange' >Last Name: </label>
<input type='text' name='lastnamechange' id='lastnamechange' />
<input type="submit" name = "submitmod" data-inline="true" value="Submit">


</form>
<div data-role="footer">		
	<div data-role="navbar">
		<ul>
			<li><a href="famudeleteuserproducts.php">Remove Product</a></li>
            <li><a href="famudeleteusers.php">Disable Account</a></li>
		    <li><a href="famulogout.php">Log Out</a></li>
		</ul>
	</div> <!-- /navbar -->
</div> <!-- /footer -->
  </div>
  </body>
  
</html>