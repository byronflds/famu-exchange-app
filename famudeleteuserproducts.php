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
  <h1>Remove a product</h1>
  <div data-role="navbar">
      <ul>
        <li><a href="famuhomepage.php" data-icon="home"></a></li>
        <li><a href="famumymessages.php">My Messages</a></li>
        <li><a href="famulogout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
  
    <form id='register' action='famudeleteuserproduct.php' method='get'>

<label for='itemiddelete' >Enter Id number of Item to remove: </label>
<input type='number' name='itemiddelete' id='itemiddelete' />
<input type="submit" name = "submitmod" data-inline="true" value="Submit">

</form>

  </div>

 </body> 